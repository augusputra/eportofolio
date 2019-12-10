<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenghargaanDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghargaan_dosen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kegiatan');
            $table->string('deskripsi');
            $table->integer('tahun');
            $table->string('file_sertifikat');
            $table->integer('dosen_id');
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
        Schema::dropIfExists('penghargaan_dosen');
    }
}
