<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;

use Livewire\Component;

class Landing extends Component
{
    public function render()
    {
        return view('livewire.pages.landing')->layout('layouts.app');
    }
}
