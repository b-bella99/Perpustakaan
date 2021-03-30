@extends('base')

@section('title', 'Data Petugas')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Petugas Perpustakaan</h1>
    <p class="mb-4"> </a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a class="nav-link" href="/petugas/tambah">
          <i class="fas fa-plus"></i>
          <span class="m-0 font-weight-bold text-primary"> Tambah Petugas</span></a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nomor KTP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Nomor KTP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Action</th>
              </tr>
            </tfoot>
                
            <tbody>
                @foreach($petugas as $ptgs)
                <tr>
                    <td>{{ $ptgs->id }}</td>
                    <td>{{ $ptgs->nomor_ktp}}</td>
                    <td>{{ $ptgs->nama }}</td>
                    <td>{{ $ptgs->alamat }}</td>
                    <td>{{ $ptgs->nomor_telp }}</td>
                    <td>
                      <a class="badge badge-warning" href="/petugas/edit/{{$ptgs->id}}"><i class="fas fa-pencil-alt"></i></a>
                      <a class="badge badge-danger" href="/petugas/hapus/{{$ptgs->id}}"><i class="fas fa-trash"></i></a></td>
                    </td>
                </tr>
                @endforeach
            </tbody>
           </table>
        </div>
       </div>
    </div>
@endsection
