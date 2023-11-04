<?php

namespace App\Http\Controllers\Host\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KishController extends Controller
{
    public function index()
    {
        return view('host.cities.kish.index');
    }

    public function panorama()
    {
        return view('host.cities.kish.panorama');
    }

    public function shayan()
    {
        return view('host.cities.kish.shayan');
    }

    public function shayegan()
    {
        return view('host.cities.kish.shayegan');
    }
}
