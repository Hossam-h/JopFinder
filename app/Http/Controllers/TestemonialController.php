<?php

namespace App\Http\Controllers;

use App\Models\Testemonial;
use Illuminate\Http\Request;

class TestemonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Testemonial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Testemonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$validated = $request->validated();

        $request->validate([
            'name'=>'required|string',
            'image'=>'required|image',
            'opinion'=>'required|string'
        ]);
     
        $image=$request->file('image');
        $image_name= rand() . '.' .$image->getClientOriginalExtension();
        
        $image->move('images\testemonial',$image_name);
        
        
        Testemonial::create([
            'name'=> ['en' => $request->name, 'ar' => $request->name_ar],
            'opinion'=> ['en' => $request->opinion, 'ar' => $request->opinion_ar],
            'image'=>$image_name

        ]);
        return \redirect()->route('index')
        ->with('success', 'Your testemonial has been sent successfully!');

     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testemonial  $testemonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testemonial $testemonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testemonial  $testemonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testemonial $testemonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testemonial  $testemonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $row=Testemonial::find($id);
        $request->validate([
            'name'=>'required|string',
            'image'=>'required|image',
            'opinion'=>'required|string'
        ]);
             
        $image=$request->file('image');
        $image_name= rand() . '.' .$image->getClientOriginalExtension();
        
        $image->move('images\testemonial',$image_name);
        
        if($row->image){
            unlink('images\testemonial'.$row->image);
        }
        Testemonial::update([
            'name'=> ['en' => $request->name, 'ar' => $request->name_ar],
            'opinion'=> ['en' => $request->opinion, 'ar' => $request->opinion_ar],
            'image'=>$image_name

        ]);
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testemonial  $testemonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testemonial::destroy($id);
    }
}
