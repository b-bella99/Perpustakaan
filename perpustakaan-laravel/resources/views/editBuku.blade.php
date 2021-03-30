@extends('base3')

@section('title', 'Edit buku')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit buku Perpustakaan</h1>
    <p class="mb-0"> </a>.</p>

    <!-- Basic Card Example -->
    <div class="col-12 col-md-8">
        <div class="card shadow mb-0">
            <div class="card-header py-3">
                <a class="nav-link" href="/buku">
                    <i class="fas fa-arrow-circle-left"></i>
                    <span class="m-0 font-weight-bold text-primary"> Kembali </span>
                </a>
            </div>
            <div class="card">
                    <form action="/buku/update/{{$buku->kode}}" method="POST" class="needs-validation" novalidate="">
                        @csrf
                        <div class="card-header">
                        <h4>Form Edit buku</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="number" name="kode" id="kode" class="form-control" value="{{$buku->kode}}"">
                                <div class="invalid-feedback">
                                Isikan .
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control" value="{{$buku->judul}}">
                                <div class="invalid-feedback">
                                Isikan .
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Halaman</label>
                                <input type="number" name="jumlah_hal" id="jumlah_hal" class="form-control" value="{{$buku->jumlah_hal}}">
                                <div class="invalid-feedback">
                                Isikan Nama.
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pengarang</label>
                                <input type="text" name="pengarang" id="pengarang" class="form-control" value="{{$buku->pengarang}}">
                                <div class="invalid-feedback">
                                
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Penerbit</label>
                                <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{$buku->penerbit}}">
                                <div class="invalid-feedback">
                               
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tahun Terbit</label>
                                <input type="number" name="tahun_terbit" id="tahun_terbit"  class="form-control" value="{{$buku->tahun_terbit}}">
                                <div class="invalid-feedback">
                               
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
