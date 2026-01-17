<?php

namespace App\Http\Controllers;

use App\Models\WebPage;
use App\Http\Controllers\Controller;
use App\Http\Requests\WebPageCreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class WebPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webPages = WebPage::latest()->paginate(10);
        return view('webpages.index', compact('webPages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('webpages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WebPageCreateRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['user_id'] = Auth::id();
        $status = intval($validatedData['status']);
        if ($status === 1) {
            $activeContent = WebPage::where('status', 1)->first();
            $activeContent->update(['status' => '0']);
            WebPage::create($validatedData);
        } else {
            WebPage::create($validatedData);
        }

        return Redirect()->back()->with('success', 'Record has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(WebPage $webPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, WebPage $webPage)
    {
        $objectdata = $webPage;
        $editForm = view('forms.edit.webPageFrom', compact('objectdata'))->render();
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
    public function update(WebPageCreateRequest $request, WebPage $webPage)
    {
        $validatedData = $request->validated();
        if (intval($validatedData['status']) === 1) {
            $activeContent = WebPage::where('status', 1)->first();
            if (isset($activeContent) && intval($activeContent->id) === $webPage->id) {
                unset($validatedData['status']);
                $webPage->update($validatedData);
            } else {
                $activeContent->update(['status' => '0']);
                $webPage->update($validatedData);
            }
            $webPage->update(array_merge(['status' => 1], $validatedData));
        } else {
            $activeContent = WebPage::where('status', 1)->pluck('id');
            if ($activeContent->contains($webPage->id)) {
                unset($validatedData['status']);
                $webPage->update($validatedData);
            } else {
                $webPage->update($validatedData);
            }
        }
        return redirect()->back()->with('success', 'Record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebPage $webPage)
    {
        $webPage->destroy($webPage->id);
        return redirect()->back()->with('error', 'Record has been deleted successfully');
    }
}
