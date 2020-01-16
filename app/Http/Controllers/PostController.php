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


               $data['ad_salary']=$request->ad_salary;
               $data['ad_city']=$request->ad_city;
               $data['ad_location']=$request->ad_location;

               $data['ad_medium']=$request->ad_medium;
               $data['ad_gender']=$request->ad_gender;
               $data['ad_institue']=$request->ad_institue;

               $data['ad_post']=$request->ad_post;
               

               print_r($data);

               




         DB::table('advertisementofthewebs')->insert($data);
         Session::put('message','post successfully');
         return redirect::to('/post');










           


        }


}
