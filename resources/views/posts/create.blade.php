@extends('layouts.app')

@section('content')
    <h1> create post </h1>
    {!! Form::open(['action' =>'postsController@store','method'=>'POST' ,'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('body', 'body')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder' => 'Body text','style'=>'visibility: visible;'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection