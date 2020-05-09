@extends('layouts.app')

@section('content')
<a class='btn btn-danger' href="/posts">Go Back</a>
<div style='background-color:#cccccc; margin:10px; padding:20px'>
<h1>{{$post->title}}</h1>
  <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"/>
 <small>Written on:<b>{{$post->created_at}} By {{$post->user->name}}</b></small>

 <div style='background-color:black;color:white;  margin:10px; padding:20px'>
{{$post->body}}
 </div>
        </div>

        <hr/>
        @if(!Auth::guest() && Auth::user()->id==$post->user_id)
         

        <form action="{{route('posts.update',[$post->id])}}" method="post" >
        {{csrf_field() }}
        <input type="hidden" name="_method" value="DELETE" />
        <a href="/posts/{{$post->id}}/edit" class='btn btn-primary btn-sm'> Edit</a>   
        |   
         <button type="submit" class='btn btn-danger btn-sm'> Delete</button>
         </form>
         @endif
@endsection