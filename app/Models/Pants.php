<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pants extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    
       
    }
    }
