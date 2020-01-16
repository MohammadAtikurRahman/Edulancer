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
      
        
        

      return redirect::to('/backend');
    

    }







    public function login_dashboard(Request $request){


 
        //echo "hello";

      //  return view('admin.dashboard');


        $email=$request->admin_email;
      //  echo "$email";
       
        $password=($request->admin_password);
       // echo "$password";
       

        $result=DB::table('admininfos')
        ->where('admin_email', $email)
        ->where('admin_password',$password)
        
        ->first();
       
       





    //   echo "</pre>";
    //  print_r($result);



     if($result ){
          
      //  return redirect::to('/user_dasboard');

     // echo "welcome";

      //return view('admin.dashboard');


        Session::put('admin_email',$result->admin_email);
        Session::put('admin_id',$result->admin_id);
        
          
          

        return redirect::to('/admin_dashboard');



      
     }
      else{

        Session::put('exception','Email or password invalid');
        
          
          
         return redirect::to('/backend');

      //  echo "else work";
     // echo"$result";

      }









    }






}
