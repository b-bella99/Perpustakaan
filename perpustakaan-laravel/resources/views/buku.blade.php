@extends('base')

@section('title', 'Data Buku')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Buku Perpustakaan</h1>
    <p class="mb-4"> </a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a class="nav-link" href="/buku/tambah">
          <i class="fas fa-plus"></i>
          <span class="m-0 font-weight-bold text-primary"> Tambah Buku</span></a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Kode</th>
                <th>Judul</th>
                <th>Jumlah Halaman</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Kode</th>
                <th>Judul</th>
                <th>Jumlah Halaman</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Action</th>
              </tr>
            </tfoot>
                
            <tbody>
                @foreach($buku as $bk)
                <tr>
                    <td>{{ $bk->kode }}</td>
                    <td>{{ $bk->judul }}</td>
                    <td>{{ $bk->jumlah_hal }}</td>
                    <td>{{ $bk->pengarang }}</td>
                    <td>{{ $bk->penerbit }}</td>
                    <td>{{ $bk->tahun_terbit }}</td>
                    <td>
                      <a class="badge badge-warning" href="/buku/edit/{{$bk->kode}}"><i class="fas fa-pencil-alt"></i></a>
                      <a class="badge badge-danger" href="/buku/hapus/{{$bk->kode}}"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
           </table>
        </div>
       </div>
    </div>
@endsection
