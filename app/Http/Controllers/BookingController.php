<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Customer;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = Booking::all();
        return view('admin.bookings_index', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.bookings_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
        ]);
        $booking = Booking::create($storeData);
        return redirect('/bookings')->with('success', 'New booking has been saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $booking = Booking::findOrFail($id);
        return view('admin.bookings_edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
        ]);
        Booking::whereId($id)->update($updateData);
        return redirect('/bookings')->with('success', 'booking has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect('/bookings')->with('danger', 'booking has been deleted');
    }

    public function CustomerCreate(Request $request)
    {
        $customer = Customer::where('email', $request->customerEmail)->firstOrFail();

        $request->validate([
            'eventId' => 'required|max:255',
            'count' => 'required|max:255',
        ]);

        $booking = Booking::create([
            'customer_id' => $customer->id,
            'event_id'    => $request->eventId,
            'num_of_pax'  => $request->count,
            'extra_hotel_pick_up' => 0,
            'extra_drink_package'  => 0,
        ]);

        return response()->json($booking);
    }
}
