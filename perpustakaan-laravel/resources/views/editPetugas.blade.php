@extends('base3')

@section('title', 'Edit Petugas')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Petugas Perpustakaan</h1>
    <p class="mb-0"> </a>.</p>

    <!-- Basic Card Example -->
    <div class="col-12 col-md-8">
        <div class="card shadow mb-0">
            <div class="card-header py-3">
                <a class="nav-link" href="/petugas">
                    <i class="fas fa-arrow-circle-left"></i>
                    <span class="m-0 font-weight-bold text-primary"> Kembali </span>
                </a>
            </div>
            <div class="card">
                    <form action="/petugas/update/{{$petugas->id}}" method="POST" class="needs-validation" novalidate="">
                        @csrf
                        <div class="card-header">
                        <h4>Form Edit Petugas</h4>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="number" name="id" id="id" class="form-control" value="{{$petugas->id}}">
                            <div class="invalid-feedback">
                            Isikan Nomor.
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor KTP</label>
                            <input type="number" name="nomor_ktp" id="nomor_ktp" class="form-control" value="{{$petugas->nomor_ktp}}">
                            <div class="invalid-feedback">
                            Isikan Nomor.
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{$petugas->nama}}">
                            <div class="invalid-feedback">
                            Isikan Nama.
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" value="{{$petugas->alamat}}">
                            <div class="invalid-feedback">
                            Alamat Harus Diisi.
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" name="nomor_telp" id="nomor_telp" class="form-control" value="{{$petugas->nomor_telp}}">
                            <div class="invalid-feedback">
                            Nomor Telepon Harus Diisi Harus Diisi.
                            </div>
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
