<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Jop;
use App\Http\Resources\ApiResource;
use Illuminate\Support\facades\Validator;
class JopApiController extends Controller
{
    public function index(){
        $data=Jop::all();

        return ApiResource::collection($data);
    }


    public function show($id){
        $data=Jop::find($id);

        return new ApiResource($data);
    }

    public function update(Request $request, $id){
        $update=Jop::find($id);
            $validate= validator::make($request->all(),[
                'jop_name'=>'required|string',
                'salary'=>'required',
                'company_name'=>'required|string',
                'description'=>'required',
                'location'=>'required',
                'categore_id'=>'required'
            ]);
        if($validate->fails()){
            return response()->json($validate->errors());
        }

        $update->update($request->all());
        return \response()->json('ok');
    }


    public function store(Request $request){

            $validate= Validator::make($request->all(),[
                'jop_name'=>'required|string',
                'salary'=>'required',
                'company_name'=>'required|string',
                'jop_description'=>'required',
                'location'=>'required',
                
            ]);
        if($validate->fails()){
            return response()->json($validate->errors());
        }

        Jop::create($request->all());
        return \response()->json('ok');
    }


    


    public function destroy($id){
        $delete=Jop::find($id);

        if($delete){
            $delete->delete();
        }
    }

}
