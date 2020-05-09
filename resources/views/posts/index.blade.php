@extends('layouts.app')

@section('content')

<h1>POSTS</h1>
@if( count($posts) >=1 )
@foreach($posts as $post)
        <div class="row" style='background-color:#cccccc; margin:10px; padding:20px'>
        <div class="col-md-4 col-sm-4">
            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"/>
        </div>

        <div class="col-md-8 col-sm-8">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on:<b>{{$post->created_at}}  By {{$post->user->name}}</b></small>

        </div>
        
            
        </div>
@endforeach
{{$posts->links()}}
@else
<p>No Post!</p>

@endif

@endsection