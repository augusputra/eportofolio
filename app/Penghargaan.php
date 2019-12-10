<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    protected $table = "penghargaan";

    protected $fillable = ['id', 'nama_kegiatan', 'deskripsi', 'tahun', 'file_sertifikat', 'mahasiswa_id' ];
}
