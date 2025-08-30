<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id)
    {
        $event = blogs::with(['categories', 'images', 'images.files'])->findOrFail($id);

        return view('pages.events.event_show', compact('event'));
    }
}
