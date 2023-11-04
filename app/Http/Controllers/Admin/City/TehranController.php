<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TehranController extends Controller
{
    public function index()
    {
        return view('admin.cities.tehran.index');
    }

    public function espinas()
    {
        return view('admin.cities.tehran.espinas');
    }

    public function parsyan()
    {
        return view('admin.cities.tehran.parsyan');
    }

    public function palas()
    {
        return view('admin.cities.tehran.palas');
    }
}
