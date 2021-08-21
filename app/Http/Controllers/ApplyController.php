<?php

namespace App\Http\Controllers;

use App\Models\Jop;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function apply_person(){
        
        $apply_person=User::find(Auth::user()->id);

        $applies_person=$apply_person->jops;

        return view('applies.applies_person',['applies'=>$applies_person]);
    }

    public function apply_company(){
        
        $apply_comapny=Jop::where('company_name',Auth::user()->name)->get();
        if($apply_comapny){
            return view('applies.applies_company',['jops'=>$apply_comapny]);

        }
                
    }


    public function show_applies($id){
        
        $apply_jop=Jop::find($id);
        $applies_jop=$apply_jop->users;

        return view('applies.related_applies',['applies_jop'=>$applies_jop]);
                
    }
}
