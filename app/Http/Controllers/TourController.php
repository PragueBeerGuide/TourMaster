<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tour = Tour::all();
        return view('admin.tours_index', compact('tour'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tours_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'is_private' => 'boolean',
        ]);
        $tour = Tour::create($storeData);
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
        return view('admin.tours_edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'is_private' => 'boolean',
        ]);
        Tour::whereId($id)->update($updateData);
        return redirect('/tours')->with('success', 'Tour has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tour = Tour::findOrFail($id);
        $tour -> delete();
        return redirect('/tours')->with('danger', 'Tour has been deleted');
    }
}
