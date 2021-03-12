<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AkrPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akr_pegawai', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('id_akr_data_pegawai')->nullable(false);
            $table->integer('id_surat_perintah')->nullable(false);
            $table->integer('id_pegawai')->nullable(false);
            $table->integer('id_unsur')->nullable(false);
            $table->integer('id_butir_kegiatan')->nullable(false);
            $table->string('peran')->nullable(false);
            $table->integer('jumlah_hari');
            $table->integer('jam');
            $table->float('angka_kredit');
            $table->string('document')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
