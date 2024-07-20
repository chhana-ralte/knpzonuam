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

}
