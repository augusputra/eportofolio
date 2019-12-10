<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use Session;
use App\Mahasiswa;
use Illuminate\support\Facades\Redirect;

session_start();

class SekolahVokasiController extends Controller
{
    public function index()
    {
        return view('sekolah_vokasi.login_sekolah_vokasi');
    }

    public function dashboard_sekolah_vokasi()
    {
        return view('sekolah_vokasi.dashboard_sekolah_vokasi');
    }

    public function dosen_sekolah_vokasi()
    {
        return view('sekolah_vokasi.dosen_sekolah_vokasi');
    }

    public function mahasiswa_sekolah_vokasi()
    {
        return view('sekolah_vokasi.mahasiswa_sekolah_vokasi');
    }

    public function detail_mahasiswa_sekolah_vokasi($id)
    {
        $mahasiswa_info = DB::table('mahasiswa')
            ->where('id', $id)
            ->first();

        return view('sekolah_vokasi.detail_mahasiswa_sekolah_vokasi')
            ->with('mahasiswa_info', $mahasiswa_info);
    }

    public function login_sekolah_vokasi(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $result = DB::table('sekolah_vokasi')
            ->where('email', $email)
            ->where('password', $password)
            ->first();

        if ($result) {
            Session::put('email', $result->email);
            Session::put('password', $result->password);
            Session::put('id', $result->id);
            return Redirect::to('/dashboard-sekolah-vokasi');
        } else {
            Session::put('message', 'Email atau Password salah');
            return Redirect::to('/');
        }
    }
}
