<?php

namespace App\Http\Controllers\Home\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TehranController extends Controller
{
    public function index()
    {
        return view('home.cities.tehran.index');
    }

    public function espinas()
    {
        return view('home.cities.tehran.espinas');
    }

    public function parsyan()
    {
        return view('home.cities.tehran.parsyan');
    }

    public function palas()
    {
        return view('home.cities.tehran.palas');
    }
}
