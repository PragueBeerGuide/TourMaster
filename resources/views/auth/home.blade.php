@extends('layouts.main')

@section('content')

    <div id='root'></div>

    @viteReactRefresh
    @vite('resources/js/src/main.jsx')

@endsection