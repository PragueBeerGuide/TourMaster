<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = User::all();
        return view('admin.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'permission_id' => 'required|max:255'
        ]);
        $permission = Permission::where('name', $storeData['permission_id'])->get();
        $storeData['password'] = Hash::make($storeData['password']);
        $storeData['permission_id'] = $permission[0]->id;
        $admin = User::create($storeData);
        return redirect('/admins')->with('success', 'New admin has been saved');
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
        $admin = User::findOrFail($id);
        return view('admin.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'permission_id' => 'required|max:255'
        ]);
        $permission = Permission::where('name', $updateData['permission_id'])->get();
        $updateData['permission_id'] = $permission[0]->id;
        User::whereId($id)->update($updateData);
        return redirect('/admins')->with('success', 'Admin has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();
        return redirect('/admins')->with('danger', 'Admin has been deleted');
    }
}
