<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\View\View;

class EditController extends Controller
{
    public function edit(Note $note): View
    {
        if ($note->user_id !== auth()->id()) {
            abort(403);
        }

        return view('notes.edit', ['note' => $note]);
    }
}
