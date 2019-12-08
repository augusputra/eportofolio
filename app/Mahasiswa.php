<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";

    protected $fillable = ['id', 'nama', 'nim', 'angkatan', 'tahun_masuk', 'tanggal_lahir', 'alamat',
        'ipk_terakhir', 'program_keahlian', 'telp', 'email', 'password', 'fakultas', 'foto' ];
}
