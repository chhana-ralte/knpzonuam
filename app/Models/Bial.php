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

    public function hmingziak(Attmaster $attmaster){
        $members = $this->members->pluck('id');
        return Att::where('attmaster_id',$attmaster->id)->whereIn('member_id',$members)->count();
    }

    public function kai(Attmaster $attmaster){
        $members = $this->members->pluck('id');
        return Att::where('attmaster_id',$attmaster->id)->whereIn('member_id',$members)->where('marking','P')->count();
    }

    public function kailo(Attmaster $attmaster){
        $members = $this->members->pluck('id');
        return Att::where('attmaster_id',$attmaster->id)->whereIn('member_id',$members)->where('marking','X')->count();
    }

    public function damlo(Attmaster $attmaster){
        $members = $this->members->pluck('id');
        return Att::where('attmaster_id',$attmaster->id)->whereIn('member_id',$members)->where('marking','D')->count();
    }

    public function zin(Attmaster $attmaster){
        $members = $this->members->pluck('id');
        return Att::where('attmaster_id',$attmaster->id)->whereIn('member_id',$members)->where('marking','Z')->count();
    }

    public function hostel(Attmaster $attmaster){
        $members = $this->members->pluck('id');
        return Att::where('attmaster_id',$attmaster->id)->whereIn('member_id',$members)->where('marking','H')->count();
    }
}
