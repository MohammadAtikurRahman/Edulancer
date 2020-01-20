<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();


class RegistrationController extends Controller
{
    

     public function registration(){



        return view ('admin.registration');

     }
     public function registration_booth(Request $request){

        $datax=array();


        $datax['username']=$request->username;
        $datax['institute']=$request->institute;
        $datax['email']=$request->email;

        $datax['password']=$request->password;
        
        

        print_r($datax);

        




        $id =DB::table('userofedulancers')->insertGetId($datax);
        
                Session::put('message','post successfully');
                return redirect::to('/layout');










    


 }




    //
}
