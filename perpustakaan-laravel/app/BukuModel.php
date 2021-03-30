<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    protected $table = 'buku';

    protected $primaryKey = 'kode';

    protected $fillable = [
        'kode',
        'judul',
        'jumlah_hal',
        'pengarang',
        'penerbit',
        'tahun_terbit',
    	'created_at',
    	'updated_at'
    ];

    public function get_detail(){
        return $this->hasMany('App\\detailPinjam', 'kode_buku', 'kode');
    }
}
