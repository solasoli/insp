<?php

namespace App\Repository\AngkaKredit;

use Illuminate\Database\Eloquent\Model;

class AkrPegawaiData extends Model
{
    protected $table = 'akr_pegawai_data';

    protected $fillable = ['document', 'id_akr_pegawai'];

    public function pegawai()
    {
        return $this->belongsTo('App\Repository\AngkaKredit\AkrPegawai', 'id');
    }
}
