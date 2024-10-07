<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;

    // Define the table name (optional, Laravel uses pluralized version by default)
    protected $table = 'abouts';

    // Fillable properties for mass assignment
    protected $fillable = [
        'title',
        'description',
        'profile_image',
        'name',
        'about',
        'birthday',
        'website',
        'phone',
        'city',
        'age',
        'degree',
        'email',
        'freelance',
        'summary',
    ];

   
}

