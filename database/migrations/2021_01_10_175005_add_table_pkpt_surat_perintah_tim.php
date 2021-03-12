<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTablePkptSuratPerintahTim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkpt_surat_perintah_tim', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no_tim')->default(1);
            $table->integer('id_surat_perintah');
            $table->integer('id_inspektur');
            $table->integer('id_inspektur_pembantu');
            $table->integer('id_pengendali_teknis');
            $table->integer('id_ketua_tim');
            $table->dateTime('created_at')->nullable();
            $table->integer('created_by')->default(0);
            $table->dateTime('updated_at')->nullable();
            $table->integer('updated_by')->default(0);
            $table->dateTime('deleted_at')->nullable();
            $table->integer('deleted_by')->default(0);
            $table->boolean('is_deleted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pkpt_surat_perintah_tim');
    }
}
