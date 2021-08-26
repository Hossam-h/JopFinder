<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\About;
class AdmindashController extends Controller
{
    public function getall(){
        $about_us=About::first();

        $all_team=Team::all();
        return view('admin.dashpoard',['all_team'=>$all_team ,'about_us'=>$about_us]);

    }
}
