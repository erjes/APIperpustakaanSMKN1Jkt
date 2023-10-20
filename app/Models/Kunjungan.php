<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;
    protected $table = 'kunjungan_perpus';

    public $timestamps = false;

    protected $fillable = [
        'no_anggota',
        'nama_siswa',
        'kelas',
        'jurusan',
    ];

    public function anggotaPerpus()
    {
        return $this->belongsTo(AnggotaPerpus::class, 'no_anggota');
    }
}
