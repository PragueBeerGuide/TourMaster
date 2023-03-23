@extends('layouts.main')

@section('content')

@php

    $users = DB::table('users')->get();

@endphp

@if ($user->permission_id === 1)
    @foreach ($users as $user)
    <div>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ !$user->permission_id ? 'Null' : $user->permission_id }}</li>
        <button onclick="window.location.href='{{route('show-admin', ['id' => $user->id])}}'">Edit</button>
    </div>
    @endforeach
@endif

<form action="{{ route('logout') }}" method="post">
 
    @csrf
 
    <button>Logout</button>
 
</form>


@endsection
