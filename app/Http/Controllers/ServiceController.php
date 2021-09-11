<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data=Service::all();

        return view('services.show_all',['all_service'=>$all_data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.add');
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
            'icon'=>'required|string|unique:services,icon',
            'tittle'=>'required|string|unique:services,tittle',
            'description'=>'required|string|unique:services,description',
        ]);

        $data=$request->except('_token');
        if($data){
            Service::create([
                'tittle'=> ['en'=>$request->tittle,'ar'=>$request->tittle_ar],
                'description'=>['en'=>$request->description,'ar'=>$request->description_ar],
                'icon'=>$request->icon         
            ]);
        }
        return \redirect()->route('services.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Service::find($id);
        return view('services.edit',['edit'=>$edit]);
        return \redirect()->route('services.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row=Service::find($id);
        
        $request->validate([
            'icon'=>'required|string|unique:services,icon',
            'tittle'=>'required|string|unique:services,tittle',
            'description'=>'required|string|unique:services,description',
        ]);
dd($request->description,$request->icon);
            $row->update([
                'tittle'=> ['en'=>$request->tittle,'ar'=>$request->tittle_ar],
                dd('ok'),
                'description'=>['en'=>$request->description,'ar'=>$request->description_ar],
                'icon'=>$request->icon         
            ]);
        
        return \redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    
     public function destroy($id)
    {
        Service::destroy($id);
        return \redirect()->route('services.index');
    }

}
