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
            <td>name</td>
            <td>email</td>
            <td>permission</td>
            <td class="text-center">Action</td>
          </tr>
      </thead>
      <tbody>
          @foreach($admins as $admin)
          <tr>
              <td>{{$admin->id}}</td>
              <td>{{$admin->name}}</td>
              <td>{{$admin->email}}</td>
              <td>{{$admin->permission->name}}</td>
              <td class="text-center">
                  <a href="{{ route('admins.edit', $admin->id)}}" class="btn btn-primary btn-sm">Edit</a>
                  <form action="{{ route('admins.destroy', $admin->id)}}" method="post" style="display: inline-block">
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
    <a href="/admins/create" class="btn btn-sm btn-info col-sm-2 mx-5" role="button">Add new admin</a>
  </div>
@endsection