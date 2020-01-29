@extends('layout')


@section('content')

<div class="card">
    <div class="container ml-4 mb-2 mt-4">
        @foreach($posts as $post)
        <div class="row" style="position: relative;">
            <div class="col-md-12 col-sm-12">     
         
              <div class="row" style="position: relative;">
            <div class="col-md-12 col-sm-12">                
                <p style="font-size: 20px; font-weight: bold; margin: 0 !important;">Need a tutor for {{ $post->r_subject }} student
                </p>
                <a style="font-size: 20px; font-weight: bold; margin: 0 !important;" href="{{ URL::to('/profileview/'.$post->t_id )}}">User: {{$post->t_name}}</a>
                <div class="row" style="font-size: 15px !important; margin: 7px 0 0 0;">
                    <div class="col-md-3 col-sm-12" style="padding-left: 0px;padding-right: 0px;">
                        <span style="font-weight: bold; color: #0675c1;">Category : </span>{{ $post->r_medium }} Medium
                    </div>


                    <div class="col-md-3 col-sm-12" style="padding-left: 0px;"><span
                            style="font-weight: bold; color: #0675c1;">Salary : </span>{{ $post->r_salary }} Tk
                    </div>
                    <div class="col-md-3 col-sm-12" style="padding-left: 0px;">
                        <span style="font-weight: bold; color: #0675c1;">Weekly : </span>   {{ $post->r_weekly }} Days 
                    </div>
                    <div class="col-md-3 col-sm-12" style="padding-left: 0px;">
                        <span style="font-weight: bold; color: #0675c1;">Preference Gender : </span> {{ $post->r_gender }} 
                    </div>

                    
                    <div class="col-md-7 col-sm-12 pl-3 mt-2">

                        <p style="font-size: 15px !important; margin-top: 0px !important; margin-bottom: 0px !important;">
                            <span style="font-weight: bold;">Tutoring Time : </span>{{ $post->r_schedule }}</p>
                            
                        <p style="font-size: 15px !important; margin-top: 0px !important; margin-bottom: 0px !important;">
                            <span style="font-weight: bold;">Address : </span>{{ $post->r_address }}</p>

                        <p style="font-size: 15px !important; margin-top: 0px !important; margin-bottom: 0px !important;">
                            <span style="font-weight: bold;">Area : </span>{{ $post->r_area }}</p>

                        <p style="font-size: 15px !important; margin-top: 0px !important; margin-bottom: 0px !important;">
                            <span style="font-weight: bold;">City : </span>{{ $post->r_city }}</p>

                        <p style="font-size: 15px !important; margin-top: 0px !important; margin-bottom: 0px !important;">
                            <span style="font-weight: bold;">Details : </span>{{ $post->r_details }}</p>                       
                    </div>



                     




                          
                      
                </div>





                <div class="container">
    <div class="form-group">





            <!-- {{ $post->r_subject }}
            {{ $post->r_salary }}
            {{ $post->r_weekly }}
            {{ $post->r_schedule }}
            {{ $post->r_location }}
            {{ $post->r_gender }}
            {{ $post->r_address }}
            {{ $post->r_city }}
            {{ $post->r_area }}
            {{ $post->r_medium }}
            {{ $post->r_details }}           
            {{$post->t_name}}
            {{$post->t_email}}
            {{$post->t_phone}}
            {{$post->t_gender}}
            {{$post->t_school}}
            {{$post->t_college}}
            {{$post->t_university}}
            {{$post->t_department}}
            {{$post->t_area}}
            {{$post->t_p_address}}
            {{$post->t_pr_address}}
             -->
           
            </div>

        <div class="container">
    <div class="form-group">
</div>
</div>
<div class="mapouter">
  <div class="gmap_canvas">
    <iframe
      width="900"
      height="400"
      id="gmap_canvas"
      src="https://maps.google.com/maps?q= {{ $post->r_area }}>&output=embed"
      frameborder="0"
      scrolling="no"
      marginheight="0"
      marginwidth="0"
    ></iframe
    
  </div>
  
</div>


    <form method="post" action="{{URL::to('/approve_request')}}">
            {{csrf_field()}}
            <input type="hidden" id="r_id" name="r_id" value="{{ $post->request_id }}">
                            
            <button type="submit" class="btn btn-primary mb-1 ml-4" style="background-color:#7d00e4;color:white;border-color:#7d00e4" >{{ $post->request_status }}</button>
      </form>
   
            </div>
        </div>
        @endforeach
       


    </div>   
               
        
</div>

  
 


 
 <br>

 

<script src="./map.js"></script>
<script type="text/javascript">
     
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
<style>
    .mapouter {
      position: relative;
      text-align: right;
      height: 200px;
      width: 300px;
    }
    .gmap_canvas {
      overflow: hidden;
      background: none !important;
      height: 200px;
      width: 250px;
    }
  </style>



@endsection