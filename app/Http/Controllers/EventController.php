<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Fetch all events from the 'events' table
        $events = Event::all();

        // Return the dashboard view with events data
        return view('dashboard', compact('events'));
    }
}
