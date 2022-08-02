<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileGambar extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'profile_gambar',
        'status',
    ];
}
