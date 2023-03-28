@extends('layouts.main')

@section('content')

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
            <td>PVT</td>
            <td class="text-center">Action</td>
          </tr>
      </thead>
      <tbody>
          @foreach($tour as $tours)
          <tr>
              <td>{{$tours->id}}</td>
              <td>{{$tours->name}}</td>
              <td>{{$tours->private}}</td>
              <td class="text-center">
                  <a href="{{ route('tours.edit', $tours->id)}}" class="btn btn-primary btn-sm">Edit</a>
                  <form action="{{ route('tours.destroy', $tours->id)}}" method="post" style="display: inline-block">
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
    <a href="/tours/create" class="btn btn-sm btn-info col-sm-2 mx-5" role="button">Add new tour</a>
  </div>
@endsection