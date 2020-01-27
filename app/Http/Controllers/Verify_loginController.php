<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class Verify_loginController extends Controller
{
    public function logincheckfromdatabase(Request $request){


        $email=$request->t_email;
        echo "$email";
       
        $password=($request->t_password);
        echo "$password";
       

        $result=DB::table('teacherinformations')
        ->where('t_email', $email)
        ->where('t_password',$password)
        
        ->first();
       
       





    //   echo "</pre>";
          // print_r($result);



     if($result ){
          
      //  return redirect::to('/user_dasboard');

     // echo "welcome";

      //return view('admin.dashboard');


        Session::put('t_email',$result->t_email);
        Session::put('t_id',$result->t_id);
        Session::put('type','teacher');
        
        $user_profile=DB::table('teacherinformations')
          ->where('t_id', $result->t_id)
          ->first();
          Session::put('name',$user_profile->t_name);
          Session::put('uni_name',$user_profile->t_university);
          Session::put('clg_name',$user_profile->t_college);
          Session::put('scl_name',$user_profile->t_school);
          Session::put('gender',$user_profile->t_gender);
          Session::put('address',$user_profile->t_p_address);


         
          $rows1 = DB::table('techerrequests')
          ->join('posttimelines','posttimelines.r_id','=','techerrequests.request_post_id')
          ->join('teacherinformations','teacherinformations.t_id','=','techerrequests.request_teacher_id')
          ->where('techerrequests.request_teacher_id',  $result->t_id)
          ->where('techerrequests.request_status', 'Approved')
          ->get();
          $teacher_notification_count = $rows1->count();
          Session::put('teacher_notification_count',$teacher_notification_count);

        return redirect::to('/goestoview');



      
     }
      else{

        Session::put('exception','Email or password invalid');
        
          
          
      return redirect::to('/reg_for_teacher');

      // //  echo "else work";

      // print_r($result);
     // echo"$result";

      }

      






     }

}
