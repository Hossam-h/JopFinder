<?php

namespace App\Http\Controllers;

use App\Models\Jop;
use App\Models\User;
use App\Models\Categore;
use App\Http\Requests\JopRequest;

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
            
           if($apply_jop->users()->syncWithoutDetaching([$apply_auth->id])){
            return redirect()->route('index');
           } else{
            return redirect()->route('index');
           }
    
        }
        
        
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
    public function store(JopRequest $request)
    {
    
        $validate=$request->validated();
        
        
         //$data=$request->except(['_token']);
        //Jop::create($data);
      Jop::create(  [
          'jop_name'=>['en'=>$request->jop_name,'ar'=>$request->jop_name_ar],
          'salary'=>$request->salary,
          'location'=>['en'=>$request->location,'ar'=>$request->location_ar],
          'company_name'=>$request->company_name,
          'jop_description'=>['en'=>$request->jop_description,'ar'=>$request->jop_description_ar],
          'categore_id'=>$request->categore_id
        ]);

        return redirect()->route('index');  
        
        
    }
public function edit($id){
$edit_jop=Jop::find($id);
$all_category=Categore::all();
return view('jops.edit',
[
    'edit'=>$edit_jop,
    'all_category'=>$all_category
]);

}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        $detailjop=Jop::find($id);
        return view('pages.jop_single',['jop_detail'=>$detailjop]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function showMy_jops()
    {
        
        $apply_comapny=Jop::where('company_name',Auth::user()->name)->get();
        $categroy_name;
     foreach ($apply_comapny as $jop){
        $categroy_name=Categore::where('id',$jop->categore_id)->first();
        
     }

        if($apply_comapny){
            return view('jops.show_jops',
            [
                'jops'=>$apply_comapny ,
                'categroy_name'=>$categroy_name
            ]);

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $jop_update=Jop::find($id);
        $request->validate([
            'jop_name'=>'required',
            'salary'=>'required',
            'location'=>'required',
        
            'jop_description'=>'required'
         ]);

         $data=$request->except(['_token']);

         $jop_update->update([
            'jop_name'=>['en'=>$request->jop_name,'ar'=>$request->jop_name_ar],
            'salary'=>$request->salary,
            'location'=>['en'=>$request->location,'ar'=>$request->location_ar],
            'company_name'=>$request->company_name,
            'jop_description'=>['en'=>$request->jop_description,'ar'=>$request->jop_description_ar],
            'categore_id'=>$request->categore_id
         ]);
        return redirect()->route('jop.showMy_jops');  
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
      Jop::destroy($id);
      return redirect()->route('jop.showMy_jops'); 
    }
}
