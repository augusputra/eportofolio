<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Http\Requests;
use Session;
use App\Mahasiswa;
use Illuminate\support\Facades\Redirect;
session_start();

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.login');
    }

    public function register()
    {
        return view('mahasiswa.register');
    }

    public function dashboard()
    {
        return view('mahasiswa.dashboard');
    }

    public function print()
    {
        return view('mahasiswa.print');
    }
    
    public function tambah_mahasiswa(Request $request)
    {
        $this->validate($request, array(
            'nama'          =>  'required',
            'tahun_masuk'   =>  'required|min:4|max:4',
            'email'         =>  'required|unique:mahasiswa|max:255',
            'password'      =>  'required|min:8|max:16',
            'foto'          =>  'required | mimes:jpeg,jpg,png | max:1000',
        ));

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->tahun_masuk = $request->tahun_masuk;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->ipk_terakhir = $request->ipk_terakhir;
        $mahasiswa->program_keahlian = $request->program_keahlian;
        $mahasiswa->telp = $request->telp;
        $mahasiswa->email = $request->email;
        $mahasiswa->password = $request->password;
        $mahasiswa->fakultas = $request->fakultas;
        if ($request->hasFile('foto')) {
            $dir = 'uploads/';
            $extension = strtolower($request->file('foto')->getClientOriginalExtension()); // get image extension
            $fileName = str::random() . '.' . $extension; // rename image
            $request->file('foto')->move($dir, $fileName);
            $mahasiswa->foto = $fileName;
        }
        $mahasiswa->save();
        return redirect()->back();
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $result=DB::table('mahasiswa')
    			->where('email', $email)
    			->where('password', $password)
    			->first();

    	if ($result) {
    		Session::put('nama', $result->nama);
    		Session::put('nim', $result->nim);
    		Session::put('angkatan', $result->angkatan);
    		Session::put('tahun_masuk', $result->tahun_masuk);
    		Session::put('tanggal_lahir', $result->tanggal_lahir);
    		Session::put('alamat', $result->alamat);
    		Session::put('ipk_terakhir', $result->ipk_terakhir);
    		Session::put('program_keahlian', $result->program_keahlian);
    		Session::put('telp', $result->telp);
    		Session::put('email', $result->email);
    		Session::put('password', $result->password);
    		Session::put('fakultas', $result->fakultas);
    		Session::put('foto', $result->foto);
			Session::put('id', $result->id);
    		return Redirect::to('/dashboard');
    	}else{
    		Session::put('message', 'Email atau Password salah');
			return Redirect::to('/');
    	}
    }
    
    public function logout()
    {
    	Session::flush();
    	return Redirect::to('/');
    }
}
