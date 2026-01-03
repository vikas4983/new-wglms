<?php

namespace App\Services;

use App\Models\Card;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Guest;
use App\Models\Wedding;
use Illuminate\Support\Facades\Cache;

class CountService
{
    public function getCount()
    {

        return Cache::remember('count', 1, function () {
            return [
                'guests' => Wedding::where('is_sent', 0)->count(),
                'invited' => Wedding::where('is_sent', 1)->count(),
                'total_guests' =>Wedding::count(),
                
            ];
        });
    }
}
