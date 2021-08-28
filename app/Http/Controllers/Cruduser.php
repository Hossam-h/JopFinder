<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Cruduser extends Controller
{
    public function index(){
         $show_all=User::all();
          return view('users.show_all',['show_all'=>$show_all]);
    }


    public function destroy($id){
        User::destroy($id);

        return \redirect()->route('show_all_user.index');
   }
}
