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

        return view('applies.related_applies',['applies_jop'=>$applies_jop,'jop_id'=>$apply_jop->id]);
                
    }
    public function delete_relation($id){
        $jop_id=jop::find($id[1]);
    
        $apply_person=User::find($id[0]);
//to delete one column on many to many
        $apply_person->jops()->wherePivot('jop_id',$jop_id->id)->detach();

return redirect()->route('show_apply',['id'=>$jop_id->id]);


    }


    public function delete_applyFrom_person($id){
        
        $user=User::find(Auth::user()->id);

        //dd($id,$user->id);
        $user->jops()->wherePivot('jop_id',$id)->detach();
        return redirect()->route('apply_person');
    }
}
