@extends('base')

@section('title', 'Data Anggota')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Anggota Perpustakaan</h1>
    <p class="mb-4"> </a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a class="nav-link" href="/anggota/tambah">
          <i class="fas fa-plus"></i>
          <span class="m-0 font-weight-bold text-primary"> Tambah Anggota</span></a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>No Telpon</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>No Telpon</th>
                <th>Action</th>
              </tr>
            </tfoot>
                
            <tbody>
                @foreach($anggota as $agt)
                <tr>
                    <td>{{ $agt->nomor }}</td>
                    <td>{{ $agt->nama }}</td>
                    <td>{{ $agt->alamat }}</td>
                    <td>{{ $agt->tgl_lahir }}</td>
                    <td>{{ $agt->tempat_lahir }}</td>
                    <td>{{ $agt->nomor_telp }}</td>
                    <td>
                      <a class="badge badge-warning" href="/anggota/edit/{{$agt->nomor}}"><i class="fas fa-pencil-alt"></i></a>
                      <a class="badge badge-danger" href="/anggota/hapus/{{$agt->nomor}}"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
           </table>
        </div>
       </div>
    </div>
@endsection
