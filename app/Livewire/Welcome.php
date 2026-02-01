<?php

namespace App\Livewire;

use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Livewire\Component;

class Welcome extends Component
{
    public function render(): RedirectResponse|View
    {
        if (Auth::check()) {
            return redirect()->route('notes.index');
        }

        return view('livewire.welcome');
    }
}
