@extends('dosen.dosen_layout')
@section('content')

<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Penghargaan</h6>
      <br>
      <a href="{{url('/tambah-penghargaan_dosen')}}" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-flag"></i>
        </span>
        <span class="text">Tambah Data</span>
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama Kegiatan</th>
              <th>Deskripsi</th>
              <th>Tahun Kegiatan</th>
              <th>File Sertifikat</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>

            <?php
                $semua_penghargaan = DB::table('penghargaan_dosen')->get();

                foreach($semua_penghargaan as $key)
                {
            ?>

            <tr>
              <td>{{$key->nama_kegiatan}}</td>
              <td>{{$key->deskripsi}}</td>
              <td>{{$key->tahun}}</td>
              <td>
                  <a href="{{URL::to('uploads/'.$key->file_sertifikat)}}">
                    {{$key->file_sertifikat}}
                  </a>
              </td>
              <td>
                <a href="{{URL::to('/edit-penghargaan_dosen/'.$key->id)}}" class="btn btn-primary btn-icon-split">
                    <span class="text">
                        <i class="fas fa-edit"></i>
                    </span>
                </a>
                <a href="{{URL::to('/hapus-penghargaan_dosen/'.$key->id)}}" class="btn btn-danger btn-icon-split">
                <span class="text">
                        <i class="fas fa-trash"></i>
                    </span>
                </a>
              </td>
            </tr>

                <?php } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

@endsection