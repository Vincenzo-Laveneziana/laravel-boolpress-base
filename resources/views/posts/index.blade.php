@extends('layouts.main')

@section('content')
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
    <div class="container m-5 d-flex justify-content-center">
        {{$posts->links()}}
    </div>
@endsection
   