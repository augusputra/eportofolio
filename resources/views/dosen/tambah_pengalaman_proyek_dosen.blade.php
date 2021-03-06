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

    @if ($errors->has('nama_proyek'))
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>Pengalaman Proyek gagal ditambah</strong>
      </div>
    @endif

    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pengalaman Proyek</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <form method="post" action="{{asset('/simpan-pengalaman-proyek_dosen')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Proyek</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="tanggal_proyek" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Proyek</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_proyek" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi Proyek</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi" required></textarea>
        </div>
        <input type="hidden" name="dosen_id" value="{{ Session::get('id') }}">
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

</div>

@endsection