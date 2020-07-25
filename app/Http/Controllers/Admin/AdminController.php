<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public $admin;

    public function __construct()
    {
    }

    public function index()
    {
        $admin = Auth::user();
        return view('admin.index', compact('admin'));
    }
}
