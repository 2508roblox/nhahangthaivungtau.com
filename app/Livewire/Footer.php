<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Setting;

class Footer extends Component
{
    public function render()
    {
        $settings = Setting::first();
        
        return view('livewire.footer', [
            'settings' => $settings
        ]);
    }
}
