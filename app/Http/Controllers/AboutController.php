<?php

namespace App\Http\Controllers;
use App\Models\Team;
use App\Models\About;
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
        return view('pages.about',['all_team'=>$all_team ,'about_us'=>$about_us]);

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
        $update_data=About::find($id);

            if($update_data){
            $data=$request->except('_token');

            $request->validate([
                'about_us'=>'required|min:120'
            ]);
            $update_data->update($data);
            }
           
        $about_us=About::first();
        $all_team=Team::all();
        return view('pages.about',['all_team'=>$all_team ,'about_us'=>$about_us]);

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
