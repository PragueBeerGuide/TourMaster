@extends('layouts.main')

@section('content')

@php

    $users = DB::table('users')->get();

@endphp

@if ($user->permission_id === 1)
    @foreach ($users as $currentUser)
        @if ($currentUser->permission_id === 1)
            @continue
        @endif
        <div>
            <li>{{ $currentUser->name }}</li>
            <li>{{ $currentUser->email }}</li>
            <li>{{ !$currentUser->permission_id ? 'Null' : $currentUser->permission_id }}</li>
            <button onclick="window.location.href='{{route('show-admin', ['id' => $currentUser->id])}}'">Edit</button>
        </div>
    @endforeach
@endif

@if ($user->permission_id === 2)
    @foreach ($users as $currentUser)
        @if ($currentUser->permission_id === 1 || $currentUser->permission_id === 2)
            @continue
        @endif
        <div>
            <li>{{ $currentUser->name }}</li>
            <li>{{ $currentUser->email }}</li>
            <li>{{ !$currentUser->permission_id ? 'Null' : $currentUser->permission_id }}</li>
            <button onclick="window.location.href='{{route('show-admin', ['id' => $currentUser->id])}}'">Edit</button>
        </div>
    @endforeach
@endif

<form action="{{ route('logout') }}" method="post">
 
    @csrf
 
    <button>Logout</button>
 
</form>


@endsection
