<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetugasModel extends Model
{
    protected $table = 'petugas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nomor_ktp',
        'nama',
        'alamat',
        'nomor_telp',
    	'created_at',
    	'updated_at'
    ];

}
