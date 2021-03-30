<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\PeminjamanModel;
use App\AnggotaModel;
use App\PetugasModel;
use App\BukuModel;
use App\detailPinjam;



class PerpusController extends Controller
{
    
    public function index(){
        return view('dashboard');
    }

    //HALAMAN ANGGOTA
    public function anggota(){

        $anggota = AnggotaModel::all();
        return view('anggota',['anggota' => $anggota]);

    }
    public function createAnggota(){

        return view('tambahAnggota');

    }

    public function simpanAnggota(Request $request){
        $this->validate($request,[
            'nomor' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'nomor_telp' => 'required|numeric'
        ]);

        AnggotaModel::create([
            'nomor' => $request->nomor,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'nomor_telp' => $request->nomor_telp
          ]);
          return redirect('anggota');

    }

    public function editAnggota($nomor){
        $anggota = AnggotaModel::find($nomor);
       
        return view('editAnggota',['anggota' => $anggota]);
    }
    public function updateAnggota($nomor, Request $request){
        $this->validate($request,[
            'nomor' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'nomor_telp' => 'required|numeric'
        ]);

        $anggota = AnggotaModel::find($nomor);
        $anggota->nomor = $request->nomor;
        $anggota->nama = $request->nama;
        $anggota->alamat = $request->alamat;
        $anggota->tgl_lahir = $request->tgl_lahir;
        $anggota->tempat_lahir = $request->tempat_lahir;
        $anggota->nomor_telp = $request->nomor_telp;
        $anggota->save();

        return redirect('anggota');
    }

    public function updateAnggotaApi($nomor, Request $request){
        
        $anggota = AnggotaModel::find($nomor);
        $anggota->nomor = $request->nomor;
        $anggota->nama = $request->nama;
        $anggota->alamat = $request->alamat;
        $anggota->tgl_lahir = $request->tgl_lahir;
        $anggota->tempat_lahir = $request->tempat_lahir;
        $anggota->nomor_telp = $request->nomor_telp;

        if(($anggota->save())){
            $res['message']= "Success!";
            $res['values']=$anggota;
            return response($res);
        }
        //jika data tidak ditemukan
        else{
            $res['message']="Gagal!";
            return response($res);
        }
    }
    public function hapusAnggota($nomor){
        $anggota = AnggotaModel::find($nomor);
        $anggota->delete();
        return redirect('anggota');
        
    }

    //HALAMAN BUKU

    public function buku(){

        $buku =BukuModel::all();
        return view('buku',['buku' => $buku]);
        
    }

    public function createBuku(){
        return view('tambahBuku');
    }

    public function simpanBuku(Request $request){
        $this->validate($request,[
            'kode' => 'required|numeric',
            'judul' => 'required',
            'jumlah_hal' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required'
        ]);
        BukuModel::create([
            'kode' => $request->kode,
            'judul' => $request->judul,
            'jumlah_hal' => $request->jumlah_hal,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
        ]);
        return redirect('buku');
    }

    public function editBuku($kode){
        $buku = BukuModel::find($kode);
       
        return view('editBuku',['buku' => $buku]);
    }

    public function updateBuku($kode, Request $request){
        $this->validate($request,[
            'kode' => 'required|numeric',
            'judul' => 'required',
            'jumlah_hal' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required'
        ]);
        
        $buku = BukuModel::find($kode);
        $buku->kode = $request->kode;
        $buku->judul = $request->judul;
        $buku->jumlah_hal = $request->jumlah_hal;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->save();

        return redirect('buku');
    }

    public function hapusBuku($kode){
        $buku = BukuModel::find($kode);
        $buku->delete();
        return redirect('buku');
    }

    //HALAMAN PETUGAS
    public function petugas(){

        $petugas = PetugasModel::all();
        return view('petugas',['petugas' => $petugas]);
        
    }
    public function createPetugas(){

        return view('tambahPetugas');
        
    }
    public function simpanPetugas(Request $request){
        $this->validate($request,[
            'id' => 'required|numeric',
            'nomor_ktp' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'nomor_telp' => 'required|numeric'
        ]);

        PetugasModel::create([
            'id' => $request->id,
            'nomor_ktp' => $request->nomor_ktp,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nomor_telp' => $request->nomor_telp
          ]);
          return redirect('petugas');

    }

    public function editPetugas($id){
        $petugas = PetugasModel::find($id);
       
        return view('editPetugas',['petugas' => $petugas]);
    }

    public function updatePetugas($id, Request $request){
        $this->validate($request,[
            'id' => 'required|numeric',
            'nomor_ktp' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'nomor_telp' => 'required|numeric'
        ]);
        
        $petugas = PetugasModel::find($id);
        $petugas->id = $request->id;
        $petugas->nomor_ktp = $request->nomor_ktp;
        $petugas->nama = $request->nama;
        $petugas->alamat = $request->alamat;
        $petugas->nomor_telp = $request->nomor_telp;
        $petugas->save();

        return redirect('petugas');

    }
    public function hapusPetugas($id){
        $petugas = PetugasModel::find($id);
        $petugas->delete();
        return redirect('petugas');
        
    }


    //HALAMAN PEMINJAMAN
    public function peminjaman(){
        
        $peminjaman = PeminjamanModel::with('get_anggota')->get();
        return view('peminjaman',['peminjaman' => $peminjaman]);
        
    }

    public function createPeminjaman(){

        return view('tambahPinjam');
    }

    public function simpanPeminjaman(Request $request){
        $this->validate($request,[
            'kode' => 'required|numeric',
            'tgl_pinjam' => 'required|date',
            'tgl_harus_kembali' => 'required|date',
            'no_anggota' => 'required|numeric',
            'id_petugas' => 'required|numeric'
        ]);

        PeminjamanModel::create([
            'kode' => $request->kode,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_harus_kembali' => $request->tgl_harus_kembali,
            'tgl_kembali' => $request->tgl_kembali,
            'no_anggota' => $request->no_anggota,
            'id_petugas' => $request->id_petugas
          ]);
          return redirect('peminjaman');

    }
    public function editPeminjaman($kode){
        $peminjaman = PeminjamanModel::find($kode);

        return view('editPeminjaman',['peminjaman' => $peminjaman]);
    }
    public function updatePeminjaman($kode, Request $request){
        $this->validate($request,[
            'kode' => 'required|numeric',
            'tgl_pinjam' => 'required|date',
            'tgl_harus_kembali' => 'required|date',
            'tgl_kembali' => 'required|date',
            'no_anggota' => 'required|numeric',
            'id_petugas' => 'required|numeric'
        ]);
        
        $peminjaman = PeminjamanModel::find($kode);
        $peminjaman->kode = $request->kode;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_harus_kembali = $request->tgl_harus_kembali;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->no_anggota = $request->no_anggota;
        $peminjaman->id_petugas = $request->id_petugas;
        $peminjaman->save();

        return redirect('peminjaman');

    }

    public function detail($kode){
        
        $data = PeminjamanModel::with('get_anggota', 'get_detail', 'get_detail.get_buku')->find($kode);
        return view('detailPinjam2',['data'=> $data]);
    }
    public function tambahDetail($kode){
        
        $data = PeminjamanModel::with('get_anggota', 'get_detail', 'get_detail.get_buku')->find($kode);
        return view('tambahDetail');
    }
    public function simpanDetail(Request $request){
        $this->validate($request,[
            'kode_pinjam' => 'required|numeric',
            'kode_buku' => 'required|numeric'
            
        ]);
        detailPinjam::create([
            'kode_pinjam' => $request->kode_pinjam,
            'kode_buku' => $request->kode_buku
          ]);

        
        return view('tambahDetail');
        
    }

    public function hapusPeminjaman($kode){
        
        $data = PeminjamanModel::with('get_anggota', 'get_detail', 'get_detail.get_buku')->find($kode);
        $datas =detailPinjam::where('kode_pinjam','=', $data->kode)->delete();
        $data->delete();
        return redirect('peminjaman');
    }

    
}
