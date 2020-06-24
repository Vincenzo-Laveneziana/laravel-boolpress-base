{{-- @extends('layouts.main')

@section('content')

<div class="container text-center">

    <h1>{{ $post->title }}</h1>
    <h3>{{ $post->user->name }}</h3>
    <p>{{ $post->body }}</p>
    <hr>
    <h4>Comments</h4>
    <ul class="text-left">     
       @foreach ($comments as $comment)
      
        <p>--{{$comment->body}}</p>
       @endforeach
    </ul>
</div>

@endsection --}}
   
@extends('layouts.main')

@section('content')

<div class="container">
    <h1 class="mt-5 mb-5">{{$post->title }}</h1>
    <p>{{$post->body }}</p>
    <a class="btn btn-sm btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
    <form class="d-inline" action="{{route('posts.destroy', $post->id)}}" method="POST">
        @csrf
        @method('DELETE')

        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
    </form>


    

    <section class="mt-5 text-center">
         <h4>Tags</h4>

         @forelse ($post->tags as $tag)
            <span class="badge bage-pill badge-primary">{{$tag->name}}</span>
         @empty
            <span class="badge bage-pill badge-primary">No actual tags fot this post</span>
         @endforelse
    </section>

</div>


@endsection
   