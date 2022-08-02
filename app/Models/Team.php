<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_team',
        'foto_team',
        'jabatan_team',
        'facebook_team',
        'instagram_team',
    ];
}
