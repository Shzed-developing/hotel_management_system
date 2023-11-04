<?php

namespace App\Http\Controllers\Home\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShirazController extends Controller
{
    public function index()
    {
        return view('home.cities.shiraz.index');
    }

    public function zandye()
    {
        return view('home.cities.shiraz.zandye');
    }

    public function bh()
    {
        return view('home.cities.shiraz.bh');
    }

    public function chamran()
    {
        return view('home.cities.shiraz.chamran');
    }
}
