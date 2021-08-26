<?php

namespace App\Http\Controllers;

use App\Models\Categore;
use App\Models\Jop;
use Illuminate\Http\Request;

class CategoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.add_category');
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
            'category'=>'required|string|unique:categores,category',
            
        ]);
        
        Categore::create($request->except(['_token']));

        return redirect()->route('create_category');
    }
    
     public function show_all(){
         $all_category=Categore::all();
         
         return view('category.show_all',['all_category'=>$all_category]);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categore  $categore
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_category=Categore::find($id);
        $cat_id=$show_category->id;
        $Show_jop_category=Jop::where('category_id',$cat_id)->get();
        return view ('category.show_category',['show_jops'=>$Show_jop_category,'id_cat'=>$cat_id]);
           
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categore  $categore
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_cat=Categore::find($id);
        return view('category.edit',['edit_cat'=>$edit_cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categore  $categore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    
         $request->validate([
          'category'=>'required|string|min:3|unique:categores,category'
         ]);

     $ctaegory_update=Categore::find($id);
   
     $datas=$request->except(['_token']);

     $ctaegory_update->update($datas);

     return redirect()->route('all_category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categore  $categore
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id){
         $cat_delete=Categore::find($id);
         $cat_delete->delete();
         return redirect()->route('all_category');
        }
    }
}
