<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Guide;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guide = Guide::all();
        return view('admin.index', compact('guide'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
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
        $guide = Guide::create($storeData);
        return redirect('/guides')->with('completed', 'Guide has been saved');
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
        $guide = Guide::findOrFail($id);
        return view('admin.edit', compact('guide'));
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
        Guide::whereId($id)->update('updateData');
        return redirect('/guides')->with('completed', 'Guide has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guide = Guide::findOrFail($id);
        $guide -> delete();
        return redirect('/guides')->with('completed', 'Guide has been deleted');

    }
}
