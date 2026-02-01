<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        $notes = Note::orderBy('created_at', 'desc')->paginate(10);

        return view(
            'notes.index',
            [
                'notes' => $notes,
            ]);
    }
}

