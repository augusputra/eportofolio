@extends('mahasiswa.mahasiswa_layout')
@section('content')

<div class="container-fluid">
  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    
    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($errors->has('tahun_mulai') || $errors->has('tahun_selesai'))
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>Pengalaman Organisasi gagal ditambah</strong>
      </div>
    @endif

    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pengalaman Organisasi</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <form method="post" action="{{asset('/simpan-pengalaman-organisasi')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Tahun Mulai</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="tahun_mulai" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tahun Selesai</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="tahun_selesai" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Organisasi</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_organisasi" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jabatan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="jabatan" required>
        </div>
        <input type="hidden" name="mahasiswa_id" value="{{ Session::get('id') }}">
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

</div>

@endsection