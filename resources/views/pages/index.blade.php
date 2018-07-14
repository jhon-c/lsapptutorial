@extends('layouts.app')
@section('content')
  <div class="jumbotron text-center">
    <h1>
      {{$title}}
    </h1>
    
    <a class="btn btn-primary btn-lg"  href="/">Login</a>
    <a class="btn btn-success btn-lg" href="/" role="button">Register</a>
  
  </div>
@endsection