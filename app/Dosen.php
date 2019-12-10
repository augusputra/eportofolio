<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "dosen";

    protected $fillable = ['id', 'nama', 'nidn', 'tanggal_lahir', 'alamat',
        'program_keahlian', 'telp', 'email', 'password', 'fakultas', 'foto' ];
}
