<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShirazController extends Controller
{
    public function index()
    {
        return view('admin.cities.shiraz.index');
    }

    public function zandye()
    {
        return view('admin.cities.shiraz.zandye');
    }

    public function bh()
    {
        return view('admin.cities.shiraz.bh');
    }

    public function chamran()
    {
        return view('admin.cities.shiraz.chamran');
    }
}
