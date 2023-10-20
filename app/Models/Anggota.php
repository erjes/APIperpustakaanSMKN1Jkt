<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota_perpus';

    protected $primaryKey = 'no_anggota';

    public $timestamps = false;

    protected $fillable = [
        'no_anggota',
        'nama',
        'kelas',
    ];
}
