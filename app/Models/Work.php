<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    public function items(){
        return $this->hasMany(Item::class);
    }
    public function mosts(){
        return $this->hasMany(Most::class);
    }
}
