<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function action(Request $request)
    {
        if ($request->type == 'add') {

            $user = Customer::create([
                'name'  => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            return response()->json($user);
        }
        if ($request->type == 'update') {
            $user = Customer::find($request->id)->update([
                'name'  => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            return response()->json($user);
        }
        if ($request->type == 'delete') {

            $user = Customer::find($request->id)->delete();

            return response()->json($user);
        }
    }
}
