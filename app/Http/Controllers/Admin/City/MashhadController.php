<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MashhadController extends Controller
{
    public function index()
    {
        return view('admin.cities.mashhad.index');
    }

    public function darvishi()
    {
        return view('admin.cities.mashhad.darvishi');
    }

    public function almas()
    {
        return view('admin.cities.mashhad.almas');
    }

    public function boshra()
    {
        return view('admin.cities.mashhad.boshra');
    }
}
