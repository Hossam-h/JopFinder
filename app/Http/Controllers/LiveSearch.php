<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jop;
use DB;
class LiveSearch extends Controller
{
   public function index()
    {
     return view('search.live_search');
    }


    public function action(Request $request)
    {
   
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('jops') ->where('location', 'like', '%'.$query.'%')->get();
         
      } else
      {
       $data = DB::table('jops')->orderBy('id', 'desc')->get();
      }
     
      $total_row = $data->count();
      if($total_row > 0)
      {
         
       foreach($data as $row)
       {
      
        $output.= '<tr>
         
         <td>'.$row->location.'</td>
         <td>'.$row->jop_name.'</td>
         <td>'.$row->company_name.'</td>
         
        </tr>';
       
       }
      }else
      {
       $output= '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );
     
      echo json_encode($data);
      $v=10;
      return view('pages.index',['ajax'=>$v]);
     }

     
    }

    //-----------------------------------------------------------------------


    public function action_jop(Request $request)
    {
   
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('jops') ->where('jop_name', 'like', '%'.$query.'%')->get();
         
      } else
      {
       $data = DB::table('jops')->orderBy('id', 'desc')->get();
      }
     
      $total_row = $data->count();
      if($total_row > 0)
      {
         
       foreach($data as $row)
       {
      
        $output.= '<tr>
         
         <td>'.$row->location.'</td>
         <td>'.$row->jop_name.'</td>
         <td>'.$row->company_name.'</td>
         
        </tr>';
       
       }
      }else
      {
       $output= '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );
     
      echo json_encode($data);
   
     }

    // return redirect()->route('index');
    }

}
