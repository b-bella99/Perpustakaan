@extends('base2')

@section('title', 'Tambah Anggota')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Anggota Perpustakaan</h1>
    <p class="mb-0"> </a>.</p>

    <!-- Basic Card Example -->
    <div class="col-12 col-md-8">
        <div class="card shadow mb-0">
            <div class="card-header py-3">
                <a class="nav-link" href="/anggota">
                    <i class="fas fa-arrow-circle-left"></i>
                    <span class="m-0 font-weight-bold text-primary"> Kembali </span>
                </a>
            </div>
            <div class="card">
                    <form action="/anggota/simpan" method="POST" class="needs-validation" novalidate="">
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
                        <h4>Form Tambah Anggota</h4>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label>Nomor</label>
                            <input type="number" name="nomor" id="nomor" class="form-control" value="{{ old('nomor')}}">
                            <div class="invalid-feedback">
                            Isikan Nomor.
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama')}}">
                            <div class="invalid-feedback">
                            Isikan Nama.
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ old('alamat')}}">
                            <div class="invalid-feedback">
                            Alamat Harus Diisi.
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ old('tgl_lahir')}}">
                                <div class="invalid-feedback">
                                Tanggal Lahir Harus Diisi.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ old('tempat_lahir')}}">
                                <div class="invalid-feedback">
                                Tempat Lahir Harus Diisi.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" name="nomor_telp" id="nomor_telp" class="form-control" value="{{ old('nomor_telp')}}">
                            <div class="invalid-feedback">
                            Nomor Telepon Harus Diisi Harus Diisi.
                            </div>
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
