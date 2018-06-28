@extends('layouts.app')

@section('content')
    <h1> posts </h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md 4 col-sm 4">
                    <img style="width: 100%;" src="storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md 8 col-sm 8">
                        <h3><a href="/trainRsys/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Writen on {{$post->created_at}}</small>
                    </div>
                </div>
                
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <h3>No posts found </h3>

    @endif
@endsection