<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenghargaanDosen extends Model
{
    protected $table = "penghargaan_dosen";

    protected $fillable = ['id', 'nama_kegiatan', 'deskripsi', 'tahun', 'file_sertifikat', 'dosen_id' ];
}
