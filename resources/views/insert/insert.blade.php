

@extends('layouts.main')
@section('content')
<div class="container custom-container">
        <div class="row">
            <div class="col-md-12 ">
                <h1>Make New Post</h1>
            </div>
            <div class="col-md-12">
            {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
            @csrf
            <div class="form-group">
                {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Write your title' , 'autocomplete'=> 'off']) }}
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {{ Form::textarea('body', '', ['id'=> 'artical', 'class' => 'form-control', 'placeholder' => 'What is in your mind ?' , 'autocomplete'=> 'off']) }}
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
            
            <div class="form-group">
                {{ Form::submit('Submit', ['class' => 'btn btn-secondary btn-sm']) }}
            </div>
                {!! Form::close() !!}
            </div>
        </div>
</div>
@endsection