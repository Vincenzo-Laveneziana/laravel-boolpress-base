@extends('layouts.main')

@section('content')
    <h2 class="text-center m-5" >Archive </h2>

    @foreach ($users as $user)
        <div class="user text-center">
            <h2>{{$user->name}}</h2>
            <h5>{{$user->email}}</h5>
            
        </div>

        @if (! $loop->last)
            <hr>
        @endif

    @endforeach
@endsection
   