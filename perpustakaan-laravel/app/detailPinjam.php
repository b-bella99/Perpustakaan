<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailPinjam extends Model
{
    protected $table = 'detail_peminjaman';

    protected $primaryKey = 'kode_pinjam';

    protected $fillable = [
    	'kode_pinjam',
    	'kode_buku',
    	'created_at',
    	'updated_at'
    ];

    //relasi many to one (Saya adalah anggota dari model ......)
    public function get_pinjam(){
        return $this->belongsTo('App\\PeminjamanModel', 'kode_pinjam', 'kode');
    }

    //relasi many to one (Saya adalah anggota dari model ......)
    public function get_buku(){
        return $this->belongsTo('App\\BukuModel', 'kode_buku', 'kode');
    }
    public function get_anggota(){
        return $this->belongsTo('App\\AnggotaModel');
    }

}
