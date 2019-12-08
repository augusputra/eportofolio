<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelatihanSeminarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelatihan_seminar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kegiatan');
            $table->date('tanggal');
            $table->string('tampat');
            $table->string('status');
            $table->string('file_sertifikat');
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
        Schema::dropIfExists('pelatihan_seminar');
    }
}
