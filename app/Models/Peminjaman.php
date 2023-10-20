<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjamaan_perpus';

    protected $primaryKey = 'no_peminjaman';

    public $timestamps = false;

    protected $fillable = [
        'no_peminjaman',
        'no_anggota',
        'no_induk',
        'tgl_peminjaman',
        'tgl_pengembalian',
    ];

    public function anggotaPerpus()
    {
        return $this->belongsTo(AnggotaPerpus::class, 'no_anggota');
    }

    public function bukuIndukPerpus()
    {
        return $this->belongsTo(BukuIndukPerpus::class, 'no_induk');
    }
}
