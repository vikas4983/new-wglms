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

    public function store(InvitationCreate $request)
    {
        $validatedData = $request->validated();
        if (Wedding::where('email', $validatedData['email'])->exists()) {
            return redirect()
                ->back()
                ->with('success', 'Thank you for your response. This email already exists.');
        }
        if (Wedding::where('phone', $validatedData['phone'])->exists()) {
            return redirect()
                ->back()
                ->with('success', 'Thank you for your response. This phone number already exists.');
        }

        StoreFormData::dispatch($validatedData);
        return redirect()
            ->back()
            ->with('success', 'Thank you for your response. You will receive your wedding invitation shortly.');
    }
}
