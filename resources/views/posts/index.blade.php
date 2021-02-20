    @extends('layouts.main')
    @section('content')
   
        <div class="container btn-container">
            <a href="/insert" type="button" class="btn btn-secondary btn-sm links">Add New +</a>
        </div>
        <br>
        <div class="container">
            @if (session()->has('message'))
            <p class="alert alert-info">
                {{ session()->get('message') }}
            </p>
        @endif
        </div>
       
        <div id="content">
            @if (count($posts) >0)
            @foreach ($posts as $item)
            <div class="container custom-container">
               
                <div class="row">
                    <div class="col-md-12">
                        <h1>{!! $item->title !!}</h1>
                        <small>{!! date('d F, Y', strtotime($item->created_at))  !!}</small>
                    </div>
                    <div class="col-md-12 ">
                        <p class="lead">{!! Str::limit($item->body, 100) !!}</p>
                    </div>
                    <div class="col-md-12">
                       <a href="/posts/{{ $item->id }}" class="btn btn-secondary btn-sm link">Read more</a>
                    </div>
                </div>
            </div>
                @endforeach
                <div class="container custom-container pagination">
                        {{ $posts->links('pagination::bootstrap-4') }}
                </div>
                @else
                    <p>No data is uploaded</p>
                @endif
        </div>
    
    @endsection