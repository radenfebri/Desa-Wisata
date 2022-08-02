<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskripsiTeam extends Model
{
    use HasFactory;

    protected $fillable = [
        'deskripsi',
    ];
}
