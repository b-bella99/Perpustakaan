<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeminjamanModel extends Model
{
    protected $table = 'peminjaman';

    protected $primaryKey = 'kode';

    protected $fillable = [
        'kode',
    	'tgl_pinjam',
    	'tgl_harus_kembali',
    	'tgl_kembali',
        'no_anggota',
        'id_petugas',
    	'created_at',
    	'updated_at'
    ];

    

    //relasi many to one (Saya adalah anggota dari model ......)
    public function get_anggota(){
        return $this->belongsTo('App\\AnggotaModel', 'no_anggota', 'nomor');
    }

    public function get_detail(){
        return $this->hasMany('App\\detailPinjam', 'kode_pinjam', 'kode');
    }

    public function get_petugas(){
        return $this->belongsTo('App\\PetugasModel', 'id_petugas', 'id');
    }

    
}
