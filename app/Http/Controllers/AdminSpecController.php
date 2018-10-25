<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSpecController extends Controller
{
    //
    public function index()
    {
        return view('admin.specialization.index');
    }
}
