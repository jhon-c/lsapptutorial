@extends('layouts.app')

@section('content')
<h1>Post Section here</h1>

    @if(count($posts)>0)
        @foreach($posts as $post)
        <!-- '@'if (Auth::user()->id == $post->user_id) this is how to limit the the blog posts on the users'post only other post can't be view by other users-->
            <div class = "well">
                <div class = "row">
                    <div class="col-md-4 col-sm-4">
                    <img style= "width:100%"src="/storage/cover_images/{{$post->cover_image}}">
                </div>
                    <div class="col-md-4 col-sn-4">
                            <h3>
                                    <a href = "/posts/{{$post->id}}">{{$post->title}}</a>
                            </h3>
                            <p>
                                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                            </p>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>

    @endif

@endsection
