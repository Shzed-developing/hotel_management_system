<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KishController extends Controller
{
    public function index()
    {
        return view('admin.cities.kish.index');
    }

    public function panorama()
    {
        return view('admin.cities.kish.panorama');
    }

    public function shayan()
    {
        return view('admin.cities.kish.shayan');
    }

    public function shayegan()
    {
        return view('admin.cities.kish.shayegan');
    }
}
