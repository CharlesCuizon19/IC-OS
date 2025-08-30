<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class ContactController extends Controller
{
    public function index()
    {
        $messages = contact::with('messages')->get();
        return view('admin.pages.messages.messages', compact('messages'));
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
            ]);

            DB::beginTransaction();

            $message = new messages();

            $message->message = $request->input('message');
            $message->save();

            $contact = new contact();
            $contact->first_name = $request->input('first_name');
            $contact->last_name = $request->input('last_name');
            $contact->email = $request->input('email');
            $contact->message_id = $message->id;
            $contact->save();

            DB::commit();

            return redirect()->route('contact-us')->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error("message store error: " . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while sending your message. Please try again later.');
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            // Find contact with its related message
            $contact = contact::with('messages')->findOrFail($id);

            // Delete the related message if exists
            if ($contact->messages) {
                $contact->messages->delete();
            }

            // Delete the contact itself
            $contact->delete();

            DB::commit();

            return redirect()->route('show.messages')->with('success', 'Contact and message deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error("Contact destroy error: " . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while deleting the contact.');
        }
    }
}
