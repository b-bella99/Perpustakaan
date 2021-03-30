<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';

    protected $primaryKey = 'nomor';

    protected $fillable = [
        'nomor',
        'nama',
        'alamat',
        'tgl_lahir',
        'tempat_lahir',
        'nomor_telp',
    	'created_at',
    	'updated_at'
    ];

    
}
