<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merchandise = Merchandise::all();
        return view('admin.merchandises_index', compact('merchandise'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.merchandises_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
        ]);
        $merchandise = Merchandise::create($storeData);
        return redirect('/merchandises')->with('success', 'New merchandise has been saved');
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
        $merchandise = Merchandise::findOrFail($id);
        return view('admin.merchandises_edit', compact('merchandise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
        ]);
        Merchandise::whereId($id)->update($updateData);
        return redirect('/merchandises')->with('success', 'Merchandise has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $merchandise = Merchandise::findOrFail($id);
        $merchandise -> delete();
        return redirect('/merchandises')->with('danger', 'Merchandise has been deleted');
    }
}

