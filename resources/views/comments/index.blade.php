@extends('layouts.main')

@section('content')
  <div class="container">
      <ul>
          
        {{-- @dd($comments) --}}

        @foreach($comments as $comment)
        @dd($comment);

        @endforeach

      </ul>
  </div>
@endsection
  