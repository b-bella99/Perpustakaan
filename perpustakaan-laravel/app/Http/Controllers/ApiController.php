<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PeminjamanModel;
use App\AnggotaModel;
use App\PetugasModel;
use App\BukuModel;
use App\detailPinjam;

class ApiController extends Controller
{
    //anggota
    public function anggota(){

        $anggota = AnggotaModel::all();
        if(count($anggota) > 0){
            $res['message']= "Success!";
            $res['values']=$anggota;
            return response($res);
        }
        //jika data tidak ditemukan
        else{
            $res['message']="Kosong!";
            return response($res);
        }

    }

    public function createAnggota(Request $request){
        $anggota = new AnggotaModel();
        $anggota->nomor = $request->nomor;
        $anggota->nama = $request->nama;
        $anggota->alamat = $request->alamat;
        $anggota->tgl_lahir = $request->tgl_lahir;
        $anggota->tempat_lahir = $request->tempat_lahir;
        $anggota->nomor_telp = $request->nomor_telp;


        if($anggota->save()){
            $res['message']='Data Berhasil Ditambah!';
            $res['value']="$anggota";
            return response($res);
        }else{
            $res['message']="Gagal!";
            return response($res);
        }
    }

    public function editAnggota($nomor){
        $anggota = AnggotaModel::where('nomor',$nomor)->get();
       
        if(count($anggota) > 0){
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

    public function updateAnggota(Request $request, $nomor){
        //$nomor = $request->nomor;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $tgl_lahir = $request->tgl_lahir;
        $tempat_lahir = $request->tempat_lahir;
        $nomor_telp = $request->nomor_telp;


        $anggota = AnggotaModel::find($nomor);
        //$anggota->nomor = $nomor;
        $anggota->nama = $nama;
        $anggota->alamat = $alamat;
        $anggota->tgl_lahir = $tgl_lahir;
        $anggota->tempat_lahir = $tempat_lahir;
        $anggota->nomor_telp = $nomor_telp;

        if(($anggota->save())){
            $res['message']= "Success!";
            $res['values']="$anggota";
            return response($res);
        }
        //jika data tidak ditemukan
        else{
            $res['message']="Gagal!";
            return response($res);
        }
    }
    public function hapusAnggota($nomor){
        $anggota = AnggotaModel::where('nomor',$nomor);
        //$anggota->delete();
        if($anggota->delete()){
            $res['message'] = "Data berhasil dihapus!";
            return response($res);
        }else{
            $res['message'] = "Gagal!";
            return response($res);
        }
        
    }

    //buku
    public function buku(){

        $buku =BukuModel::all();
       
        if(count($buku) > 0){
            $res['message']= "Success!";
            $res['values']=$buku;
            return response($res);
        }
        //jika data tidak ditemukan
        else{
            $res['message']="Kosong!";
            return response($res);
        }
        
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
        $buku = BukuModel::where('kode',$kode)->get();
       
        if(count($buku) > 0){
            $res['message']= "Success!";
            $res['values']=$buku;
            return response($res);
        }
        //jika data tidak ditemukan
        else{
            $res['message']="Gagal!";
            return response($res);
        }
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
        
        if(($buku->save())){
            $res['message']= "Success!";
            $res['values']=$buku;
            return response($res);
        }
        //jika data tidak ditemukan
        else{
            $res['message']="Gagal!";
            return response($res);
        }

        
    }
    public function hapusBuku($kode){
        $buku = BukuModel::find($kode);
        if($buku->delete()){
            $res['message'] = "Data berhasil dihapus!";
            return response($res);
        }else{
            $res['message'] = "Gagal!";
            return response($res);
        }
    }

    //petugas

    public function petugas(){

        $petugas = PetugasModel::all();
        if(count($petugas) > 0){
            $res['message']= "Success!";
            $res['values']=$petugas;
            return response($res);
        }
        //jika data tidak ditemukan
        else{
            $res['message']="Kosong!";
            return response($res);
        }
        
    }

    public function editPetugas($id){
        $petugas = PetugasModel::where('id',$id)->get();
       
        if(count($petugas) > 0){
            $res['message']= "Success!";
            $res['values']=$petugas;
            return response($res);
        }
        //jika data tidak ditemukan
        else{
            $res['message']="Gagal!";
            return response($res);
        }
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
        

        if(($petugas->save())){
            $res['message']= "Success!";
            $res['values']=$petugas;
            return response($res);
        }
        //jika data tidak ditemukan
        else{
            $res['message']="Gagal!";
            return response($res);
        }

    }
    public function hapusPetugas($id){
        $petugas = PetugasModel::find($id);
        if($petugas->delete()){
            $res['message'] = "Data berhasil dihapus!";
            return response($res);
        }else{
            $res['message'] = "Gagal!";
            return response($res);
        }
        
    }


    //peminjaman
    public function peminjaman(){
        
        $peminjaman = PeminjamanModel::all();
        
        if(count($peminjaman) > 0){
            $res['message']= "Success!";
            $res['values']=$peminjaman;
            return response($res);
        }
        //jika data tidak ditemukan
        else{
            $res['message']="Kosong!";
            return response($res);
        }
        
    }

    public function editPeminjaman($kode){
        $peminjaman = PeminjamanModel::where('kode',$kode)->get();

        if(count($peminjaman) > 0){
            $res['message']= "Success!";
            $res['values']=$peminjaman;
            return response($res);
        }
        //jika data tidak ditemukan
        else{
            $res['message']="Gagal!";
            return response($res);
        }
    }
    
    //fungsi createPeminjaman
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

        if(($peminjaman->save())){
            $res['message']= "Success!";
            $res['values']=$peminjaman;
            return response($res);
        }
        //jika data tidak ditemukan
        else{
            $res['message']="Gagal!";
            return response($res);
        }

    }

    public function hapusPeminjaman($kode){
        $peminjaman = PeminjamanModel::find($kode);
        if($peminjaman->delete()){
            $res['message'] = "Data berhasil dihapus!";
            return response($res);
        }else{
            $res['message'] = "Gagal!";
            return response($res);
        }
        
    }




}
