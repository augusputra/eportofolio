@extends('dosen.dosen_layout')
@section('content')

<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Publikasi</h6>
      <br>
      <a href="{{url('/tambah-publikasi')}}" class="btn btn-primary btn-icon-split">
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
              <th>Nama Jurnal</th>
              <th>Judul Jurnal</th>
              <th>Nama Author</th>
              <th>Tahun Publikasi</th>
              <th>DOI</th>
            </tr>
          </thead>

          <tbody>

            <?php
                $semua_publikasi = DB::table('publikasi')->get();

                foreach($semua_publikasi as $key)
                {
            ?>

            <tr>
              <td>{{$key->nama_jurnal}}</td>
              <td>{{$key->judul_jurnal}}</td>
              <td>{{$key->nama_author}}</td>
              <td>{{$key->tahun_publikasi}}</td>
              <td>{{$key->DOI}}</td>
              <td>
              <a href="{{URL::to('/edit-publikasi/'.$key->id)}}" class="btn btn-primary btn-icon-split">
                <span class="text">
                    <i class="fas fa-edit"></i>
                </span>
              </a>
              <a href="{{URL::to('/hapus-publikasi/'.$key->id)}}" class="btn btn-danger btn-icon-split">
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