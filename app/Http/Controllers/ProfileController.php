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
        return view('profiles.create');
        
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
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
