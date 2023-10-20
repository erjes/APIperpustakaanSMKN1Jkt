<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusBuku extends Model
{
    use HasFactory;
    protected $table = 'statusbuku_perpus';

    protected $primaryKey = 'no_induk';

    public $timestamps = false;

    protected $fillable = [
        'no_induk',
        'judul',
        'kondisi_buku',
        'tgl_konfirmasi',
    ];

    public function bukuIndukPerpus()
    {
        return $this->belongsTo(BukuIndukPerpus::class, 'no_induk');
    }
}
