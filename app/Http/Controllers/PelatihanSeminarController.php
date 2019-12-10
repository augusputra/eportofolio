<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use App\Http\Requests;
use Session;
use App\PelatihanSeminar;
use Illuminate\support\Facades\Redirect;
session_start();

class PelatihanSeminarController extends Controller
{
    public function index()
    {
        return view('mahasiswa.pelatihan_seminar');
    }

    public function tambah_pelatihan_seminar()
    {
        return view('mahasiswa.tambah_pelatihan_seminar');
    }

    public function simpan_pelatihan_seminar(Request $request)
    {
        $this->validate($request, array(
            'tanggal'                  => 'date | before:tomorrow',
            'file_sertifikat'          =>  'mimes:jpeg,jpg,png,pdf,doc | max:2048',
        ));

        $pelatihanseminar = new PelatihanSeminar();
        $pelatihanseminar->nama_kegiatan = $request->nama_kegiatan;
        $pelatihanseminar->tanggal = $request->tanggal;
        $pelatihanseminar->tempat = $request->tempat;
        $pelatihanseminar->status = $request->status;
        if ($request->hasFile('file_sertifikat')) {
            $dir = 'uploads/';
            $extension = strtolower($request->file('file_sertifikat')->getClientOriginalExtension()); // get image extension
            $fileName = $request->nama_kegiatan . '_Sertifikat' . '.' . $extension; // rename image
            $request->file('file_sertifikat')->move($dir, $fileName);
            $pelatihanseminar->file_sertifikat = $fileName;
        }
        $pelatihanseminar->mahasiswa_id = $request->mahasiswa_id;
        $pelatihanseminar->save();

        return Redirect()->back()->with(['success' => 'Pelatihan Seminar dan Workshop berhasil ditambah']);
    }

    public function edit_pelatihan_seminar($id)
    {
        $pelatihan_info=DB::table('pelatihan_seminar')
    		->where('id', $id)
    		->first();

    	return view('mahasiswa.edit_pelatihan_seminar')
    		->with('pelatihan_info', $pelatihan_info);
    }

    public function ubah_pelatihan_seminar(Request $request, $id)
    {
        $this->validate($request, array(
            'tanggal'                  => 'date | before:tomorrow',
            'file_sertifikat'          =>  'mimes:jpeg,jpg,png,pdf,doc | max:2048',
        ));

        $pelatihanseminar = PelatihanSeminar::find($id);
        $pelatihanseminar->nama_kegiatan = $request->nama_kegiatan;
        $pelatihanseminar->tanggal = $request->tanggal;
        $pelatihanseminar->tempat = $request->tempat;
        $pelatihanseminar->status = $request->status;
        if ($request->hasFile('file_sertifikat')) {
            $dir = 'uploads/';
            $extension = strtolower($request->file('file_sertifikat')->getClientOriginalExtension()); // get image extension
            $fileName = $request->nama_kegiatan . '_Sertifikat' . '.' . $extension; // rename image
            $request->file('file_sertifikat')->move($dir, $fileName);
            $pelatihanseminar->file_sertifikat = $fileName;
        }
        $pelatihanseminar->file_sertifikat = $request->file_sertifikat_lama;
        $pelatihanseminar->mahasiswa_id = $request->mahasiswa_id;
        $pelatihanseminar->save();

        return view('mahasiswa.pelatihan_seminar')->with(['success' => 'Pelatihan Seminar dan Workshop berhasil ditambah']);
    }

    public function hapus_pelatihan_seminar($id)
    {
        $sertif = PelatihanSeminar::where('id',$id)->first();
        File::delete('uploads/'.$sertif->file_sertifikat);
        $pelatihanseminar = PelatihanSeminar::find($id);
        $pelatihanseminar->delete();
        return Redirect()->back();
    }
}
