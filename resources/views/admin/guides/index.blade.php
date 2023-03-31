@extends('layouts.main')

@section('content')
  <div class="row">
    <a href="/home" class="btn btn-sm btn-info col-sm-2 mx-5" role="button">Go back</a>
  </div>
  <div>
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
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
                  <a href="{{ route('guides.edit', $guides->id)}}" class="btn btn-primary btn-sm">Edit</a>
                  <form action="{{ route('guides.destroy', $guides->id)}}" method="post" style="display: inline-block">
                      @csrf
                      @method('DELETE')
                      <button 
                        class="btn btn-danger btn-sm" 
                        type="submit" 
                        onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"
                      >
                      Delete
                      </button>
                    </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  <div>
  <div class="row">
    <a href="/guides/create" class="btn btn-sm btn-info col-sm-2 mx-5" role="button">Add new guide</a>
  </div>
@endsection