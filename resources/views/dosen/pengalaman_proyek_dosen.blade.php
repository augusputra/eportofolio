@extends('dosen.dosen_layout')
@section('content')

<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pengalaman Proyek</h6>
      <br>
      <a href="{{url('/tambah-pengalaman-proyek_dosen')}}" class="btn btn-primary btn-icon-split">
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
              <th>Tanggal Proyek</th>
              <th>Nama Proyek</th>
              <th>Deskripsi</th>
            </tr>
          </thead>

          <tbody>

            <?php
                $semua_proyek = DB::table('pengalaman_proyek_dosen')->get();

                foreach($semua_proyek as $key)
                {
            ?>

            <tr>
              <td>{{$key->tanggal_proyek}}</td>
              <td>{{$key->nama_proyek}}</td>
              <td>{{$key->deskripsi}}</td>
              <td>
              <a href="{{URL::to('/edit-pengalaman-proyek_dosen/'.$key->id)}}" class="btn btn-primary btn-icon-split">
                <span class="text">
                    <i class="fas fa-edit"></i>
                </span>
              </a>
              <a href="{{URL::to('/hapus-pengalaman-proyek_dosen/'.$key->id)}}" class="btn btn-danger btn-icon-split">
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