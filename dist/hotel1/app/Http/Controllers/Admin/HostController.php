<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Host;
use Illuminate\Http\Request;

class HostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hosts = Host::paginate(20);
        return view('admin.hosts.all', compact('hosts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hosts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'kodemeli' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        Host::create($data);

        return redirect(route('admin.hosts.index'));
    }
}
