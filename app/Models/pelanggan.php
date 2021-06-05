<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $primarykey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'nama',
        'alamat'
    ];
}
