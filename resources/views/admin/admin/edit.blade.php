@extends('layouts.main')

@section('content')

<div class="card push-top">
  <div class="card-header row">
    <div class="col-sm-4">Edit Admin:</div>
    <a href="/admins" class="btn btn-sm btn-info col-sm-2" role="button">Go back</a>
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('admins.update', $admin->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $admin->name }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="{{ $admin->email }}"/>
          </div>
          <div class="form-group">
            <label for="permission_id">Permission</label>
            <input type="text" class="form-control" name="permission_id" value="{{ $admin->permission->name }}"/>
        </div>
          <button type="submit" class="btn btn-block btn-danger">Update admin info</button>
      </form>
  </div>
</div>

@endsection