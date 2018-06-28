@extends('layouts.app')

@section('content')
    <div class="well">
        <a href="/trainRsys/public/posts" class="btn btn-default">Go back</a>
        <h1>{{$post->title}}</h1>
        <img style="width: 100%;" src="../storage/cover_images/{{$post->cover_image}}">
        <p>{!!$post->body!!}</p>
        <small>Writen on {{$post->created_at}}</small>
        <hr>
    
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/trainRsys/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action'=>['postsController@destroy' , $post->id], 'method' => 'POST' ,'class'=>'pull-right' ])!!}
                {{Form::hidden('_method' , 'DELETE')}}
                {{Form::submit('Delete' , ['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
    </div>
@endsection