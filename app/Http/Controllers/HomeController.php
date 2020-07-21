<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function search(Request $request)
    {
        $search = $request->get('key');
        return view('search', compact('search'));
    }
}
