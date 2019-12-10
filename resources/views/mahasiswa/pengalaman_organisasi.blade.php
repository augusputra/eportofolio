@extends('mahasiswa.mahasiswa_layout')
@section('content')

<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pengalaman Organisasi</h6>
      <br>
      <a href="{{url('/tambah-pengalaman-organisasi')}}" class="btn btn-primary btn-icon-split">
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
              <th>Tahun Mulai</th>
              <th>Tahun Selesai</th>
              <th>Nama Organisasi</th>
              <th>Jabatan</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>

            <?php
                $semua_pengalaman_organisasi = DB::table('pengalaman_organisasi')->get();

                foreach($semua_pengalaman_organisasi as $key)
                {
            ?>

            <tr>
              <td>{{$key->tahun_mulai}}</td>
              <td>{{$key->tahun_selesai}}</td>
              <td>{{$key->nama_organisasi}}</td>
              <td>{{$key->jabatan}}</td>
              <td>
                <a href="{{URL::to('/edit-pengalaman-organisasi/'.$key->id)}}" class="btn btn-primary btn-icon-split">
                    <span class="text">
                        <i class="fas fa-edit"></i>
                    </span>
                </a>
                <a href="{{URL::to('/hapus-pengalaman-organisasi/'.$key->id)}}" class="btn btn-danger btn-icon-split">
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