<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries =  Image::whereNotNull('gallery_type')->latest()->paginate(5);
        $banners =  Image::whereNull('gallery_type')->latest()->paginate(5);
      
        return view('images.index', compact('galleries', 'banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $media = new Media();
        $media->id = 1;
        $media->exists = true;

        if ($request->hasFile('gallery')) {

            $path = $request->file('gallery')->store('images/gallery', 'public');
            $media->images()->create([
                'path' =>  $path,
                'gallery_type' => $request->gallery_type,
            ]);
            return redirect()->back()->with('success', 'Gallery has been uploaded successfully');
        }
        if ($request->hasFile('banner')) {

            $path = $request->file('banner')->store('images/banner', 'public');
            $media->images()->create([
                'path' =>  $path,
                'gallery_type' => $request->gallery_type,
            ]);
            return redirect()->back()->with('success', 'Banner has been uploaded successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        if ($image->path && Storage::disk('public')->exists($image->path)) {
            Storage::disk('public')->delete($image->path);
            $image->destroy($image->id);
            return redirect()->back()->with('error', 'Image has been deleted successfully');
        }
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
