<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function allEvents()
    {
        $data = Event::all();

        return response()->json($data);
    }

    public function events($tourId, $date)
    {
        $data = Event::query()
            ->whereDate('start', $date)
            ->where('tour_id', $tourId)
            ->get();

        return response()->json($data);
    }

    public function action(Request $request)
    {
        if ($request->type == 'add') {
            $event = Event::create([
                'title'     => $request->title,
                'start'     => $request->start,
                'end'       => $request->end,
                'price'     => $request->price,
                'capacity'  => $request->capacity,
                'tour_id'   => $request->tour_id
            ]);

            return response()->json($event);
        }

        if ($request->type == 'update') {
            $event = Event::find($request->id)->update([
                'title'     => $request->title,
                'start'     => $request->start,
                'end'       => $request->end,
                'price'     => $request->price,
                'capacity'  => $request->capacity,
                'tour_id'   => $request->tour_id
            ]);

            return response()->json($event);
        }

        if ($request->type == 'delete') {
            $event = Event::find($request->id)->delete();

            return response()->json($event);
        }

        if ($request->type == 'increaseNumberOfCustomers') {
            $event = Event::findOrFail($request->id);
            $event->capacity += $request->count;
            $event->save();
        }
    }
}
