<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamanProyekDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman_proyek_dosen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_proyek');
            $table->String('nama_proyek');
            $table->LongText('deskripsi');
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
        Schema::dropIfExists('pengalaman_proyek_dosen');
    }
}
