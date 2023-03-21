<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    public function front()
    {
        return view('index.index');
    }
}
