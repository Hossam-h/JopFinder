<?php

namespace App\Http\Controllers;

use App\Models\Categore;
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categore  $categore
     * @return \Illuminate\Http\Response
     */
    public function show(Categore $categore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categore  $categore
     * @return \Illuminate\Http\Response
     */
    public function edit(Categore $categore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categore  $categore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categore $categore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categore  $categore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categore $categore)
    {
        //
    }
}
