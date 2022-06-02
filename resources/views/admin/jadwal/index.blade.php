@extends('admin/template')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <a href="{{ url('/admin/jadwal/create') }}" class="btn btn-success">Tambah</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Pengacara</th>
              <th>Hari</th>
              <th>Jam</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php $i  = 1; ?>
              @foreach ($jadwal as $key)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $key->pengacara->nama }}</td>
                  <td>{{ $key->hari }}</td>
                  <th>Jam</th>
                  <td>
                    <form action="{{ url('/admin/jadwal/' . $key->id) }}" method="post">
                      <a class="btn btn-primary" href="{{ url('admin/jadwal/' . $key->id . '/edit') }}">
                        Edit
                      </a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
@endsection