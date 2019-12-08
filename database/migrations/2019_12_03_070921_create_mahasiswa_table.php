<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('nim');
            $table->integer('angkatan');
            $table->integer('tahun_masuk');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->double('ipk_terakhir');
            $table->string('program_keahlian');
            $table->string('telp');
            $table->string('email');
            $table->string('password');
            $table->string('fakultas');
            $table->string('foto');
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
        Schema::dropIfExists('mahasiswa');
    }
}
