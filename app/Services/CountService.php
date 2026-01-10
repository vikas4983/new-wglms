<?php

namespace App\Services;

use App\Models\Card;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Guest;
use App\Models\InvitationCard;
use App\Models\Wedding;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CountService
{
    public function getCount()
    {
        $member = Wedding::where('description', 'REGEXP', '^[0-9]+$')
            ->sum(DB::raw('CAST(description AS UNSIGNED)'));
        $invitationCardMembers = InvitationCard::where('description', 'REGEXP', '^[0-9]+$')
            ->sum(DB::raw('CAST(description AS UNSIGNED)'));
        return  [
            'guests' => Wedding::where('is_sent', 0)->count(),
            'byAdmin' => Wedding::where('user_id', Auth()->id())->where('is_sent', 0)->count(),
            'invited' => Wedding::where('is_sent', 1)->count(),
            'invitedByAdmin' => Wedding::where('is_sent', 1)->where('user_id', Auth()->id())->count(),
            'totalByAdmin' => Wedding::whereNotNull('user_id')->count(),
            'total_guests' => Wedding::count(),
            'total_members' => $member,
            'invitationCards' => InvitationCard::count(),
            'invitationCard_member' => $invitationCardMembers,

        ];
    }
}
