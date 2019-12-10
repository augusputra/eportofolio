@extends('dosen.dosen_layout')
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

    @if ($errors->has('nama_jurnal'))
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>Publikasi gagal ditambah</strong>
      </div>
    @endif

    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Publikasi</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <form method="post" action="{{asset('/simpan-publikasi')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Jurnal</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jurnal" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Judul Jurnal</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="judul_jurnal" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Author</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_author" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tahun Publikasi</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="tahun_publikasi" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">DOI</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="DOI" required>
        </div>
        <input type="hidden" name="dosen_id" value="{{ Session::get('id') }}">
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

</div>

@endsection