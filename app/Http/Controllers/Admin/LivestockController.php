<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class LivestockController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        return view('admin.livestock.index');
    }
}
