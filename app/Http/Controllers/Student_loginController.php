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

        




                DB::table('studentinformations')->insert($datax);
                Session::put('message','post successfully');
                return redirect::to('/view');










    


 }

}
