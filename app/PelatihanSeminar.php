<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PelatihanSeminar extends Model
{
    protected $table = "pelatihan_seminar";

    protected $fillable = ['id', 'nama_kegiatan', 'tanggal', 'tempat', 'status', 'file_sertifikat', 'mahasiswa_id' ];
}
