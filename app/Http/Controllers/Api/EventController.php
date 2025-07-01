<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function categorized()
    {
        $today = Carbon::today()->toDateString();

        return response()->json([
            'today' => Event::whereDate('date', $today)->get(),
            'future' => Event::whereDate('date', '>', $today)->get(),
            'past' => Event::whereDate('date', '<', $today)->get(),
        ]);
    }
}
