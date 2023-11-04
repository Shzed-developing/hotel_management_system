<?php

namespace App\Http\Controllers\Home\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KishController extends Controller
{
    public function index()
    {
        return view('home.cities.kish.index');
    }

    public function panorama()
    {
        return view('home.cities.kish.panorama');
    }

    public function shayan()
    {
        return view('home.cities.kish.shayan');
    }

    public function shayegan()
    {
        return view('home.cities.kish.shayegan');
    }
}
