<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\View\View;

class ShowController extends Controller
{
    public function show(Note $note): View
    {
        return view('notes.show', ['note' => $note]);
    }
}
