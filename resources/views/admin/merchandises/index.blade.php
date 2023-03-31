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
            <td>Name</td>
            <td class="text-center">Action</td>
          </tr>
      </thead>
      <tbody>
          @foreach($merchandise as $merchandises)
          <tr>
              <td>{{$merchandises->id}}</td>
              <td>{{$merchandises->name}}</td>
              <td class="text-center">
                  <a href="{{ route('merchandises.edit', $merchandises->id)}}" class="btn btn-primary btn-sm">Edit</a>
                  <form action="{{ route('merchandises.destroy', $merchandises->id)}}" method="post" style="display: inline-block">
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
    <a href="/merchandises/create" class="btn btn-sm btn-info col-sm-2 mx-5" role="button">Add new merchandise</a>
  </div>
@endsection