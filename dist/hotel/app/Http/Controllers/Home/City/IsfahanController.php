<?php

namespace App\Http\Controllers\Home\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IsfahanController extends Controller
{
    public function index()
    {
        return view('home.cities.isfahan.index');
    }

    public function kosar()
    {
        return view('home.cities.isfahan.kosar');
    }

    public function pirozi()
    {
        return view('home.cities.isfahan.pirozi');
    }

    public function toloe()
    {
        return view('home.cities.isfahan.toloe');
    }
}
