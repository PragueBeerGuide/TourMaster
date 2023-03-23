<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show(int $id)
    {
        $user = User::find($id);

        return view(
            'admin.show_admin',
            compact('user')
        );
    }

    public function store(Request $request, int $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required | numeric'
        ]);

        $user = User::find($id);
        $user->name = $request->post('name');
        $user->permission_id = $request->post('permission');
        $user->save();

        session()->flash('success_message', 'Admin has been successfully saved');

        return redirect()->route('show-admin', ['id' => $id]);
    }
}
