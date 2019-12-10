@extends('dosen.dosen_layout')
@section('content')

<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pelatihan Seminar dan Workshop</h6>
      <br>
      <a href="{{url('/tambah-pelatihan-seminar_dosen')}}" class="btn btn-primary btn-icon-split">
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
              <th>Tanggal Kegiatan</th>
              <th>Tempat Pelaksanaan</th>
              <th>Status</th>
              <th>File Sertifikat</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>

            <?php
                $semua_pelatihan = DB::table('pelatihan_seminar_dosen')->get();

                foreach($semua_pelatihan as $key)
                {
            ?>

            <tr>
              <td>{{$key->nama_kegiatan}}</td>
              <td>{{$key->tanggal}}</td>
              <td>{{$key->tempat}}</td>
              <td>{{$key->status}}</td>
              <td>
                  <a href="{{URL::to('uploads/'.$key->file_sertifikat)}}">
                    {{$key->file_sertifikat}}
                  </a>
              </td>
              <td>
              <a href="{{URL::to('/edit-pelatihan-seminar_dosen/'.$key->id)}}" class="btn btn-primary btn-icon-split">
                <span class="text">
                    <i class="fas fa-edit"></i>
                </span>
              </a>
              <a href="{{URL::to('/hapus-pelatihan-seminar_dosen/'.$key->id)}}" class="btn btn-danger btn-icon-split">
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