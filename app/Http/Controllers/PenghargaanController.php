<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\Http\Requests;
use Session;
use App\Penghargaan;
use Illuminate\support\Facades\Redirect;
session_start();

class PenghargaanController extends Controller
{
    public function index()
    {
        return view('mahasiswa.penghargaan');
    }

    public function tambah_penghargaan()
    {
        return view('mahasiswa.tambah_penghargaan');
    }

    public function simpan_penghargaan(Request $request)
    {
        $this->validate($request, array(
            'tahun'                    => 'min:4 | max:4',
            'file_sertifikat'          =>  'mimes:jpeg,jpg,png,pdf,doc | max:2048',
        ));

        $penghargaan = new Penghargaan();
        $penghargaan->nama_kegiatan = $request->nama_kegiatan;
        $penghargaan->deskripsi = $request->deskripsi;
        $penghargaan->tahun = $request->tahun;
        if ($request->hasFile('file_sertifikat')) {
            $dir = 'uploads/';
            $extension = strtolower($request->file('file_sertifikat')->getClientOriginalExtension()); // get image extension
            $fileName = $request->nama_kegiatan . '_Penghargaan_Sertifikat' . '.' . $extension; // rename image
            $request->file('file_sertifikat')->move($dir, $fileName);
            $penghargaan->file_sertifikat = $fileName;
        }
        $penghargaan->mahasiswa_id = $request->mahasiswa_id;
        $penghargaan->save();

        return Redirect()->back()->with(['success' => 'Penghargaan berhasil ditambah']);
    }

    public function edit_penghargaan($id)
    {
        $penghargaan_info=DB::table('penghargaan')
    		->where('id', $id)
    		->first();

    	return view('mahasiswa.edit_penghargaan')
    		->with('penghargaan_info', $penghargaan_info);
    }

    public function ubah_penghargaan(Request $request, $id)
    {
        $this->validate($request, array(
            'tahun'                    => 'min:4 | max:4',
            'file_sertifikat'          =>  'mimes:jpeg,jpg,png,pdf,doc | max:2048',
        ));

        $penghargaan = Penghargaan::find($id);
        $penghargaan->nama_kegiatan = $request->nama_kegiatan;
        $penghargaan->deskripsi = $request->deskripsi;
        $penghargaan->tahun = $request->tahun;
        if ($request->hasFile('file_sertifikat')) {
            $dir = 'uploads/';
            $extension = strtolower($request->file('file_sertifikat')->getClientOriginalExtension()); // get image extension
            $fileName = $request->nama_kegiatan . '_Penghargaan_Sertifikat' . '.' . $extension; // rename image
            $request->file('file_sertifikat')->move($dir, $fileName);
            $penghargaan->file_sertifikat = $fileName;
        }
        $penghargaan->file_sertifikat = $request->file_sertifikat_lama;
        $penghargaan->mahasiswa_id = $request->mahasiswa_id;
        $penghargaan->save();

        return view('mahasiswa.penghargaan')->with(['success' => 'Penghargaan berhasil ditambah']);
    }

    public function hapus_penghargaan($id)
    {
        $sertif = Penghargaan::where('id',$id)->first();
        File::delete('uploads/'.$sertif->file_sertifikat);
        $penghargaan = Penghargaan::find($id);
        $penghargaan->delete();
        return Redirect()->back();
    }
}
