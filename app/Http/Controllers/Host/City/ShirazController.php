<?php

namespace App\Http\Controllers\Host\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShirazController extends Controller
{
    public function index()
    {
        return view('host.cities.shiraz.index');
    }

    public function zandye()
    {
        return view('host.cities.shiraz.zandye');
    }

    public function bh()
    {
        return view('host.cities.shiraz.bh');
    }

    public function chamran()
    {
        return view('host.cities.shiraz.chamran');
    }
}
