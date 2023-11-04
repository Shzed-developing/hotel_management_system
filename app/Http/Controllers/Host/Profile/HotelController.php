<?php

namespace App\Http\Controllers\Host\Profile;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::paginate(20);
        return view('host.profile.hotels.all', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('host.profile.hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Hotel $hotel)
    {
        $validData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'city' => 'required',
            'price' => 'required',
            'license' => 'required',
            'capacity' => 'required',
            'description' => 'required',
            'address' => 'required',
            'approved' => 'required'
        ]);

        $file = $request->file('license');
        $destinationPath = '/img/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destinationPath) , $file->getClientOriginalName());

        $validData['license'] = $destinationPath . $file->getClientOriginalName();

        Hotel::create($validData);

        return redirect(route('host.hotel.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        return view('host.profile.hotels.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        $validData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'city' => 'required',
            'price' => 'required',
            'capacity' => 'required',
            'description' => 'required',
            'address' => 'required',
            'approved' => 'required'
        ]);

        $file = $request->file('license');
        $destinationPath = '/img/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destinationPath) , $file->getClientOriginalName());

        $validData['license'] = $destinationPath . $file->getClientOriginalName();

        $hotel->update($validData);

        return redirect(route('host.hotel.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return back();
    }
}
