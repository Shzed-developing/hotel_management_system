<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IsfahanController extends Controller
{
    public function index()
    {
        return view('admin.cities.isfahan.index');
    }

    public function kosar()
    {
        return view('admin.cities.isfahan.kosar');
    }

    public function pirozi()
    {
        return view('admin.cities.isfahan.pirozi');
    }

    public function toloe()
    {
        return view('admin.cities.isfahan.toloe');
    }
}
