<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perusahaan',
        'deskripsi',
        'gambar',
        'alamat',
        'link_alamat',
        'no_hp',
        'email',
        'instagram',
        'facebook',
        'tiktok',
        'linkedin',
        'no_whatsapp',
    ];
}
