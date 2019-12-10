<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\PengalamanOrganisasi;
use Illuminate\support\Facades\Redirect;
session_start();

class PengalamanOrganisasiController extends Controller
{
    public function index()
    {
        return view('mahasiswa.pengalaman_organisasi');
    }

    public function tambah_pengalaman_organisasi()
    {
        return view('mahasiswa.tambah_pengalaman_organisasi');
    }

    public function simpan_pengalaman_organisasi(Request $request)
    {
        $this->validate($request, array(
            'tahun_mulai'       => 'min:4 | max:4',
            'tahun_selesai'     => 'min:4 | max:4',
        ));

        $pengalamanorganisasi = new PengalamanOrganisasi();
        $pengalamanorganisasi->tahun_mulai = $request->tahun_mulai;
        $pengalamanorganisasi->tahun_selesai = $request->tahun_selesai;
        $pengalamanorganisasi->nama_organisasi = $request->nama_organisasi;
        $pengalamanorganisasi->jabatan = $request->jabatan;
        $pengalamanorganisasi->mahasiswa_id = $request->mahasiswa_id;
        $pengalamanorganisasi->save();

        return Redirect()->back()->with(['success' => 'Pengalaman Organisasi berhasil ditambah']);
    }

    public function edit_pengalaman_organisasi($id)
    {
        $pengalaman_organisasi_info=DB::table('pengalaman_organisasi')
    		->where('id', $id)
    		->first();

    	return view('mahasiswa.edit_pengalaman_organisasi')
    		->with('pengalaman_organisasi_info', $pengalaman_organisasi_info);
    }

    public function ubah_pengalaman_organisasi(Request $request, $id)
    {
        $this->validate($request, array(
            'tahun_mulai'       => 'min:4 | max:4',
            'tahun_selesai'     => 'min:4 | max:4',
        ));

        $pengalamanorganisasi = PengalamanOrganisasi::find($id);
        $pengalamanorganisasi->tahun_mulai = $request->tahun_mulai;
        $pengalamanorganisasi->tahun_selesai = $request->tahun_selesai;
        $pengalamanorganisasi->nama_organisasi = $request->nama_organisasi;
        $pengalamanorganisasi->jabatan = $request->jabatan;
        $pengalamanorganisasi->mahasiswa_id = $id;
        $pengalamanorganisasi->save();

        return Redirect()->back()->with(['success' => 'Pengalaman Organisasi berhasil diubah']);
    }
}
