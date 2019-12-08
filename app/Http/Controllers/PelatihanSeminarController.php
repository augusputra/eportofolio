<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\PelatihanSeminar;
use Illuminate\support\Facades\Redirect;
session_start();

class PelatihanSeminarController extends Controller
{
    public function index()
    {
        return view('mahasiswa.pelatihan_seminar');
    }

    public function tambah_pelatihan_seminar()
    {
        return view('mahasiswa.tambah_pelatihan_seminar');
    }
}
