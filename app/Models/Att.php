<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Att extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function attmaster(){
        return $this->belongsTo(Attmaster::class);
    }
    public function member(){
        return $this->belongsTo(Member::class);
    }
}
