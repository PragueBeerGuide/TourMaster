@extends('layouts.main')

@section('content')

<div>
  <div class="card-header">
    Add new guide
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('guides.store') }}">
          <div class="form-group">
              @csrf
              <label for="first_name">Fist name</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>
          <div class="form-group">
              <label for="last_name">Last name</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create new guide</button>
      </form>
  </div>
</div>
@endsection