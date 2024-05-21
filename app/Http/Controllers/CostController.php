<?php

namespace App\Http\Controllers;

use App\Models\Cost;

class CostController extends Controller
{
    public function index()
    {
        $costs = Cost::all();
        return view('Cost', compact('costs'));
    }
}
