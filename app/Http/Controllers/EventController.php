<?php

namespace App\Http\Controllers;

use App\Models\blogs;

class EventController extends Controller
{
    public function show($id, $slug = null)
    {
        $event = blogs::with(['categories', 'images', 'images.files'])->findOrFail($id);

        // Optional: Redirect to correct slug if someone enters wrong one
        $correctSlug = \Illuminate\Support\Str::slug($event->slug);
        if ($slug !== $correctSlug) {
            return redirect()->route('events.show', [
                'id' => $event->id,
                'slug' => $correctSlug,
            ]);
        }

        return view('pages.events.event_show', compact('event'));
    }
}
