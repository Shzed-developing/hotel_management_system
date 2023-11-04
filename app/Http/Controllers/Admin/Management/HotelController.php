<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::paginate(20);
        return view('admin.management.hotels.all', compact('hotels'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        return view('admin.management.hotels.edit', compact('hotel'));
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
            'description' => 'required',
            'address' => 'required'
        ]);

        if($request->file('image')) {
            $request->validate([
                'license' => 'required|image'
            ]);
            if (File::exists(public_path($hotel->license)))
                File::delete(public_path($hotel->license));

            $file = $request->file('license');
            $destinationPath = '/licenseimg/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
            $file->move(public_path($destinationPath) , $file->getClientOriginalName());

            $validData['image'] = $destinationPath . $file->getClientOriginalName();
        }

        $hotel->update($validData);

        return redirect(route('admin.hotel.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect(route('admin.hotel.index'));
    }
}
