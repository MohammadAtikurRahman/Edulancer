<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();


class AdminController extends Controller
{
    

    public function admin_dashboard(){


      return view ('admin.dashboard');
    

    }
    public function view(){


      return view ('admin.view');
    

    }
    public function settings(){


      return view ('admin.settings');
    

    }








    public function logout(){

      Session::put('admin_name',null);
      Session::put('admin_id',null);
      
        
        

      return redirect::to('/edulancer');
    

    }


    public function reg_dashboard(){


      return redirect::to('/admin_dashboard');


    }
    






    public function login_dashboard(Request $request){


 
        //echo "hello";

      //  return view('admin.dashboard');


        $email=$request->s_email;
      //  echo "$email";
       
        $password=($request->s_password);
       // echo "$password";
       

        $result=DB::table('studentinformations')
        ->where('s_email', $email)
        ->where('s_password',$password)
        
        ->first();
       
       





    //   echo "</pre>";
    //  print_r($result);



     if($result ){
          
      //  return redirect::to('/user_dasboard');

     // echo "welcome";

      //return view('admin.dashboard');


        Session::put('s_email',$result->s_email);
        Session::put('id',$result->id);
        Session::put('type','student');
          
           $user_profile=DB::table('studentinformations')
          ->where('id', $result->id)
          ->first();
     
          Session::put('name',$user_profile->s_name);
          Session::put('uni_name',$user_profile->s_university);
          Session::put('clg_name',$user_profile->s_college);
          Session::put('scl_name',$user_profile->s_school);
          Session::put('gender',$user_profile->s_gender);
          Session::put('address',$user_profile->s_address);
          $rows1 = DB::table('techerrequests')
          ->join('posttimelines','posttimelines.r_id','=','techerrequests.request_post_id')
          ->join('teacherinformations','teacherinformations.t_id','=','techerrequests.request_teacher_id')
          ->where('posttimelines.student_id',$result->id)
          ->where('techerrequests.request_status', 'Waiting')
          ->get();
          $student_notification_count = $rows1->count();
          Session::put('student_notification_count',$student_notification_count);
        return redirect::to('/post');



      
     }
      else{

        Session::put('exception','Email or password invalid');
        
          
          
         return redirect::to('/backend');

      //  echo "else work";
     // echo"$result";

      }

      







    }






}
