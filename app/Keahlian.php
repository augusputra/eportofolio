<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keahlian extends Model
{
    protected $table = "keahlian";

    protected $fillable = ['id', 'nama_matakuliah', 'software', 'nilai', 'mahasiswa_id' ];
}
