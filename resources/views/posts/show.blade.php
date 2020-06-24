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

<div class="container text-center">
    <h1 class="m-5">{{$post->title }}</h1>

    <p>{{$post->body }}</p>

</div>


@endsection
   