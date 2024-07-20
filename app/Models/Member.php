<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';

    protected $guarded = [];
    //protected $fillable = ['name','father','bial','dob'];
    public function bial(){
        return $this->belongsTo(Bial::class);
    }
    public function att(){
        return $this->hasMany(Att::class);
    }
}
