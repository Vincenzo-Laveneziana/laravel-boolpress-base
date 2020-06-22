@extends('layouts.main')

@section('content')
    <h2 class="text-center m-5" >Archive </h2>

    @foreach ($users as $user)
        <div class="user text-center container">
            <h2>{{$user->name}}</h2>
            <h5>{{$user->email}}</h5>
            
            <img src="{{$user->info['avatar']}}" alt="{{$user->name}}">
            <h5>{{$user->info['address']}}</h5>
            <h5>{{$user->info->phone}}</h5>

            <h4>Post</h4>
            
            <ul class="text-left">
                @foreach ($user->posts as $post)
                    <li>
                        <h5>{{$post->title}}</h5>
                        <p>{{$post->body}}</p>
                    </li>
                @endforeach
            </ul>
        </div>

        @if (! $loop->last)
            <hr>
        @endif

    @endforeach
@endsection
   