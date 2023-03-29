@extends('layouts.main')

@section('content')

  <div>
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif

    <table class="table">
      <thead>
          <tr class="table-warning">
            <td>ID</td>
            <td>Customer</td>
            <td>Event</td>
            <td>Participants</td>
            <td>Extra hotel pick</td>
            <td>Extra drink package</td>
            <td>Merchandise</td>
            <td class="text-center">Action</td>
          </tr>
      </thead>
      <tbody>
          @foreach($booking as $bookings)
          <tr>
              <td>{{$bookings->id}}</td>
              <td>{{$bookings->customer->name}}</td>
              <td>{{$bookings->event_id}}</td>
              <td>{{$bookings->num_of_pax}}</td>
              <td>{{$bookings->extra_hotel_pick_up}}</td>
              <td>{{$bookings->extra_drink_package}}</td>
              <td>{{$bookings->merchandise_id}}</td>
              <td class="text-center">
                  <a href="{{ route('bookings.edit', $bookings->id)}}" class="btn btn-primary btn-sm">Edit</a>
                  <form action="{{ route('bookings.destroy', $bookings->id)}}" method="post" style="display: inline-block">
                      @csrf
                      @method('DELETE')
                      <button 
                        class="btn btn-danger btn-sm" 
                        type="submit" 
                        onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"
                      >
                      Delete
                      </button>
                    </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  <div>
  <div class="row">
    <a href="/bookings/create" class="btn btn-sm btn-info col-sm-2 mx-5" role="button">Add new booking</a>
  </div>
@endsection