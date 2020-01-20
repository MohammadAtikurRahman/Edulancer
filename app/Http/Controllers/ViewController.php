<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function viewPost(){
        
        $rows1 = DB::table('posttimelines')
        ->join('studentinformations','studentinformations.id','=','posttimelines.student_id')
        ->get();

        $rows2 = DB::table('posttimelines')
        ->join('teacherinformations','teacherinformations.t_id','=','posttimelines.teacher_id')
        ->get();

        $data = [
            'table1'  => $rows1,
            'table2'   => $rows2
        ];
        
        return view ('admin.view')->with('posts', $data);;
      
      }




}
