<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class navber extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'profile_image',
        'twitter',
        'facebook',
        'instagram',
        'google_plus',
        'linkedin',
    ];
}
