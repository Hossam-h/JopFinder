<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $my_profile=Profile::where('user_id', Auth::user()->id)->first();


        return view('profiles.profile',['own_profile'=>$my_profile]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $my_profile=Profile::where('user_id', Auth::user()->id)->first();



        return view('profiles.create',['own_profile'=>$my_profile]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($image=$request->file('image'));
//dd(Auth::user()->id);
        $request->validate([
            'name'=>'required|string',
            'gender'=>'required|in:mail,femail',
            'status'=>'required|in:Married,Single',
            'education_degree'=>'required',
            'user_id'=>'unique:profiles,user_id'
  ]); 
        
        $image=$request->file('image');
        $image_name= rand() . '.' .$image->getClientOriginalExtension();
        $image->move('images\team',$image_name);
        
        Profile::create([
            'name'=>$request->name,
            'gender'=>$request->gender,
            'status'=>$request->status, 
            'education_degree'=>$request->education_degree,
            'user_id'=>Auth::user()->id,
            'image'=>$image_name

        ]);
        
        return redirect()->route('index');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_profile=Profile::find($id);

        return view('profiles.edit_profile',['edit'=>$edit_profile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_profile=Profile::find($id);
        $request->validate([
            'name'=>'required|string',
            'gender'=>'required|in:mail,femail',
            'status'=>'required|in:Married,Single',
            'education_degree'=>'required',
            'user_id'=>'unique:profiles,user_id'
  ]); 

         $data=$request->except(['_token','image']);
        
        $image=$request->file('image');
        $image_name= rand() . '.' .$image->getClientOriginalExtension();
        $image->move('images\team',$image_name);

        if($update_profile->$image){
            unlink('images/team'.$row->image);
          
          }
        $data['image']=$image_name;
        $update_profile->update($data);   

        
        $my_profile=Profile::where('user_id', Auth::user()->id)->first();

        return view('profiles.profile',['own_profile'=>$my_profile]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $row=Profile::find($id);
        if($row){
            $row->delete();
        }
        return view('profiles.profile');
        
    }
}
