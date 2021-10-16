<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             $show_all=Team::all();
            return view('teams.show_team',['all_team'=>$show_all]);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $request->validated();

        
       
        $image=$request->file('image');
        
        $image_name= rand() . '.' .$image->getClientOriginalExtension();
    
        $image->move('images\team',$image_name);

         Team::create([
         'name'=>$request->name,
         'jop'=>$request->jop,
         'image'=>$image_name
         ]);

         return redirect()->route('Team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
       $edit=Team::find($id);
       return view('teams.edit',['edit'=>$edit]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request ,$id)
    {
        $request->validated();

        
        $row=Team::find($id);
        $data=$request->except(['image','_token']);
        
        $image=$request->file('image');
        
        $image_name= rand(). '.' .$image->getClientOriginalExtension();
    
        $image->move('images\team',$image_name);
        
        $data['image']=$image_name;

        if($row->$image){
            unlink('images/team'.$row->image);
          
          }

         $row->update($data);
         return redirect()->route('Team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_row=Team::find($id);
        if($delete_row->image){
            unlink('images/team/'.$delete_row->image);
        }
        $delete_row->delete();

        return redirect()->route('Team.index');
    }
}
