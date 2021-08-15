<?php

namespace App\Http\Controllers;

use App\Models\Connact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(Auth::user()->id);

        return view('pages.connact');
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
        // $dogs = Connact::orderBy('id', 'desc')->take(2)->get();

        //  dd($dogs);
        $request->validate([
            'name'=>'required',
            'email'=>'required|max:255|min:10|email|unique:connacts,email',
            'phone'=>'required|integer|min:9|unique:connacts,phone',
            'message'=>'required'
        ]);
        
        Connact::create($request->except(['_token']));

        return redirect()->route('connact-us');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Connact  $connact
     * @return \Illuminate\Http\Response
     */
    public function show(Connact $connact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Connact  $connact
     * @return \Illuminate\Http\Response
     */
    public function edit(Connact $connact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Connact  $connact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Connact $connact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Connact  $connact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Connact $connact)
    {
        //
    }
}
