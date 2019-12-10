<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengalamanProyekDosen extends Model
{
    protected $table = "pengalaman_proyek_dosen";

    protected $fillable = ['id','tanggal_proyek', 'nama_proyek', 'deskripsi', 'dosen_id' ];
}
