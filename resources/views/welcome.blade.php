@extends('layout')
@section('title', 'Welcome')
@section('content')
  <div id='welcome' class='flex'>
    <a href='/wp_posts' class='grow text-center text-sky-500 text-3xl hover:underline'><h1>10 Most Recent Wordpress Posts</h1></a>
    <a href='/places' class='grow text-center text-sky-500 text-3xl hover:underline'><h1>Places Auto Complete With Google Maps</h1></a>
  </div>
@endsection
