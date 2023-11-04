<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use mysql_xdevapi\CollectionAdd;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::paginate(20);
        return view('admin.images.all', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'image' => 'required|image',
            'label' => 'required',
            'state' => 'required'
        ]);
        $file = $request->file('image');
        $destinationPath = '/image/' . now()->year . '/' . now()->month . '/' . now()->day;
        $file->move(public_path($destinationPath), $file->getClientOriginalName());

        $validData['image'] = $destinationPath . $file->getClientOriginalName();

        Image::create($validData);

        return redirect(route('admin.images.index'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        return view('admin.images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        $data = $request->validate([
            'image' => 'required|image',
            'label' => 'required',
            'state' => 'required'
        ]);

        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|image'
            ]);

            if (File::exists(public_path($image->image)))
                File::delete(public_path($image->image));

            $file = $request->file('image');
            $destinationPath = '/image/' . now()->year . '/' . now()->month . '/' . now()->day;
            $file->move(public_path($destinationPath), $file->getClientOriginalName());

            $data['image'] = $destinationPath . $file->getClientOriginalName();
        }

        $image->update($data);

        return redirect(route('admin.images.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return back();
    }
}
