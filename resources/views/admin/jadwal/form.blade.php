@extends('admin/template')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{ $mode === 'edit' ? 'Edit' : 'Tambah'}} Pengacara</h3>
        </div>
        <!-- /.card-header -->
        <form action="/admin/jadwal/{{ $mode === 'edit' ? $id : '' }}" method="post">
          @csrf
          {{ $mode === 'edit' ? method_field('PUT') : '' }}
          <div class="card-body">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Pengacara</label>
                <select name="pengacara_id" class="form-control select2">
                  <option></option>
                  @foreach ($pengacara as $key)
                    <option value="{{ $key->id }}" {{ $mode === 'edit' ? $key->id === $pengacara_id ? 'selected' : '' : '' }}>{{ $key->nama }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Hari</label>
                <select name="hari" class="form-control select2">
                  <option></option>
                  <option value="Monday" {{ $mode === 'edit' ? $hari === 'Monday' ? 'selected' : '' : '' }}>Senin</option>
                  <option value="Tuesday" {{ $mode === 'edit' ? $hari === 'Tuesday' ? 'selected' : '' : '' }}>Selasa</option>
                  <option value="Wednesday" {{ $mode === 'edit' ? $hari === 'Wednesday' ? 'selected' : '' : '' }}>Rabu</option>
                  <option value="Thursday" {{ $mode === 'edit' ? $hari === 'Thursday' ? 'selected' : '' : '' }}>Kamis</option>
                  <option value="Friday" {{ $mode === 'edit' ? $hari === 'Friday' ? 'selected' : '' : '' }}>Jumat</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Waktu</label>
                <input type="text" id="timepicker" class="form-control" name="jam" value="{{ $mode === 'edit' ? $jam : '' }}">
                <!-- /.input group -->
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