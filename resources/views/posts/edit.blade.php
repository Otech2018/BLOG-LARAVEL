@extends('layouts.app')

@section('content')

<h1>EDIT POST</h1>

<form action="{{route('posts.update',[$post->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Title </label>
    <input type="hidden" name="_method" value="PUT" />
    <input type="text" class="form-control" name='title' aria-describedby="emailHelp" placeholder="Title " value="{{$post->title}}">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea class="form-control" name='body' placeholder="Body">
        {{$post->body}}
    </textarea>
  </div>


    <div class="form-group">
   <input type="file" class="form-control" name="cover_image">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection