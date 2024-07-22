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
    public function attpermitted(){
        if(Attpermit::where('attmaster_id',$this->id)->exists())
        {
            $attpermit = Attpermit::where('attmaster_id',$this->id)->first();
            return $attpermit;
        }
        else{
            return new Attpermit(['attmaster_id' => $this->id, 'status' => false]);
        }
    }
    public function permitted(){
        if(auth()->user()->level > 3){
            return true;
        }
        if(Attpermit::where('attmaster_id',$this->id)->exists())
        {
            $attpermit = Attpermit::where('attmaster_id',$this->id)->first();
            return $attpermit->status;
        }
        else{
            return false;
        }
    }

    public function hmingziak(){
        return Att::where('attmaster_id',$this->id)->count();
    }

    public function kai(){
        return Att::where('attmaster_id',$this->id)->where('marking','P')->count();
    }

    public function kailo(){
        return Att::where('attmaster_id',$this->id)->where('marking','X')->count();
    }

    public function damlo(){
        return Att::where('attmaster_id',$this->id)->where('marking','D')->count();
    }

    public function zin(){
        return Att::where('attmaster_id',$this->id)->where('marking','Z')->count();
    }

    public function hostel(){
        return Att::where('attmaster_id',$this->id)->where('marking','H')->count();
    }


}
