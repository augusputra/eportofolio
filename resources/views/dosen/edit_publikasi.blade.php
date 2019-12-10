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

    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Publikasi</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <form method="post" action="{{asset('/ubah-publikasi/'.$publikasi_info->id)}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Jurnal</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$publikasi_info->nama_jurnal}}" name="nama_jurnal" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Judul Jurnal</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$publikasi_info->judul_jurnal}}" name="judul_jurnal" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Author</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$publikasi_info->nama_author}}" name="nama_author" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tahun Publikasi</label>
            <input type="number" class="form-control" id="exampleInputEmail1" value="{{$publikasi_info->tahun_publikasi}}" name="tahun_publikasi" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">DOI</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$publikasi_info->DOI}}" name="DOI" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

</div>

@endsection