<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Jop;
use App\Models\Categore;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data=Jop::orderBy('id','desc')->take(5)->get();
        $categores=Categore::all();
        

        $num;
        $num2;
        foreach($categores as $cat){
            $num = $cat->id;       
             
             
            
        }
        $num2=Categore::find(1);
   // dd($num2->jops);
    // $num_jop=null;
    //     $num_jop.=Jop::where('category_id',$num)->get();

    //     //dd($num_jop);
    //      dd($num_jop->count());      
        $all_service=Service::all();
        return view('pages.index',['jops'=>$data , 'categores'=>$categores, 'all_service'=>$all_service]);
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

    public function search_ajax(){
        return view ('pages.ajax');
    }

    public function search(Request $request)
    {
        $search=$request->except(['_token']);
        $name_jop=$search['jop_name'];
        $name_city=$search['city'];
//serch_jops
        
        $categores=Jop::where('jop_name','like','%'.$name_jop.'%')->Where('location', 'like','%'.$name_city.'%')->get();
        
        return view('pages.search',['jops'=>$categores]);
        
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
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
