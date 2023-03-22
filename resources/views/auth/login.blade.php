@extends('layouts.main')

@section('content')

<h1>Login</h1>

<form action="{{ route('login') }}" method="post">

    @csrf

    Email:<br>
    <input type="email" name="email" value="{{ old('email') }}"><br>
    <br>

    Password:<br>
    <input type="password" name="password" value=""><br>
    <br>

    <button>Login</button>

</form>

@endsection