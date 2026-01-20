<?php

namespace App\Http\Controllers;

use App\Models\InvitationCard;
use App\Http\Controllers\Controller;
use App\Http\Requests\InvitationCardRequest;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class InvitationCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invitationCards = InvitationCard::latest()->paginate(10);
        $guests = $invitationCards;
        return view('invitationCards.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invitationCards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InvitationCardRequest $request)
    {
        $ValidatedData = $request->validated();
        InvitationCard::create($ValidatedData);
        return redirect()->back()->with('success', 'Invitation has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(InvitationCard $invitationCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InvitationCard $invitationCard, Request $request)
    {
        $objectdata = $invitationCard;
        $editForm = view('forms.edit.invitationCardForm', compact('objectdata'))->render();
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
    public function update(InvitationCardRequest $request, InvitationCard $invitationCard)
    {
        $ValidatedData = $request->validated();
        $invitationCard->update($ValidatedData);
        return redirect()->route('invitationCards.index')->with('success', 'Inviattion Card has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvitationCard $invitationCard)
    {
        $invitationCard->destroy($invitationCard->id);
        return redirect()->back()->with('success', 'Inviation Card has been destroy successfully');
    }
}
