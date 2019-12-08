<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengalamanProyek extends Model
{
    protected $table = "pengalaman_proyek";

    protected $fillable = ['id', 'nama_proyek', 'software', 'deskripsi', 'tahun', 'kegiatan_matakuliah', 'nilai',
        'mahasiswa_id' ];
}
