<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Http\Requests;
use Session;
use App\Dosen;
use Illuminate\support\Facades\Redirect;
session_start();

class DosenController extends Controller
{
    public function index()
    {
        return view('dosen.login_dosen');
    }

    public function register()
    {
        return view('dosen.register_dosen');
    }

    public function dashboard()
    {
        return view('dosen.dashboard_dosen');
    }

    public function print()
    {
        return view('dosen.print_dosen');
    }
    
    public function tambah_dosen(Request $request)
    {
        $this->validate($request, array(
            'nama'          =>  'required',
            'email'         =>  'required|unique:dosen|max:255',
            'password'      =>  'required|min:8|max:16',
            'foto'          =>  'required | mimes:jpeg,jpg,png | max:1000',
        ));

        $dosen = new Dosen();
        $dosen->nama = $request->nama;
        $dosen->nidn = $request->nidn;
        $dosen->tanggal_lahir = $request->tanggal_lahir;
        $dosen->alamat = $request->alamat;
        $dosen->program_keahlian = $request->program_keahlian;
        $dosen->telp = $request->telp;
        $dosen->email = $request->email;
        $dosen->password = $request->password;
        $dosen->fakultas = $request->fakultas;
        if ($request->hasFile('foto')) {
            $dir = 'uploads/';
            $extension = strtolower($request->file('foto')->getClientOriginalExtension()); // get image extension
            $fileName = str::random() . '.' . $extension; // rename image
            $request->file('foto')->move($dir, $fileName);
            $dosen->foto = $fileName;
        }
        $dosen->save();
        return redirect()->back();
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $result=DB::table('dosen')
    			->where('email', $email)
    			->where('password', $password)
    			->first();

    	if ($result) {
    		Session::put('nama', $result->nama);
    		Session::put('nidn', $result->nidn);
    		Session::put('tanggal_lahir', $result->tanggal_lahir);
    		Session::put('alamat', $result->alamat);
    		Session::put('program_keahlian', $result->program_keahlian);
    		Session::put('telp', $result->telp);
    		Session::put('email', $result->email);
    		Session::put('password', $result->password);
    		Session::put('fakultas', $result->fakultas);
    		Session::put('foto', $result->foto);
			Session::put('id', $result->id);
    		return Redirect::to('/dashboard_dosen');
    	}else{
    		Session::put('message', 'Email atau Password salah');
			return Redirect::to('/logindosen');
    	}
    }
    
    public function logout()
    {
    	Session::flush();
    	return Redirect::to('/logindosen');
    }
}
