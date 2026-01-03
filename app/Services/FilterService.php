<?php

namespace App\Services;

use App\Models\Contact;
use App\Models\Event;
use App\Models\Guest;
use App\Models\Wedding;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class FilterService
{
    public function filter($keyword)
    {

        return Wedding::query()
            ->where(function ($q) use ($keyword) {
                $q->where('name', 'like', "%{$keyword}%")
                    ->orWhere('email', 'like', "%{$keyword}%")
                    ->orWhere('phone', 'like', "%{$keyword}%");
            });
    }
}
