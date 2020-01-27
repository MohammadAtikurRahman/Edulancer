<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;

class ProfileviewController extends Controller
{


    public function profileview($id)
    {

        $user_profile=DB::table('teacherinformations')
          ->where('t_id', $id)
          ->first();

        $ratings=DB::table('ratingofusers')
          ->where('rating_user_id', $id)
          ->get();

            $rating = 0;

            foreach($ratings as $row) {
                $rating = $rating + $row->rating;
            }
           // dump( $ratings->count()) ;
            $count = $ratings->count();
            if($rating != 0)
                $rating = $rating / $count;
        return view ('admin.profileview')->with(['post'=>$user_profile,'rating'=>$rating]);
    }
    public function profileRate(Request $request)
    {

        $profile_id = $request->profile_id;
        $loggedin_user_id = $request->loggedin_user_id;
        if($request->has('rating5'))
            $rating = 5;
        else if ($request->has('rating4'))
            $rating = 4;
        else if ($request->has('rating3'))
            $rating = 3;
        else if ($request->has('rating2'))
            $rating = 2;
        else if ($request->has('rating1'))
            $rating = 1;
        else
            $rating = 0;
        $ratings=DB::table('ratingofusers')
        ->where('rating_giver_id', $loggedin_user_id)
        ->where('rating_user_id', $profile_id)
        ->get();

        if($ratings->count() != NULL || $ratings->count() != 0){
            $data=array();

            $data['rating_giver_id']= $loggedin_user_id ;
            $data['rating_user_id']=$profile_id ;
            $data['rating']=$rating;
            DB::table('ratingofusers')
            ->where('rating_giver_id', $loggedin_user_id)
            ->where('rating_user_id', $profile_id)
            ->update($data );
        }
        else
        {
            $data=array();

            $data['rating_giver_id']= $loggedin_user_id ;
            $data['rating_user_id']=$profile_id ;
            $data['rating']=$rating;
            DB::table('ratingofusers')
            ->where('rating_giver_id', $loggedin_user_id)
            ->where('rating_user_id', $profile_id)
            ->insert($data );
        }


        $user_profile=DB::table('teacherinformations')
          ->where('t_id', $profile_id)
          ->first();
        $ratings=DB::table('ratingofusers')
          ->where('rating_user_id', $profile_id)
          ->get();

          $rating = 0;

          foreach($ratings as $row) {
            $rating = $rating + $row->rating;
          }

          $count = $ratings->count();
          if($rating != 0)
            $rating = $rating / $count;
        
       // return view ('admin.profileview')->with(['post'=>$user_profile,'rating'=>$rating]);
       return redirect()->to('profileview/'.$profile_id)->with(['post'=>$user_profile,'rating'=>$rating]);

        //return redirect::to('/profileview/'.$profile_id)->with(['post'=>$user_profile,'rating'=>$rating]);
     
    }

    //
}
