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

    @if ($errors->has('nama_matakuliah'))
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>Keahlian gagal ditambah</strong>
      </div>
    @endif

    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Keahlian</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <form method="post" action="{{asset('/simpan-keahlian')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Matakuliah</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_matakuliah" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Software yang digunakan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="software" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nilai Matakuliah</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nilai" required>
        </div>
        <input type="hidden" name="mahasiswa_id" value="{{ Session::get('id') }}">
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

</div>

@endsection