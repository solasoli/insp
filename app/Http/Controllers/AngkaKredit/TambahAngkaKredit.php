<?php

namespace App\Http\Controllers\AngkaKredit;

use App\Http\Controllers\Controller;
use App\Repository\SuratPerintah\SuratPerintah;
use Illuminate\Http\Request;
use Datatables;
use Validator;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Input;

class TambahAngkaKredit extends Controller{
    public function index()
    {
        return view('/angka-kredit/tambah-angka-kredit');
    }

    public function tableAuditor($id)
    {
        $data = [];
        $kt_dl = DB::table('pkpt_surat_perintah AS sp')
        ->select(DB::raw('pengendali_teknis.nama AS pengendali_teknis, ketua_tim.nama AS ketua_tim, spt.no_tim, pj_dalnis.name AS pj_dalnis, pj_ketua.name AS pj_ketua, spt.id_pengendali_teknis AS id_pt, spt.id_ketua_tim AS id_kt'))
        ->join('pkpt_surat_perintah_tim AS spt', 'spt.id_surat_perintah', '=', 'sp.id')
        ->join('pgw_pegawai AS pengendali_teknis', 'pengendali_teknis.id', '=', 'spt.id_pengendali_teknis')
        ->join('pgw_pegawai AS ketua_tim', 'ketua_tim.id', '=', 'spt.id_ketua_tim')
        ->join('pgw_jabatan AS pj_dalnis', 'pj_dalnis.id', '=', 'pengendali_teknis.id_jabatan')
        ->join('pgw_jabatan AS pj_ketua', 'pj_ketua.id', '=', 'ketua_tim.id_jabatan')
        ->where('sp.id', $id)
        ->get();

        $get_anggota = DB::table('pkpt_surat_perintah AS sp')
        ->selectRaw('pgw.nama, spt.no_tim, pj.name AS jabatan, pgw.id, sp.no_surat')
        ->join('pkpt_surat_perintah_anggota AS spa', 'spa.id_surat_perintah', '=', 'sp.id')
        ->join('pgw_pegawai AS pgw', 'spa.id_anggota', '=', 'pgw.id')
        ->join('pkpt_surat_perintah_tim AS spt', 'spt.id', '=', 'spa.id_surat_perintah_tim')
        ->join('pgw_jabatan AS pj', 'pgw.id_jabatan', '=', 'pj.id')
        ->where('sp.id', $id)
        ->get();

        $data = [$kt_dl, $get_anggota];

        return view('/angka-kredit/table-auditor-angka-kredit', [
            'kt_dl' => $kt_dl,
            'get_anggota' => $get_anggota,
            'data' => $data,
            'id' => $id
        ]);
    }
}