@extends('base3')

@section('title', 'Edit Peminjaman')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Anggota Perpustakaan</h1>
    <p class="mb-0"> </a>.</p>

    <!-- Basic Card Example -->
    <div class="col-12 col-md-8">
        <div class="card shadow mb-0">
            <div class="card-header py-3">
                <a class="nav-link" href="/peminjaman">
                    <i class="fas fa-arrow-circle-left"></i>
                    <span class="m-0 font-weight-bold text-primary"> Kembali </span>
                </a>
            </div>
            <div class="card">
                    <form action="/peminjaman/update/{{$peminjaman->kode}}" method="POST" class="needs-validation" novalidate="">
                        @csrf
                        <div class="card-header">
                        <h4>Form Edit peminjaman</h4>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label>Kode</label>
                            <input type="number" name="kode" id="kode" class="form-control" value="{{$peminjaman->kode}}">
                            <div class="invalid-feedback">
                            Isikan Nomor.
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Tanggal Peminjaman</label>
                                <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" value="{{$peminjaman->tgl_pinjam}}">
                                
                            </div>
                            <div class="col-sm-6">
                                <label>Batas Pengembalian</label>
                                <input type="date" name="tgl_harus_kembali" id="tgl_harus_kembali" class="form-control" value="{{$peminjaman->tgl_harus_kembali}}">
                                
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Tanggal Kembali</label>
                                <input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control" value="{{$peminjaman->tgl_kembali}}">
                                
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Nomor anggota</label>
                            <input type="text" name="no_anggota" id="no_anggota" class="form-control" value="{{$peminjaman->no_anggota}}">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>ID Petugas</label>
                            <input type="text" name="id_petugas" id="id_petugas" class="form-control" value="{{$peminjaman->id_petugas}}">
                        </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
