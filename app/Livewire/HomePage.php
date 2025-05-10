<?php

namespace App\Livewire;

use App\Models\Food;
use Livewire\Component;
use App\Models\Slideshow;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Review;
use App\Models\News;
use App\Models\Menu;
use Illuminate\Support\Facades\Cookie;

class HomePage extends Component
{
    public $slides;
    public $setting;
    public $categories;
    public $foods;
    public $reviews;
    public $news;
    public $menus;
    public $menuImages;
    public function mount()
    {
        $this->slides = Slideshow::all();
        $this->setting = Setting::first();
        $this->categories = Category::all();
        $this->foods = Food::all();
        $this->reviews = Review::orderBy('created_at', 'desc')->limit(6)->get();
        $this->news = News::orderBy('views', 'desc')->limit(3)->get();
        $this->menus = Menu::all();

        $this->menuImages  = Menu::first()->link_image;
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
