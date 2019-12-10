<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vokasi extends Model
{
    protected $table = "sekolah_vokasi";

    protected $fillable = ['id','email', 'password'];
}
