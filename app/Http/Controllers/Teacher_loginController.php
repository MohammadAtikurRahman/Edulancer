<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();


class Teacher_loginController extends Controller
{
    
    //
    


     public function login_dashboard_for_teacher(Request $request){

       
        // $table->string('t_name');
        // $table->string('t_email');
        // $table->string('t_password');
        // $table->date('t_date');
        // $table->Integer('t_phone');
        // $table->string('t_gender');



        // $table->string('t_school');
        // $table->string('t_college');
        // $table->string('t_university');
        // $table->string('t_department');
        // $table->Integer('t_area');

        // $table->string('t_p_address');
        // $table->string('t_pr_address');
        // $table->Integer('t_nid');
        // $table->Integer('t_passport');
        





        $datay=array();


        $datay['t_name']=$request->t_name;
        $datay['t_email']=$request->t_email;
        $datay['t_password']=$request->t_password;

        $datay['t_date']=$request->t_date;
        $datay['t_phone']=$request->t_phone;
        $datay['t_gender']=$request->t_gender;
        $datay['t_school']=$request->t_school;

        $datay['t_college']=$request->t_college;
        $datay['t_university']=$request->t_university;
        $datay['t_department']=$request->t_department;
        $datay['t_area']=$request->t_area;

        $datay['t_p_address']=$request->t_p_address;
        $datay['t_pr_address']=$request->t_pr_address;
        $datay['t_nid']=$request->t_nid;
        $datay['t_passport']=$request->t_passport;

       
        

        print_r($datay);

        




                DB::table('teacherinformations')->insert($datay);
               Session::put('message','post successfully');
              return redirect::to('/view');










    


 }


      








}
