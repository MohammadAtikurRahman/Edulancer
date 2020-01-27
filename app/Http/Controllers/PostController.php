<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();




class PostController extends Controller
{
    //
        public function post_ad(){



            return view ('admin.post');


        }



        public function  post_somethings(Request $request){

               $data=array();

              
               if(Session::get('type') == 'teacher')
               {
                $data['teacher_id']=Session::get('id');
               }
               else{
                $data['student_id']=Session::get('id');
               }
               
               

               $data['r_subject']=$request->r_subject;

               $data['r_salary']=$request->r_salary;
               $data['r_weekly']=$request->r_weekly;

              
               $data['r_schedule']=$request->r_schedule;
               $data['r_location']=$request->r_location;

               $data['r_gender']=$request->r_gender;

               $data['r_address']=$request->r_address;
               $data['r_city']=$request->r_city;

               $data['r_area']=$request->r_area;
               $data['r_medium']=$request->r_medium;

               $data['r_details']=$request->r_details;




               print_r($data);

               
                echo "hello";



         DB::table('posttimelines')->insert($data);
         Session::put('message','post successfully');
         return redirect::to('/post');










           


        }
        public function update_post(Request $request){

            $data=array();

           
            if(Session::get('type') == 'teacher')
            {
             $data['teacher_id']=Session::get('id');
            }
            else{
             $data['student_id']=Session::get('id');
            }
            
            $post_id = $request->r_id;

            $data['r_subject']=$request->r_subject;

            $data['r_salary']=$request->r_salary;
            $data['r_weekly']=$request->r_weekly;

           
            $data['r_schedule']=$request->r_schedule;
            $data['r_location']=$request->r_location;

            $data['r_gender']=$request->r_gender;

            $data['r_address']=$request->r_address;
            $data['r_city']=$request->r_city;

            $data['r_area']=$request->r_area;
            $data['r_medium']=$request->r_medium;

            $data['r_details']=$request->r_details;




            print_r($data);

            
             echo "hello";



      //DB::table('posttimelines')->insert($data);
      DB::table('posttimelines')->where('r_id', $post_id)->update($data );
      Session::put('message','post successfully');
      return redirect::to('/goestohistory');

     }
     public function search_post(Request $request){

        $post_search = $request->search;
        $rows1 = DB::table('posttimelines')
        ->join('studentinformations','studentinformations.id','=','posttimelines.student_id')
        ->where('posttimelines.r_subject', 'LIKE', '%'.$post_search.'%')
        ->orWhere('posttimelines.r_salary', 'LIKE', '%'.$post_search.'%')
        ->orWhere('posttimelines.r_location', 'LIKE', '%'.$post_search.'%')
        ->orWhere('posttimelines.r_gender', 'LIKE', '%'.$post_search.'%')
        ->orWhere('posttimelines.r_address', 'LIKE', '%'.$post_search.'%')
        ->orWhere('posttimelines.r_city', 'LIKE', '%'.$post_search.'%')
        ->orWhere('posttimelines.r_area', 'LIKE', '%'.$post_search.'%')
        ->orWhere('posttimelines.r_medium', 'LIKE', '%'.$post_search.'%')
        ->orWhere('posttimelines.r_details', 'LIKE', '%'.$post_search.'%')
        ->orderBy('posttimelines.created_at', 'desc')
        ->get();
        
        $data = [
            'table1'  => $rows1,
            'table2'   => null
        ];
        return view ('admin.view')->with('posts', $data);

     }
     public function request_post(Request $request){

        $data=array();
        $data['request_teacher_id']=Session::get('id');
        $data['request_post_id']=$request->r_id;
        $data['request_status']="Waiting";
        print_r($data);

        
        DB::table('techerrequests')->insert($data);
        Session::put('message','post successfully');
        return redirect::to('/goestoview');
    }
    public function approve_post(Request $request){

        $data=array();
       
        $id=$request->r_id;
        $data['request_status']="Approved";
        print_r($data);

        
        DB::table('techerrequests')->where('request_id', $id)->update($data );
        Session::put('message','post successfully');
        return redirect::to('/notification');
    }

}
