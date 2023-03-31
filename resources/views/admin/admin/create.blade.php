@extends('layouts.main')

@section('content')

<div>
  <div class="card-header">
    Add new admin
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('admins.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password"/>
        </div>
          <div class="form-group">
            <label for="permission_id">Permission</label>
            <input type="text" class="form-control" name="permission_id"/>
        </div>
          <button type="submit" class="btn btn-block btn-danger">Create new admin</button>
      </form>
  </div>
</div>
@endsection