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
                  <option value="senin" {{ $mode === 'edit' ? $hari === 'senin' ? 'selected' : '' : '' }}>Senin</option>
                  <option value="selasa" {{ $mode === 'edit' ? $hari === 'selasa' ? 'selected' : '' : '' }}>Selasa</option>
                  <option value="rabu" {{ $mode === 'edit' ? $hari === 'rabu' ? 'selected' : '' : '' }}>Rabu</option>
                  <option value="kamis" {{ $mode === 'edit' ? $hari === 'kamis' ? 'selected' : '' : '' }}>Kamis</option>
                  <option value="jumat" {{ $mode === 'edit' ? $hari === 'jumat' ? 'selected' : '' : '' }}>Jumat</option>
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