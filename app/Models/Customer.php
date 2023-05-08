<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'tb_customer';

    protected $fillable = [
        'nama',
        'ttl',
        'jenis_barang',
        'jenis_kelamin',
        'alamat',
        'foto_ktp',
        'user',
        'password',
        'retype_password'
    ];
}
