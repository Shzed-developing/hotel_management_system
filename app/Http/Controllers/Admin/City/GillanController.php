<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GillanController extends Controller
{
    public function index()
    {
        return view('admin.cities.gillan.index');
    }

    public function jahan()
    {
        return view('admin.cities.gillan.jahan');
    }

    public function pamchal()
    {
        return view('admin.cities.gillan.pamchal');
    }

    public function arka()
    {
        return view('admin.cities.gillan.arka');
    }
}
