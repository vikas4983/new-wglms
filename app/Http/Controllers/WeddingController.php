<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddGuestRequest;
use App\Http\Requests\InvitationCreate;
use App\Jobs\SendWebUrlJob;
use App\Jobs\StoreFormData;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests = Wedding::where('is_sent', 0)->latest()->paginate(10);

        return view('weddings.index', compact('guests'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('weddings.create');
    }
    public function store(AddGuestRequest $request)
    {
        $validatedData = $request->validated();
        if (Wedding::where('email', $validatedData['email'])->where('phone', $validatedData['phone'])->exists()) {
            return redirect()
                ->route('weddings.create')
                ->with('success', 'Email & phone has been already exists.');
        }
        $validatedData['user_id'] = Auth::id();
      
        Wedding::create($validatedData);
        return redirect()
            ->route('weddings.create')
            ->with('success', 'Record has beeen created successfully');
    }
    public function guestCreate()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function guestStore(InvitationCreate $request)
    {
        $validatedData = $request->validated();

        if (Wedding::where('email', $validatedData['email'])->exists()) {
            return redirect()
                ->route('invitation.form')
                ->with('success', 'Thank you for your response. This email already exists.');
        }

        if (Wedding::where('phone', $validatedData['phone'])->exists()) {
            return redirect()
                ->route('invitation.form')
                ->with('success', 'Thank you for your response. This phone number already exists.');
        }
        StoreFormData::dispatch($validatedData);
        return redirect()
            ->route('invitation.form')
            ->with('success', 'Thank you for your response. You will receive your wedding invitation shortly.');
    }

    public function invitation(Request $request)
    {
        if (!empty($request->guest_ids)) {
            $ids = Wedding::whereIn('id', $request->guest_ids)->get();
            foreach ($ids as  $data) {
                SendWebUrlJob::dispatch($data);
            }
            $action = 'sentMail';
            if ($request->ajax() || $request->wantsJson()) {
                return api_success('', 'Invitations has been sent successfully', $action);
            }
        }
    }

    public function invited()
    {
        $guests = Wedding::where('is_sent', 1)->latest()->paginate(10);
        return view('weddings.invited', compact('guests'));
    }
    public function guestByAdmin()
    {   
      
        $guests = Wedding::where('user_id', auth()->id())->where('is_sent', 0)->latest()->paginate();
      
        return view('weddings.addedByAdmin', compact('guests'));
    }
    public function guestInvitedByAdmin()
    {   
        $guests = Wedding::where('user_id', Auth::id())->where('is_sent', 1)->latest()->paginate(10);
        return view('weddings.addedByAdmin', compact('guests'));
    }



    public function view()
    {
        return view('wedding-invitation');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wedding $wedding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Wedding $wedding)
    {
        try {
            $objectdata = $wedding;
            $editForm = view('forms.edit.guestForm', compact('objectdata'))->render();
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'action' => 'edit',
                    'editForm' => $editForm
                ]);
            }
            return view('guests.edit', compact('objectdata'));
        } catch (\Throwable $th) {
            if ($request->ajax() || $request->wantsJson()) {
                Log::info('Data not found' . $th->getMessage());
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong',

                ]);
            }
            Log::info('Data not found' . $th->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InvitationCreate $request, Wedding $wedding)
    {
        $validatedData = $request->validated();

        try {
            if ($wedding) {
                $wedding->update($validatedData);
            }
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'action' => 'update',
                    'message' => 'Guest updated successfully',
                ]);
            }
            return redirect()->route('weddings.index')->with('success', 'Guest updated successfully');
        } catch (\Throwable $th) {
            Log::info('Updation failed' . $th->getMessage());
            if ($request->ajax() || $request->wantsJson()) {
                Log::info('Updation failed' . $th->getMessage());
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong',
                ]);
            }
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Wedding $wedding)
    {
        $wedding->destroy($wedding->id);
        if ($request->ajax() || $request->wantsjson()) {
            return response()->json([
                'action' => 'delete',
                'success' => 'true',
                'message' => 'Item deleted successfully',
            ]);
        }
        return redirect()->back()->with('error', ' Item deleted successfully');
    }
}
