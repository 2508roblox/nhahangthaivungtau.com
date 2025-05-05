<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Slideshow;

class HomePage extends Component
{
    public $slides;

    public function mount()
    {
        $this->slides = Slideshow::all();
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
