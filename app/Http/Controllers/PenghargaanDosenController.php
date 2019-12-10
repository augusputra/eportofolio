<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\Http\Requests;
use Session;
use App\PenghargaanDosen;
use Illuminate\support\Facades\Redirect;
session_start();

class PenghargaanDosenController extends Controller
{
    public function index()
    {
        return view('dosen.penghargaan_dosen');
    }

    public function tambah_penghargaan_dosen()
    {
        return view('dosen.tambah_penghargaan_dosen');
    }

    public function simpan_penghargaan_dosen(Request $request)
    {
        $this->validate($request, array(
            'tahun'                    => 'min:4 | max:4',
            'file_sertifikat'          =>  'mimes:jpeg,jpg,png,pdf,doc | max:2048',
        ));

        $penghargaandosen = new PenghargaanDosen();
        $penghargaandosen->nama_kegiatan = $request->nama_kegiatan;
        $penghargaandosen->deskripsi = $request->deskripsi;
        $penghargaandosen->tahun = $request->tahun;
        if ($request->hasFile('file_sertifikat')) {
            $dir = 'uploads/';
            $extension = strtolower($request->file('file_sertifikat')->getClientOriginalExtension()); // get image extension
            $fileName = $request->nama_kegiatan . '_Penghargaan_Sertifikat' . '.' . $extension; // rename image
            $request->file('file_sertifikat')->move($dir, $fileName);
            $penghargaan->file_sertifikat = $fileName;
        }
        $penghargaandosen->dosen_id = $request->dosen_id;
        $penghargaandosen->save();

        return Redirect()->back()->with(['success' => 'Penghargaan berhasil ditambah']);
    }

    public function edit_penghargaan_dosen($id)
    {
        $penghargaan_info=DB::table('penghargaan_dosen')
    		->where('id', $id)
    		->first();

    	return view('dosen.edit_penghargaan')
    		->with('penghargaan_info', $penghargaan_info);
    }

    public function ubah_penghargaan_dosen(Request $request, $id)
    {
        $this->validate($request, array(
            'tahun'                    => 'min:4 | max:4',
            'file_sertifikat'          =>  'mimes:jpeg,jpg,png,pdf,doc | max:2048',
        ));

        $penghargaandosen = PenghargaanDosen::find($id);
        $penghargaandosen->nama_kegiatan = $request->nama_kegiatan;
        $penghargaandosen->deskripsi = $request->deskripsi;
        $penghargaandosen->tahun = $request->tahun;
        if ($request->hasFile('file_sertifikat')) {
            $dir = 'uploads/';
            $extension = strtolower($request->file('file_sertifikat')->getClientOriginalExtension()); // get image extension
            $fileName = $request->nama_kegiatan . '_Penghargaan_Sertifikat' . '.' . $extension; // rename image
            $request->file('file_sertifikat')->move($dir, $fileName);
            $penghargaandosen->file_sertifikat = $fileName;
        }
        $penghargaandosen->file_sertifikat = $request->file_sertifikat_lama;
        $penghargaandosen->dosen_id = $request->dosen_id;
        $penghargaandosen->save();

        return view('dosen.penghargaan')->with(['success' => 'Penghargaan berhasil ditambah']);
    }

    public function hapus_penghargaan_dosen($id)
    {
        $sertif = PenghargaanDosen::where('id',$id)->first();
        File::delete('uploads/'.$sertif->file_sertifikat);
        $penghargaandosen = PenghargaanDosen::find($id);
        $penghargaandosen->delete();
        return Redirect()->back();
    }
}
