<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('host.hotels.list-order');
    }

    public function cashhostindex()
    {
        return view('host.hotels.list-cashhost');
    }
}
