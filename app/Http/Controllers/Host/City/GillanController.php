<?php

namespace App\Http\Controllers\Host\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GillanController extends Controller
{
    public function index()
    {
        return view('host.cities.gillan.index');
    }

    public function jahan()
    {
        return view('host.cities.gillan.jahan');
    }

    public function pamchal()
    {
        return view('host.cities.gillan.pamchal');
    }

    public function arka()
    {
        return view('host.cities.gillan.arka');
    }
}
