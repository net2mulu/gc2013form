<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lastword extends Model
{
     protected $fillable = [
        'user_id',
        'lastword',
        
    ];

    use HasFactory;
    
}
