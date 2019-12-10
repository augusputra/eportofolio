<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    protected $table = "publikasi";

    protected $fillable = ['id', 'nama_jurnal', 'judul_jurnal', 'nama_author', 'tahun_publikasi', 'DOI', 'dosen_id' ];
}
