<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_jurnal');
            $table->string('judul_jurnal');
            $table->string('nama_author');
            $table->integer('tahun_publikasi');
            $table->string('DOI');
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
        Schema::dropIfExists('publikasi');
    }
}
