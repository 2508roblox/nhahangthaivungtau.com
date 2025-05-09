<?php

namespace App\Livewire;

use App\Models\Food;
use Livewire\Component;
use App\Models\Slideshow;
use App\Models\Setting;
use App\Models\Category;
class HomePage extends Component
{
    public $slides;
    public $setting;
    public $categories;
    public $foods;
    public function mount()
    {
        $this->slides = Slideshow::all();
        $this->setting = Setting::first();
        $this->categories = Category::all();
        $this->foods = Food::all();
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
