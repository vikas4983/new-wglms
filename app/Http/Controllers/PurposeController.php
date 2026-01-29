<?php

namespace App\Http\Controllers;

use App\Models\Purpose;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purposes = Purpose::paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('purposes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Purpose::create($request->all());
        return redirect()->back()->with('success', 'Record has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Purpose $purpose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purpose $purpose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purpose $purpose)
    {
        $purpose->update($request->all());
        return redirect()->back()->with('success', 'Record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purpose $purpose)
    {
        $purpose->destroy($purpose->id);
        return redirect()->back()->with('error', 'Record has been deleted successfully');
    }
}
