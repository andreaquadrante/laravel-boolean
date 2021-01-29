@extends('layouts.main')

@section('content')
    <div class="users-container">
        @foreach ($users_data as $user)
            <div class="user">
                <img src="{{$user->image}}" alt="Picture">
                <h3>{{$user->first_name }}{{$user->last_name}}</h3>
                <span>{{$user->email}}</span>
                <span>{{$user->gender}}</span>
            </div>
        @endforeach
    </div>
@endsection