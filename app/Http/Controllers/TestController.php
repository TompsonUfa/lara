<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function show()
    {
        $tests = Test::all();
        return view('main', ['tests' => $tests]);
    }
}
