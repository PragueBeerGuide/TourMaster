@extends('layouts.main')

@section('content')

<div>
  <div class="card-header">
    Add new booking
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('bookings.store') }}">
          <div class="form-group">
              @csrf
              <label for="customer_id">Customer</label>
              <input type="text" class="form-control" name="customer_id"/>
          </div>
          <div class="form-group">
              <label for="event_id">Event</label>
              <input type="text" class="form-control" name="event_id"/>
          </div>
          <div class="form-group">
            <label for="num_of_pax">Number of participants</label>
            <input type="text" class="form-control" name="num_of_pax"/>
        </div>
        <div class="form-group">
          <strong>Extras:</strong>
          <br>
          <label for="extra_hotel_pick_up">Hotel pick-up</label>
          <input type="checkbox" class="form-control" name="extra_hotel_pick_up"/>
          <label for="extra_drink_package">Drink package</label>
          <input type="checkbox" class="form-control" name="extra_drink_package"/>
        </div>
          <button type="submit" class="btn btn-block btn-danger">Create new booking</button>
      </form>
  </div>
</div>
@endsection