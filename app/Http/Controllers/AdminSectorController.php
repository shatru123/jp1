<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSectorController extends Controller
{
    //
    public function index()
    {
        return view('admin.sectors.index');
    }
}
