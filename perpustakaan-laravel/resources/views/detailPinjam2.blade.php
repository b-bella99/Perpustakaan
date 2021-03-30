@extends('base3')

@section('title', 'Detail Peminjaman')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Peminjaman</h1>
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
            
        
                <div class="card-body">
                    <p> <b> Nama : </b> {{$data->get_anggota->nama}}</p>
                    <p> <b> No Anggota: </b> {{$data->no_anggota}}</p>
                    <p> <b> Tanggal Peminjaman : </b> {{$data->tgl_pinjam}}</p>
                    <p> <b> Tanggal Harus Kembali : </b> {{$data->tgl_harus_kembali}}</p>
                    <p> <b> Tanggal Kembali : </b> {{$data->tgl_kembali}}</p>
                    <a class="nav-link" href="/detail/tambah/{{$data->kode}}">
                        <i class="fas fa-plus"></i>
                        <span class="m-0 font-weight-bold text-primary"> Tambah Buku</span></a>
                    <div class="table-responsive">
                        <table class = "table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> No </th>
                                    <th width="90px"> Kode Buku </th>
                                    <th> Judul Buku </th>
                                </tr>
                            </thead>
                            <?php $no=0; ?>
                            @foreach($data->get_detail as $d)
                                
                            <tbody>
                            <?php $no++?>
                                <tr>
                                    <td width="80px">{{$no}}</td>
                                    <td>{{$d->kode_buku}}</td>
                                    <td>{{$d->get_buku->judul}}</td>
                                </tr>
                                
                            </tbody>
                                
                            @endforeach
                        </table>
                    </div>
                </div>  
            
        </div>
    </div>
@endsection
