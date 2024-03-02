<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\Profi;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $industries = Industry::where('isActive', 1)->get();
        $profis = Profi::where('isActive', 1)->get();
        return view('client.index', compact('industries','profis'));
    }
}
