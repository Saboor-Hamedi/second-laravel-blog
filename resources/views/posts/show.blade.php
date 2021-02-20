
    @extends('layouts.main')
    @section('content')
        <div class="container mt-5">
            <div class="d-flex flex-column comment-section">
                <div class="gb-white p-2">
                    <div class="d-flex flex-row user-info">
                       {{-- title --}}
                        <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                        <div class="d-flex flex-column justify-content-start ml-2">
                            <span class="d-block font-weight-bold name"><h3>{{ $post->title }}</h3></span>
                            <span class="date text-black-50">Shared On  - <small>{!! date('l jS F Y', strtotime($post->created_at))  !!}</small></span>
                        </div>
                    </div>
                    {{-- body --}}
                    <div class="">
                        <p class="comment-text">
                            {!! $post->body !!}
                        </p>
                    </div>
                </div>
                {{-- like section --}}
                
                {{-- comment --}}
                <div class="gb-white">
                    <div class="d-flex flex-row">
                       
                        <div class="like cursor">
                            <i class="far fa-thumbs-up"></i>
                            <span class="ml-1">Like</span>

                        </div>
                       <div class="like ml-2">
                        @foreach ($post->Likes as $like)
                            @if($post->id == $like->post_id)
                            {{ $like->post_likes }}
                            @endif
                         @endforeach
                       </div>
                    </div>
                    <hr>
                    <div class="p-2">
                        @forelse ($post->postModels as $item)
                        {{ $item['comment'] }}
                        @empty  
                            <p>No comment</p>
                        @endforelse
                    
                    </div>
                </div>
                {{-- end comment --}}
            </div>
            <hr>
            <div class="d-flex  p-1 mt-5">
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary btn-sm link" type="button">Update</a>
                {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id ], 'method' => 'POST', 'class'=> 'pull-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm link ml-1']) }}
               {!! Form::close() !!}
            </div>
        </div>

        
    @endsection