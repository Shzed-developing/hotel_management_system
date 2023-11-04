<?php

namespace App\Http\Controllers\Home\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MashhadController extends Controller
{
    public function index()
    {
        return view('home.cities.mashhad.index');
    }

    public function darvishi()
    {
        return view('home.cities.mashhad.darvishi');
    }

    public function almas()
    {
        return view('home.cities.mashhad.almas');
    }

    public function boshra()
    {
        return view('home.cities.mashhad.boshra');
    }
}
