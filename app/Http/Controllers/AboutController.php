<?php

namespace App\Http\Controllers;
use App\Models\Team;
use App\Models\About;
use App\Models\Question;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_us=About::first();

        $all_team=Team::all();
        $all_ques=Question::all();
        return view('pages.about',['all_team'=>$all_team ,'about_us'=>$about_us,'all_ques'=>$all_ques]);

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $edit_about=About::find($id);
        
        return view('pages.edit_about',['edit'=>$edit_about]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        
        $row=About::find($id);

            if($row){
            $data=$request->except('_token','image');

            $request->validate([
                'about_us'=>'required|min:120',

                'image'=>'required'
            ]);

            $image=$request->file('image');
        
            $image_name= rand() . '.' .$image->getClientOriginalExtension();
        
            $image->move('images\team',$image_name);
    
            $data['image']=$image_name;

            if($row->$image){
                unlink('images/team'.$row->image);
              
              }
    
             $row->update($data); 

            
            }
           
        $about_us=About::first();
        $all_team=Team::all();
        return view('pages.about',['all_team'=>$all_team ,'about_us'=>$row]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
