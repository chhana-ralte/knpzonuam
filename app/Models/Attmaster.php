<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attmaster extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function att(){
        return $this->hasMany(Att::class);
    }

}
