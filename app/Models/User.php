<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function bials(){
        return $this->belongsToMany(Bial::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function hasRole(String $role):bool
    {
        return Role_User::where('user_id',$this->id)->where('role_id',Role::where('role',$role)->first()->id)->exists();
        //return User::where('role', $role->role)->get();
    }

    public function managesBial(Bial $bial):bool
    {
        return Bial_User::where('user_id',$this->id)->where('bial_id',$bial->id)->exists();
        //return User::where('role', $role->role)->get();
    }
}
