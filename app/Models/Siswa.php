<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama_Lengkap',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'Alamat',
        'Asal_Sekolah',
        'Email',
        'Foto',
        'Scan_KK'
    ];
}
