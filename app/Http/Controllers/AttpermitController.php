<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attmaster;
use App\Models\Attpermit;

class AttpermitController extends Controller
{
    public function index(){
        return "hello";
    }
    public function store(Request $request){
        if(Attpermit::where('attmaster_id',$request->attmaster_id)->exists()){
            $attpermit = Attpermit::where('attmaster_id',$request->attmaster_id)->first();
            //return $attpermit->status;
            $attpermit->update([
                'status' => 1 - $attpermit->status
            ]);
            return "modified";
        }
        else{
            Attpermit::create([
                'attmaster_id' => $request->attmaster_id,
                'status' => 1
            ]);
            return "created";
        }
    }
}
