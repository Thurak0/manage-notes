<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update(Request $request, Note $note): RedirectResponse
    {
        if ($note->user_id !== auth()->id()) {
            abort(403);
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:1000',
            'important' => 'required',
        ]);

        $note->update($validated);

        return redirect()->route('notes.index')->with('success', 'Note edited successfully.');
    }
}
