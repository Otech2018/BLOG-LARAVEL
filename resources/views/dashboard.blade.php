@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="/posts/create">Create Post </a>
                    <h1>MY BLOG POST</h1>
                    @if(count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>

                        @foreach ($posts as $post )
                            <tr>
                                <td>{{$post->title}}</td>
                                <td> <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm">Edit</a></td>
                                <td>
                                
                                        <form action="{{route('posts.update',[$post->id])}}" method="post" >
                                        {{csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class='btn btn-danger btn-sm'> Delete</button>
                                        </form>
                                
                                </td>
                            </tr>
                
                            
                        @endforeach
                    </table>
                    @else
                    <p>You Have No Post!!!</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
