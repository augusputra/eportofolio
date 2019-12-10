<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PelatihanSeminarDosen extends Model
{
    protected $table = "pelatihan_seminar_dosen";

    protected $fillable = ['id', 'nama_kegiatan', 'tanggal', 'tempat', 'status', 'file_sertifikat', 'dosen_id' ];
}
