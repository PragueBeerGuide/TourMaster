<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tours()
    {
        $tour = Tour::all();
        return response()->json($tour);
    }
    public function index()
    {
        $tour = Tour::all();
        return view('admin.tours.index', compact('tour'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->name;
        $request->title;
        $request->description;
        $request->highlights;
        $request->meeting_point;
        $request->inclusions;
        $request->image_link;
        $request->boolean( key:'is_private');
        
        $tour = Tour::create($request->all());
        return redirect('/tours')->with('success', 'New tour has been saved');
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
        $tour = Tour::findOrFail($id);
        return view('admin.tours.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->name;
        $request->title;
        $request->description;
        $request->highlights;
        $request->meeting_point;
        $request->inclusions;
        $request->image_link;
        $request->boolean( key:'is_private');

        Tour::whereId($id)->update($request->all());
        return redirect('/tours')->with('success', 'Tour has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tour = Tour::findOrFail($id);
        $tour->delete();
        return redirect('/tours')->with('danger', 'Tour has been deleted');
    }
}
