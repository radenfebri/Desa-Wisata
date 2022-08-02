<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar_slide',
        'judul_slide',
        'deskripsi_slide',
        'link_slide',
        'status_slide',
    ];
}
