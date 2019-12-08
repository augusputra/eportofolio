<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamanProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman_proyek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nama_proyek');
            $table->string('software');
            $table->LongText('deskripsi');
            $table->Integer('tahun');
            $table->String('kegiatan_matakuliah');
            $table->double('nilai');
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
        Schema::dropIfExists('pengalaman_proyek');
    }
}
