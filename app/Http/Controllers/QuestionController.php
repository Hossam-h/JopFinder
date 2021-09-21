<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Requests\QuistionRequest;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_qusetion=Question::all();
        return view('question.index',['all_qusetion'=>$all_qusetion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuistionRequest $request)
    {
    
      
       $validtae=$request->validated();
               Question::create([
                  'question'=>['en'=>$request->question,'ar'=>$request->question_ar],
                  'answer'=>['en'=>$request->answer,'ar'=>$request->answer_ar],

               ]);
        
               return redirect()->route('question.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_query=Question::find($id);

        return view('question.edit',['edit'=>$edit_query]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($update_query=Question::find($id)){
        $request->validate([
            'question'=>'required',
            'answer'=>'required'
        ]);
   
          
           $update_query->update([
            'question'=>['en'=>$request->question,'ar'=>$request->question_ar],
            'answer'=>['en'=>$request->answer,'ar'=>$request->answer_ar],
           ]);
        }
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($update_query=Question::find($id)){
       
            Question::destroy($id);
            }
            return redirect()->route('question.index');
    }
}
