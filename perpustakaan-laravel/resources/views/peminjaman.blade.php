@extends('base')

@section('title', 'Data Peminjaman')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Peminjaman Perpustakaan</h1>
    <p class="mb-4"> </a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a class="nav-link" href="/peminjaman/create">
          <i class="fas fa-plus"></i>
          <span class="m-0 font-weight-bold text-primary"> Tambah Peminjaman</span></a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Kode</th>
                <th>Tanggal Pinjam</th>
                <th>Batas Tanggal Kembali</th>
                <th>Tanggal Kembali</th>
                <th>Nama anggota</th>
                <th>id petugas</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Kode</th>
                <th>Tanggal Pinjam</th>
                <th>Batas Tanggal Kembali</th>
                <th>Tanggal Kembali</th>
                <th>Nama anggota</th>
                <th>id petugas</th>
                <th>Action</th>
              </tr>
            </tfoot>
                
            <tbody>
                @foreach($peminjaman as $pinjam)
                <tr>
                    <td>{{ $pinjam->kode }}</td>
                    <td>{{ $pinjam->tgl_pinjam }}</td>
                    <td>{{ $pinjam->tgl_harus_kembali }}</td>
                    <td>{{ $pinjam->tgl_kembali }}</td>
                    <td>{{ $pinjam->get_anggota->nama }}</td>
                    <td>{{ $pinjam->id_petugas }}</td>
                    <td>
                      <a class="badge badge-primary" href="/detail/{{$pinjam->kode}}"><i class="fas fa-info"></i></a>
                      <a class="badge badge-warning" href="/peminjaman/edit/{{$pinjam->kode}}"><i class="fas fa-pencil-alt"></i></a>
                      <a class="badge badge-danger" href="/peminjaman/hapus/{{$pinjam->kode}}"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
           </table>
        </div>
       </div>
    </div>
@endsection
