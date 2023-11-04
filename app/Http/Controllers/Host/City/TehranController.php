<?php

namespace App\Http\Controllers\Host\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TehranController extends Controller
{
    public function index()
    {
        return view('host.cities.tehran.index');
    }

    public function espinas()
    {
        return view('host.cities.tehran.espinas');
    }

    public function parsyan()
    {
        return view('host.cities.tehran.parsyan');
    }

    public function palas()
    {
        return view('host.cities.tehran.palas');
    }
}
