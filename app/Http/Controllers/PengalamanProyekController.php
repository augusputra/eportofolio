<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\PengalamanProyek;
use Illuminate\support\Facades\Redirect;
session_start();

class PengalamanProyekController extends Controller
{
    public function index()
    {
        return view('mahasiswa.pengalaman_proyek');
    }

    public function tambah_pengalaman_proyek()
    {
        return view('mahasiswa.tambah_pengalaman_proyek');
    }

    public function simpan_pengalaman_proyek(Request $request)
    {
        $pengalamanproyek = new PengalamanProyek();
        $pengalamanproyek->nama_proyek = $request->nama_proyek;
        $pengalamanproyek->software = $request->software;
        $pengalamanproyek->deskripsi = $request->deskripsi;
        $pengalamanproyek->tahun = $request->tahun;
        $pengalamanproyek->kegiatan_matakuliah = $request->kegiatan_matakuliah;
        $pengalamanproyek->nilai = $request->nilai;
        $pengalamanproyek->mahasiswa_id = $request->mahasiswa_id;
        $pengalamanproyek->save();

        return Redirect()->back()->with(['success' => 'Penglaman Proyek berhasil ditambah']);
    }

    public function edit_pengalaman_proyek($id)
    {
        $proyek_info=DB::table('pengalaman_proyek')
    		->where('id', $id)
    		->first();

    	return view('mahasiswa.edit_pengalaman_proyek')
    		->with('proyek_info', $proyek_info);
    }

    public function ubah_pengalaman_proyek(Request $request, $id)
    {
        $pengalamanproyek = PengalamanProyek::find($id);
        $pengalamanproyek->nama_proyek = $request->nama_proyek;
        $pengalamanproyek->software = $request->software;
        $pengalamanproyek->deskripsi = $request->deskripsi;
        $pengalamanproyek->tahun = $request->tahun;
        $pengalamanproyek->kegiatan_matakuliah = $request->kegiatan_matakuliah;
        $pengalamanproyek->nilai = $request->nilai;
        $pengalamanproyek->mahasiswa_id = $id;
        $pengalamanproyek->save();

        return Redirect()->back()->with(['success' => 'Penglaman Proyek berhasil diubah']);
    }

    public function hapus_pengalaman_proyek($id)
    {
        $pengalamanproyek = PengalamanProyek::find($id);
        $pengalamanproyek->delete();
        return Redirect()->back();
    }
}
