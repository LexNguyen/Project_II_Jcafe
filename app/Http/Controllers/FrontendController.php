<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function showHome(Request $request)
    {
        return view('index');
    }
}
