<?php

namespace App\Http\Controllers\AngkaKredit;

use App\Http\Controllers\Controller;
use App\Repository\AngkaKredit\AkrPegawai;
use App\Repository\SuratPerintah\SuratPerintah;
use Illuminate\Http\Request;
use Datatables;
use Validator;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Input;

class SekretariatDupak extends Controller{
    public function index()
    {
        $akrPegawai = AkrPegawai::all();
        $suratPerintah = DB::table('pkpt_surat_perintah AS sp')
            ->select(DB::raw('no_surat'))
            ->join('akr_pegawai AS ap', 'ap.id_surat_perintah', '=', 'sp.id')
            ->get();

        return view('/angka-kredit/sekretariat-dupak', [
            'akrPegawai' => $akrPegawai,
            'sp' => $suratPerintah
        ]);
    }
}