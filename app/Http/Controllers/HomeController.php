<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $user = Auth::user();

        if ($request->ajax()) {
            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get([
                    'id',
                    'title',
                    'start',
                    'end',
                    'price',
                    'capacity',
                    'tour_id'
                ]);
            return response()->json($data);
        }

        return view('auth.home', compact(
            'user'
        ));
    }

    public function action(Request $request)
    {
        if ($request->ajax()) {
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
        }
    }
}
