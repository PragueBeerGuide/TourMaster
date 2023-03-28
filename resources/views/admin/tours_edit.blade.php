@extends('layouts.main')

@section('content')

<div class="card push-top">
  <div class="card-header">
    Edit tour: {{  $tour->name  }}
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('tours.update', $tour->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="Name">Name</label>
              <input type="text" class="form-control" name="Name" value="{{ $tour->name }}"/>
          </div>
          <div class="form-group">
              <label for="private">Last name</label>
              <input type="text" class="form-control" name="private" value="{{ $tour->private }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update tour info</button>
      </form>
  </div>
</div>

@endsection