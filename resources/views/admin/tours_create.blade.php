@extends('layouts.main')

@section('content')

<div>
  <div class="card-header">
    Add new tour
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('tours.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="is_private">PVT</label>
              <input type="checkbox" class="form-control" name="is_private" />
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create new tour</button>
      </form>
  </div>
</div>
@endsection