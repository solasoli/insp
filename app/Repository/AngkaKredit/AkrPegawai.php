<?php

namespace App\Repository\AngkaKredit;

use Illuminate\Database\Eloquent\Model;

class AkrPegawai extends Model
{
    protected $table = 'akr_pegawai';
    protected $fillable = ['id_surat_perintah', 'id_pegawai', 'peran', 'dari', 'sampai', 'jam', 'angka_kredit', 'id_unsur', 'id_butir_kegiatan', 'jumlah_hari'];

    public function butirKegiatan()
    {
        return $this->hasMany('App\Repository\AngkaKredit\ButirKegiatan', 'id');
    }

    public function akrPegawaiData()
    {
        return $this->hasMany('App\Repository\AngkaKredit\AkrPegawaiData', 'id_akr_pegawai');
    }

    public function suratPerintah()
    {
        return $this->belongsTo('App\Repository\SuratPerintah\SuratPerintah', 'id');
    }
}
