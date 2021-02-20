@extends('layouts.main')
@section('content')
<div class="container custom-container">
    <a href="/posts" class="btn btn-dark btn-sm">
        <i class="fas fa-long-arrow-alt-left"></i>
    </a>
<h1>Update Post</h1>
@if (session()->has('message'))
    <p class="alert alert-info">
        {{ session()->get('message') }}
    </p>
@endif
{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="row">
        <div class="col">
           <div class="form-group">
            {{ Form::text('title', $post->title ,['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'What is the title ?']) }}
            @error('title')
                <p class="text-danger">{{ $message }}</p>
             @enderror
           </div>
        </div>
    </div>
    <div class="row mt-10">
        <div class="col">
            <div class="form-group">
                {{Form::textarea('body',$post->body, ['id' => 'artical', 'class' => 'form-control', 'placeholder '=> 'Your content here....'])}}
                 @error('body')
                       <p class="text-danger">{{ $message }}</p>
                  @enderror
            </div>
        </div>
    </div>
  
    <div class="row">
        <div class="col">
            {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Edit', ['class' => 'btn btn-dark btn-sm']) }}
        </div>
    </div>
{!! Form::close() !!}
</div>
@endsection