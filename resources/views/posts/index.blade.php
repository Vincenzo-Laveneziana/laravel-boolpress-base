@extends('layouts.main')

@section('content')
    @if (session('post-deleted'))
        <div class="alert alert-success">
            <p>Il post è stato eliminato correttamente</p>
            {{session('post-deleted')}}
        </div>
    @endif

   <h2 class="text-center m-5">Post archive</h2>
  
   @foreach ($posts as $post)
    <article class="container">
        
        
        <h6>{{ $post->id }}</h6>
        <h2>{{ $post->title }}</h2>
        <h4 class="author">{{ $post->user->name }}</h4>
        <h4>Created: {{ $post->created_at }} , Last updated: {{ $post->updated_at }}</h4>
        <p>{{ $post->body }}</p>
        {{--  @dd($comments) --}}
        <a href="{{ route('posts.show', $post->slug)}}">Read more</a>
        
        {{-- @foreach ($post->comments as $comment)
        
            <p>--{{$comment->body}}</p>
            
        @endforeach --}}
    </article>


    @if (! $loop->last)
        <hr>
    @endif
   @endforeach
    <div class="container m-5 d-flex flex-column justify-content-around align-items-center">
        <button class="btn btn-primary btn-sm m-5">
            <a class=" p-0 text-white" href="{{ route('posts.create')}}">Create Posts</a>
        </button>
        {{$posts->links()}}
    </div>
@endsection
   