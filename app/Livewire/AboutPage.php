<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Setting;

class AboutPage extends Component
{
    public $setting;

    public function mount()
    {
        $this->setting = Setting::first();
    }
    public function render()
    {
        return view('livewire.about-page');
    }
}
