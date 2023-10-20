<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuInduk extends Model
{
    use HasFactory;
    protected $table = 'bukuinduk_perpus';

    protected $primaryKey = 'no_induk';

    public $timestamps = false;

    protected $fillable = [
        'no_induk',
        'judul',
        'klasifikasi',
        'nama_pengarang',
        'tempat_terbit',
        'tahun_terbit',
        'jumlah_buku',
    ];
}
