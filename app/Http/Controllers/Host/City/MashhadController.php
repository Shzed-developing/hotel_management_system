<?php

namespace App\Http\Controllers\Host\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MashhadController extends Controller
{
    public function index()
    {
        return view('host.cities.mashhad.index');
    }

    public function darvishi()
    {
        return view('host.cities.mashhad.darvishi');
    }

    public function almas()
    {
        return view('host.cities.mashhad.almas');
    }

    public function boshra()
    {
        return view('host.cities.mashhad.boshra');
    }
}
