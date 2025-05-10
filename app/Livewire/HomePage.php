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

    public function mount()
    {
        $this->slides = Slideshow::all();
        $this->setting = Setting::first();
        $this->categories = Category::all();
        $this->foods = Food::all();
        $this->reviews = Review::orderBy('created_at', 'desc')->limit(6)->get();
        $this->news = News::orderBy('views', 'desc')->limit(3)->get();
        $this->menus = Menu::all();

        // Lưu cookie PHP nếu có menu
        if ($this->menus->isNotEmpty() && is_array($this->menus[0]->link_image)) {
            $json = json_encode($this->menus[0]->link_image);
            Cookie::queue('menu_images', $json, 60 * 24 * 7); // lưu 7 ngày (đơn vị: phút)
        }
        $cookie = Cookie::get('menu_images');
        $this->menuImages = json_decode($cookie, true);
        // dd($this->menuImages);
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
