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

    @if ($errors->has('tanggal') || $errors->has('file_sertifikat'))
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>Pelatihan Seminar dan Workshop gagal ditambah</strong>
      </div>
    @endif

    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pelatihan Seminar dan Workshop</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <form method="post" action="{{asset('/simpan-pelatihan-seminar_dosen')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Kegiatan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kegiatan" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Kegiatan</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="tanggal" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tempat Pelaksanaan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="tempat" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
              <option value="Panitia">Panitia</option>
              <option value="Peserta">Peserta</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">File Sertifikat</label><br>
            <input type="file" name="file_sertifikat" id="email" />
        </div>
        <input type="hidden" name="dosen_id" value="{{ Session::get('id') }}">
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

</div>

@endsection