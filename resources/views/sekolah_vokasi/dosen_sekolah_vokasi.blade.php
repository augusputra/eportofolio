@extends('sekolah_vokasi.layout_sekolah_vokasi')
@section('content')

<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pengalaman mahasiswa</h6>
      <br>
      <a href="{{url('/tambah-pengalaman-mahasiswa')}}" class="btn btn-primary btn-icon-split">
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
              <th>Nama</th>
              <th>Nidn</th>
              <th>Tanggal Lahir</th>
              <th>Program Keahlian</th>
              <th>Telp</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>Foto</th>
              <th>Dibuat Pada</th>
              <th>Diubah Pada</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>

            <?php
            $semua_mahasiswa = DB::table('dosen')->get();

            foreach ($semua_mahasiswa as $key) {
              ?>

              <tr>
                <td>{{$key->nama}}</td>
                <td>{{$key->nidn}}</td>
                <td>{{$key->tanggal_lahir}}</td>
                <td>{{$key->program_keahlian}}</td>
                <td>{{$key->telp}}</td>
                <td>{{$key->email}}</td>
                <td>{{$key->alamat}}</td>
                <td>{{$key->foto}}</td>
                <td>{{$key->created_at}}</td>
                <td>{{$key->updated_at}}</td>
                <td>
                  <a href="{{URL::to('/detail-dosen-sekolah-vokasi/'.$key->id)}}" class="btn btn-primary btn-icon-split">
                    <span class="text">
                      Lihat
                    </span>
                  </a>
              </tr>

            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

@endsection