<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'deskripsi_contact',
        'alamat_contact',
        'email_contact',
        'call_contact',
    ];
}
