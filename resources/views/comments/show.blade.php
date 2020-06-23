@extends('layouts.main')

@section('content')
  <div class="container">
      <ul>
           {{-- @foreach ($comments as $comment) 
            @dd($comments)
            @endforeach  --}}
            <p>--{{$comment->body}}</p>
          

      </ul>
  </div>
@endsection
   