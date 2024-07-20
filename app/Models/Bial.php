<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bial extends Model
{
    use HasFactory;
    public function members(){
        return $this->hasMany(Member::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
