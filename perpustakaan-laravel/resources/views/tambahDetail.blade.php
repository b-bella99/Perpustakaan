@extends('base3')

@section('title', 'Tambah Peminjaman')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Anggota Perpustakaan</h1>
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
                    <form action="/detail/simpan" method="POST" class="needs-validation" novalidate="">
                        {{ csrf_field() }}
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="card-header">
                        <h4>Form Tambah Peminjaman</h4>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label>Kode Pinjam</label>
                            <input type="number" name="kode_pinjam" id="kode_pinjam" class="form-control" >
                            
                        </div>
                        <div class="form-group">
                            <label>Kode Buku</label>
                            <input type="number" name="kode_buku" id="kode_buku" class="form-control">
                            
                        </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
