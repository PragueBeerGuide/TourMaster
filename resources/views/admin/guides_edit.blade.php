@extends('layouts.main')

@section('content')

<style>
  .container {
    max-width: 450px;
  }
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="card push-top">
  <div class="card-header">
    Edit guide: {{  $guide->first_name  }} {{  $guide->last_name  }}
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('guides.update', $guide->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="first_name">First name</label>
              <input type="text" class="form-control" name="first_name" value="{{ $guide->first_name }}"/>
          </div>
          <div class="form-group">
              <label for="last_name">Last name</label>
              <input type="text" class="form-control" name="last_name" value="{{ $guide->last_name }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update guide info</button>
      </form>
  </div>
</div>

@endsection