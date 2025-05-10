<?php

namespace App\Livewire\Inc;

use App\Models\Menu;
use App\Models\Setting;
use Livewire\Component;

class Book extends Component
{
    public $setting;
    public $menus;
    public $menuImages;

    public function mount()
    {
        $this->setting = Setting::first();
        $this->menus = Menu::all();

        $this->menuImages  = Menu::first()->link_image;
    }

    public function render()
    {
        return view('livewire.inc.book');
    }
}
