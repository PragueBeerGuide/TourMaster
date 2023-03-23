@extends('layouts.main')

@section('content')

<form action="{{ route('store-admin', ['id' => $user->id]) }}" method="post">

    @csrf
    Name:<br>
    <input type="name" name="name" value="{{ $user->name }}"><br>
    <br>


    Permission:<br>
    <input type="permission" name="permission" value="{{ $user->permission_id }}"><br>
    <br>

    <button>Edit</button>

</form>

@endsection