<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();



class Student_loginController extends Controller
{
    public function login_dashboard_for_student(Request $request){

        $datax=array();


        $datax['s_name']=$request->s_name;
        $datax['s_email']=$request->s_email;
        $datax['s_password']=$request->s_password;

        $datax['s_school']=$request->s_school;
        $datax['s_college']=$request->s_college;
        $datax['s_university']=$request->s_university;
        $datax['s_gender']=$request->s_gender;

        $datax['s_address']=$request->s_address;
        $datax['s_city']=$request->s_city;
        $datax['s_thana']=$request->s_thana;
        $datax['s_zip']=$request->s_zip;

       
        

        print_r($datax);

        




               $id =  DB::table('studentinformations')->insertGetId($datax);
               $user_profile=DB::table('studentinformations')
                ->where('id', $id)
                ->first();
                Session::put('s_email',$user_profile->s_email);
                Session::put('id',$user_profile->id);
                Session::put('type','student');
                Session::put('name',$user_profile->s_name);
                Session::put('uni_name',$user_profile->s_university);
                Session::put('clg_name',$user_profile->s_college);
                Session::put('scl_name',$user_profile->s_school);
                Session::put('gender',$user_profile->s_gender);
                Session::put('address',$user_profile->s_address);
                Session::put('message','post successfully');



               
               

                return redirect::to('/post');










    


 }

}
