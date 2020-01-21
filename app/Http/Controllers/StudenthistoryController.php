<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class StudenthistoryController extends Controller
{
    //
         public function historyPost(){
            $id = Session::get('id');
            $rows1 = DB::table('posttimelines')
        ->join('studentinformations','studentinformations.id','=','posttimelines.student_id')
        ->where('id', $id)
        ->orderBy('posttimelines.created_at', 'desc')
        ->get();

        $data = [
            'table1'  => $rows1,
        ];
        
        return view ('admin.student_history')->with('posts', $data);


         }
         public function historyUpdate($id){
            $rows1 = DB::table('posttimelines')
            ->where('r_id', $id)
            ->first();

            return view ('admin.student_history_update')->with('posts', $rows1);
           


         }
         public function historyDelete($id){
            $u_id = Session::get('id');
            DB::table('posttimelines')->where('r_id', $id)->delete();
            
            $rows1 = DB::table('posttimelines')
            ->join('studentinformations','studentinformations.id','=','posttimelines.student_id')
            ->where('id', $u_id)
            ->orderBy('posttimelines.created_at', 'desc')
            ->get();

            $data = [
                'table1'  => $rows1,
            ];
            
            
            return redirect()->route('goestohistory', ['posts' => $data]);


         }


}
