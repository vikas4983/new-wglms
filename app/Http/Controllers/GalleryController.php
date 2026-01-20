<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryCreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::paginate(10);
        return view('galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryCreateRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['user_id'] = Auth::id();
        Gallery::create($validatedData);
        return redirect()->back()->with('success', 'Record has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery, Request $request)
    {
        $objectdata = $gallery;
        $editForm = view('forms.edit.galleryForm', compact('objectdata'))->render();
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'action' => 'edit',
                'editForm' => $editForm,
            ]);
        }
        return view('invitationCards.edit', compact('objectdata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GalleryCreateRequest $request, Gallery $gallery)
    {  
        $validatedData  = $request->validated();
        $validatedData['user_id'] = Auth::id();
        $gallery->update($validatedData);
        return redirect()->route('galleries.index')->with('success', 'Record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->destroy($gallery->id);
        return redirect()->back()->with('success', 'Record has been deleted successfully');
    }
}
