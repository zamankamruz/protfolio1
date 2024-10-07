<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statas extends Model
{
    use HasFactory;

    protected $fillable = [
        'happy_clients',
        'projects',
        'hours_of_support',
        'hard_workers',
       
    ];
}
