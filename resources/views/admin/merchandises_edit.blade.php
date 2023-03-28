@extends('layouts.main')

@section('content')

<div class="card push-top">
  <div class="card-header">
    Edit merchandise: {{  $merchandise->name  }}
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('merchandises.update', $merchandise->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $merchandise->name }}"/>
          </div>
  
          <button type="submit" class="btn btn-block btn-danger">Update merchandise info</button>
      </form>
  </div>
</div>

@endsection