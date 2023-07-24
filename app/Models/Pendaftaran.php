<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelas_id',
        'nama',
        'tanggal_lahir',
        'no_telepon',
        'email',
        'alamat',
        'terdaftar',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
