@extends('layouts.main')

@section('content')

<style>
    .push-top {
      margin-top: 50px;
    }
  </style>
  <div class="push-top">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
    <table class="table">
      <thead>
          <tr class="table-warning">
            <td>ID</td>
            <td>First name</td>
            <td>Last name</td>
            <td class="text-center">Action</td>
          </tr>
      </thead>
      <tbody>
          @foreach($guide as $guides)
          <tr>
              <td>{{$guides->id}}</td>
              <td>{{$guides->first_name}}</td>
              <td>{{$guides->last_name}}</td>
              <td class="text-center">
                  <a href="{{ route('guides.edit', $guides->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                  <form action="{{ route('guides.destroy', $guides->id)}}" method="post" style="display: inline-block">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                    </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  <div>
@endsection