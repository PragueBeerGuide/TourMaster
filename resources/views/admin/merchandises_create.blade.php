@extends('layouts.main')

@section('content')

<div>
  <div class="card-header">
    Add new merchandise
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('merchandises.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create new merchandise</button>
      </form>
  </div>
</div>
@endsection