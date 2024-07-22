<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $table = 'role_user';

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
