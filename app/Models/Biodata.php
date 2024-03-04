<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto',
        'nama_lengkap',
        'bio',
        'motto',
        'ig',
        'fb',
        'twitter',
        'link_in',
        'github',
        'user_id',
        'about',
    ];
}
