<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Slideshow;
use App\Models\Setting;
class HomePage extends Component
{
    public $slides;
    public $setting;
    public function mount()
    {
        $this->slides = Slideshow::all();
        $this->setting = Setting::first();
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
