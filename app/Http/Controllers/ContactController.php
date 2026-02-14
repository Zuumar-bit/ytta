<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'service_type' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        Contact::create($validated);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Pesan Anda telah terkirim! Kami akan segera menghubungi Anda.',
            ]);
        }

        return redirect()->back()->with('success', 'Pesan Anda telah terkirim! Kami akan segera menghubungi Anda.');
    }
}
