<?php

namespace App\Http\Controllers\Host\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IsfahanController extends Controller
{
    public function index()
    {
        return view('host.cities.isfahan.index');
    }

    public function kosar()
    {
        return view('host.cities.isfahan.kosar');
    }

    public function pirozi()
    {
        return view('host.cities.isfahan.pirozi');
    }

    public function toloe()
    {
        return view('host.cities.isfahan.toloe');
    }
}
