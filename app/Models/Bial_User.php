<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bial_User extends Model
{
    use HasFactory;

    public $table = 'bial_user';
    protected $guarded =[];
    public function bial(){
        return $this->belongsTo(Bial::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
