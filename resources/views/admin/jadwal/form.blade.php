@extends('admin/template')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{ $mode === 'edit' ? 'Edit' : 'Tambah'}} Pengacara</h3>
        </div>
        <!-- /.card-header -->
        <form action="/admin/pengacara/{{ $mode === 'edit' ? $id : '' }}" method="post">
          @csrf
          {{ $mode === 'edit' ? method_field('PUT') : '' }}
          <div class="card-body">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Pengacara</label>
                <input type="text" class="form-control" placeholder="Nama Pengacara" name="nama" value="{{ $mode === 'edit' ? $nama : '' }}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">No. Telepon</label>
                <input type="text" class="form-control" placeholder="No. Telepon" name="no_telp" value="{{ $mode === 'edit' ? $no_telp : '' }}">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success">{{ $mode === 'edit' ? 'Edit' : 'Tambah' }}</button>
          </div>
        </form>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
@endsection