<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\PengalamanProyekDosen;
use Illuminate\support\Facades\Redirect;
session_start();

class PengalamanProyekDosenController extends Controller
{
    public function index()
    {
        return view('dosen.pengalaman_proyek_dosen');
    }

    public function tambah_pengalaman_proyek()
    {
        return view('dosen.tambah_pengalaman_proyek_dosen');
    }

    public function simpan_pengalaman_proyek(Request $request)
    {
        $pengalamanproyekdosen = new PengalamanProyekDosen();
        $pengalamanproyekdosen->tanggal_proyek = $request->tanggal_proyek;
        $pengalamanproyekdosen->nama_proyek = $request->nama_proyek;
        $pengalamanproyekdosen->deskripsi = $request->deskripsi;
        $pengalamanproyekdosen->dosen_id = $request->dosen_id;
        $pengalamanproyekdosen->save();

        return Redirect()->back()->with(['success' => 'Penglaman Proyek berhasil ditambah']);
    }

    public function edit_pengalaman_proyek_dosen($id)
    {
        $proyek_info=DB::table('pengalaman_proyek_dosen')
    		->where('id', $id)
    		->first();

    	return view('dosen.edit_pengalaman_proyek')
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
        $pengalamanproyek->dosen_id = $id;
        $pengalamanproyek->save();

        return Redirect()->back()->with(['success' => 'Pengalaman Proyek berhasil diubah']);
    }

    public function hapus_pengalaman_proyek($id)
    {
        $pengalamanproyek = PengalamanProyekDosen::find($id);
        $pengalamanproyek->delete();
        return Redirect()->back();
    }
}
