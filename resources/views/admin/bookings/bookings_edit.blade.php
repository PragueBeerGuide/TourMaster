@extends('layouts.main')

@section('content')

<div class="card push-top">
  <div class="card-header row">
    <div class="col-sm-4">Edit booking:</div>
    <a href="/bookings" class="btn btn-sm btn-info col-sm-2" role="button">Go back</a>
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('bookings.update', $booking->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="customer_id">Customer</label>
              <input type="text" class="form-control" name="customer_id" value="{{ $booking->customer_id }}"/>
          </div>
          <div class="form-group">
              <label for="event_id">Event</label>
              <input type="text" class="form-control" name="event_id" value="{{ $booking->event_id }}"/>
          </div>
          <div class="form-group">
            <strong>Extras:</strong>
            <br>
            <label for="extra_hotel_pick_up">Hotel pick-up</label>
            <input type="checkbox" class="form-control" name="extra_hotel_pick_up"/>
            <label for="extra_drink_package">Drink package</label>
            <input type="checkbox" class="form-control" name="extra_drink_package"/>
            <label for="merchandise_id">Merchandise</label>
              <input type="text" class="form-control" name="merchandise_id" value="{{ $booking->merchandise_id }}"/>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">Extras</div>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                  Hotel pick-up
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                  Drink package
                </label>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update booking info</button>
      </form>
  </div>
</div>

@endsection