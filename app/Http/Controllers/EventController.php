<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventCreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $events = Event::paginate(10);
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventCreateRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['user_id'] = Auth::id();
        Event::create($validatedData);
        return redirect()->back()->with('success', 'Event has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Event $event)
    {
        try {
            $objectData = $event;
            $editForm = view('forms.edit.eventForm', compact('objectData'))->render();
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'action' => 'edit',
                    'editForm' => $editForm,
                ]);
                $action = 'edit';
                return api_success($editForm, 'Data loaded successfully', $action);
            }
            return view('guests.edit', compact('objectdata'));
        } catch (\Throwable $th) {
            Log::error('Failed load:' . $th->getMessage());
            if ($request->ajax() || $request->wantsJson()) {
                return api_error('Something went wrong');
            }
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventCreateRequest $request, Event $event)
    {
        $validatedData = $request->validated();
        $event->update($validatedData);
        return redirect()->route('events.index')->with('success', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Event $event)
    {
        $event->destroy($event->id);
        return redirect()->back()->with('error', 'Event has been deleted successfully');
    }
}
