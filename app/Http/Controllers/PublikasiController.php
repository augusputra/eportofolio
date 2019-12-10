<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\Publikasi;
use Illuminate\support\Facades\Redirect;
session_start();

class PublikasiController extends Controller
{
    public function index()
    {
        return view('dosen.publikasi');
    }

    public function tambah_publikasi()
    {
        return view('dosen.tambah_publikasi');
    }

    public function simpan_publikasi(Request $request)
    {
        $publikasi = new Publikasi();
        $publikasi->nama_jurnal = $request->nama_jurnal;
        $publikasi->judul_jurnal = $request->judul_jurnal;
        $publikasi->nama_author = $request->nama_author;
        $publikasi->tahun_publikasi = $request->tahun_publikasi;
        $publikasi->DOI = $request->DOI;
        $publikasi->dosen_id = $request->dosen_id;
        $publikasi->save();

        return Redirect()->back()->with(['success' => 'Publikasi berhasil ditambah']);
    }

    public function edit_publikasi($id)
    {
        $publikasi_info=DB::table('publikasi')
    		->where('id', $id)
    		->first();

    	return view('dosen.edit_publikasi')
    		->with('publikasi_info', $publikasi_info);
    }

    public function ubah_publikasi(Request $request, $id)
    {
        $publikasi = Publikasi::find($id);
        $publikasi->nama_jurnal = $request->nama_jurnal;
        $publikasi->judul_jurnal = $request->judul_jurnal;
        $publikasi->nama_author = $request->nama_author;
        $publikasi->tahun_publikasi = $request->tahun_publikasi;
        $publikasi->DOI = $request->DOI;
        $publikasi->dosen_id = $id;
        $publikasi->save();

        return Redirect()->back()->with(['success' => 'Publikasi berhasil diubah']);
    }

    public function hapus_publikasi($id)
    {
        $publikasi = Publikasi::find($id);
        $publikasi->delete();
        return Redirect()->back();
    }
}

