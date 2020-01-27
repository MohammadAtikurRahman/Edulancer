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

        




        
                $id =  DB::table('teacherinformations')->insertGetId($datay);
               $user_profile=DB::table('teacherinformations')
                ->where('t_id', $id)
                ->first();
                Session::put('t_email',$user_profile->t_email);
                Session::put('id',$user_profile->t_id);
                Session::put('type','teacher');
                Session::put('name',$user_profile->t_name);
                Session::put('uni_name',$user_profile->t_university);
                Session::put('clg_name',$user_profile->t_college);
                Session::put('scl_name',$user_profile->t_school);
                Session::put('gender',$user_profile->t_gender);
                Session::put('address',$user_profile->t_p_address);
               Session::put('message','post successfully');



               $rows1 = DB::table('techerrequests')
               ->join('posttimelines','posttimelines.r_id','=','techerrequests.request_post_id')
               ->join('teacherinformations','teacherinformations.t_id','=','techerrequests.request_teacher_id')
               ->where('techerrequests.request_teacher_id',  $user_profile->t_id)
               ->where('techerrequests.request_status', 'Approved')
               ->get();
               $teacher_notification_count = $rows1->count();
               Session::put('teacher_notification_count',$teacher_notification_count);
              return redirect::to('/post');










    


 }


      








}
