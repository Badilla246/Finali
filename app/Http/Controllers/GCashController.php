<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GCashController extends Controller
{
    public function index()
    {
        return view('gcash');
    }
}
