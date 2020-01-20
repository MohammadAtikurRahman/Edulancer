@extends('layout')


@section('content')


 view profile is here 
 <br>
 @foreach($posts['table1'] as $post)
  {{ $post->r_subject }}
  @if(!empty($post->s_name))
    {{ $post->s_name }}
    @else
    {{ $post->t_name }}
    @endif
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
 
@endforeach
<br>
 @foreach($posts['table2'] as $post)
  {{ $post->r_subject }}
  @if(!empty($post->s_name))
    {{ $post->s_name }}
    @else
    {{ $post->t_name }}
    @endif
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
@endforeach
 
@endsection