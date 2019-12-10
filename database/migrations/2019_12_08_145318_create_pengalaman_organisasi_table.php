<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamanOrganisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penglaman_organisasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tahun_mulai');
            $table->integer('tahun_selesai');
            $table->string('nama_organisasi');
            $table->string('jabatan');
            $table->integer('mahasiswa_id');
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
        Schema::dropIfExists('penglaman_organisasi');
    }
}
