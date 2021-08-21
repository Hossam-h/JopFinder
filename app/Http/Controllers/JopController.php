<?php

namespace App\Http\Controllers;

use App\Models\Jop;
use App\Models\User;
use App\Models\Categore;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class JopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $all_category=Categore::all();
         $all_company_name=User::where('email_type','Company')->get();
         
        return view('pages.add_new_jop',['categories' => $all_category , 'companies_name'=>$all_company_name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
     public function create()
    {
        //
    }

    public function show($id)
    {
        $apply_auth=User::find(Auth::user()->id);
        if($apply_auth->id){

            $apply_jop=Jop::find($id);
            $apply_auth=User::find(Auth::user()->id);
            
            $apply_jop->users()->attach([$apply_auth->id]);
    
        }
        
        return redirect()->route('index');
        //dd($detailjop->jop_name,$detailjop->users);
    
    }

    public function showall_jop()
    {
        $allljop=Jop::all();
        return view('pages.allJops',['alljops'=>$allljop]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
         $request->validate([
            'jop_name'=>'required',
            'salary'=>'required',
            'location'=>'required',
            'company_name'=>'required',
            'jop_description'=>'required'
         ]);

         $data=$request->except(['_token']);
        Jop::create($data);
        return redirect()->route('index');  
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        // dd(
        //      $id_user=Auth::user()->id,
        //     $user = User::where('id', '=', $id_user)
        // ->first()->name
        //     // Auth::user()->name,
        //     // Auth::user()->id,
        //     // Jop::find($id)->id
        // );
        $detailjop=Jop::find($id);
        

        return view('pages.jop_single',['jop_detail'=>$detailjop]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function edit(Jop $jop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jop $jop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jop $jop)
    {
        //
    }
}
