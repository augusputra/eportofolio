<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\Keahlian;
use Illuminate\support\Facades\Redirect;
session_start();

class KeahlianController extends Controller
{
    public function index()
    {
        return view('mahasiswa.keahlian');
    }

    public function tambah_keahlian()
    {
        return view('mahasiswa.tambah_keahlian');
    }

    public function simpan_keahlian(Request $request)
    {
        $keahlian = new Keahlian();
        $keahlian->nama_matakuliah = $request->nama_matakuliah;
        $keahlian->software = $request->software;
        $keahlian->nilai = $request->nilai;
        $keahlian->mahasiswa_id = $request->mahasiswa_id;
        $keahlian->save();

        return Redirect()->back()->with(['success' => 'Keahlian berhasil ditambah']);
    }

    public function edit_keahlian($id)
    {
        $keahlian_info=DB::table('keahlian')
    		->where('id', $id)
    		->first();

    	return view('mahasiswa.edit_keahlian')
    		->with('keahlian_info', $keahlian_info);
    }

    public function ubah_keahlian(Request $request, $id)
    {
        $keahlian = Keahlian::find($id);
        $keahlian->nama_matakuliah = $request->nama_matakuliah;
        $keahlian->software = $request->software;
        $keahlian->nilai = $request->nilai;
        $keahlian->mahasiswa_id = $id;
        $keahlian->save();

        return Redirect()->back()->with(['success' => 'Keahlian berhasil diubah']);
    }

    public function hapus_keahlian($id)
    {
        $keahlian = Keahlian::find($id);
        $keahlian->delete();
        return Redirect()->back();
    }
}
