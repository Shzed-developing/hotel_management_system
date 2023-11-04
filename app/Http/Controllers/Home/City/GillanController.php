<?php

namespace App\Http\Controllers\Home\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GillanController extends Controller
{
    public function index()
    {
        return view('home.cities.gillan.index');
    }

    public function jahan()
    {
        return view('home.cities.gillan.jahan');
    }

    public function pamchal()
    {
        return view('home.cities.gillan.pamchal');
    }

    public function arka()
    {
        return view('home.cities.gillan.arka');
    }
}
