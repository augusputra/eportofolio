<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengalamanOrganisasi extends Model
{
    protected $table = "pengalaman_organisasi";

    protected $fillable = ['id', 'tahun_mulai', 'tahun_selesai', 'nama_organisasi', 'jabatan', 'mahasiswa_id' ];
}
