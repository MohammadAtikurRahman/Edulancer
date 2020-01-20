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


}
