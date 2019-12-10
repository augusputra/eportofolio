<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use App\Http\Requests;
use Session;
use App\PelatihanSeminarDosen;
use Illuminate\support\Facades\Redirect;
session_start();

class PelatihanSeminarDosenController extends Controller
{
    
        public function index()
        {
            return view('dosen.pelatihan_seminar_dosen');
        }
    
        public function tambah_pelatihan_seminar()
        {
            return view('dosen.tambah_pelatihan_seminar_dosen');
        }
    
        public function simpan_pelatihan_seminar(Request $request)
        {
            $this->validate($request, array(
                'tanggal'                  => 'date | before:tomorrow',
                'file_sertifikat'          =>  'mimes:jpeg,jpg,png,pdf,doc | max:2048',
            ));
    
            $pelatihanseminardosen = new PelatihanSeminarDosen();
            $pelatihanseminardosen->nama_kegiatan = $request->nama_kegiatan;
            $pelatihanseminardosen->tanggal = $request->tanggal;
            $pelatihanseminardosen->tempat = $request->tempat;
            $pelatihanseminardosen->status = $request->status;
            if ($request->hasFile('file_sertifikat')) {
                $dir = 'uploads/';
                $extension = strtolower($request->file('file_sertifikat')->getClientOriginalExtension()); // get image extension
                $fileName = $request->nama_kegiatan . '_Sertifikat' . '.' . $extension; // rename image
                $request->file('file_sertifikat')->move($dir, $fileName);
                $pelatihanseminar->file_sertifikat = $fileName;
            }
            $pelatihanseminardosen->dosen_id = $request->dosen_id;
            $pelatihanseminardosen->save();
    
            return Redirect()->back()->with(['success' => 'Pelatihan Seminar dan Workshop berhasil ditambah']);
        }
    
        public function edit_pelatihan_seminar($id)
        {
            $pelatihan_info=DB::table('pelatihan_seminar')
                ->where('id', $id)
                ->first();
    
            return view('dosen.edit_pelatihan_seminar')
                ->with('pelatihan_info', $pelatihan_info);
        }
    
        public function ubah_pelatihan_seminar(Request $request, $id)
        {
            $this->validate($request, array(
                'tanggal'                  => 'date | before:tomorrow',
                'file_sertifikat'          =>  'mimes:jpeg,jpg,png,pdf,doc | max:2048',
            ));
    
            $pelatihanseminardosen = PelatihanSeminarDosen::find($id);
            $pelatihanseminardosen->nama_kegiatan = $request->nama_kegiatan;
            $pelatihanseminardosen->tanggal = $request->tanggal;
            $pelatihanseminardosen->tempat = $request->tempat;
            $pelatihanseminardosen->status = $request->status;
            if ($request->hasFile('file_sertifikat')) {
                $dir = 'uploads/';
                $extension = strtolower($request->file('file_sertifikat')->getClientOriginalExtension()); // get image extension
                $fileName = $request->nama_kegiatan . '_Sertifikat' . '.' . $extension; // rename image
                $request->file('file_sertifikat')->move($dir, $fileName);
                $pelatihanseminardosen->file_sertifikat = $fileName;
            }
            $pelatihanseminardosen->file_sertifikat = $request->file_sertifikat_lama;
            $pelatihanseminardosen->dosen_id = $request->dosen_id;
            $pelatihanseminardosen->save();
    
            return view('dosen.pelatihan_seminar')->with(['success' => 'Pelatihan Seminar dan Workshop berhasil ditambah']);
        }
    
        public function hapus_pelatihan_seminar($id)
        {
            $sertif = PelatihanSeminarDosen::where('id',$id)->first();
            File::delete('uploads/'.$sertif->file_sertifikat);
            $pelatihanseminardosen = PelatihanSeminarDosen::find($id);
            $pelatihanseminardosen->delete();
            return Redirect()->back();
        }
    
}
