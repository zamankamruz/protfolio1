<?php

// Resume.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'resumeintro', 'summary', 'introduction', 'address', 'phone', 'email'
    ];
}
