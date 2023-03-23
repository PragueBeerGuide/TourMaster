@extends('layouts.main')

@section('content')

<h1>Register</h1>

<form action="{{ route('register') }}" method="post">

    @csrf

    Name:<br>
    <input type="text" name="name" value="{{ old('name') }}"><br>
    <br>

    Email:<br>
    <input type="email" name="email" value="{{ old('email') }}"><br>
    <br>

    Password:<br>
    <input type="password" name="password" value=""><br>
    <br>

    Confirm password:<br>
    <input type="password" name="password_confirmation" value=""><br>
    <br>

    <button>Register</button>

</form>

@endsection