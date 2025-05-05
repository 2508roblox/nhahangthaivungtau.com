<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Food;
use App\Models\Setting;
class FoodDetail extends Component
{
    public $food;
    public $setting;
    public $relatedFoods;
    public function mount()
    {
        $this->setting = Setting::first();
        $this->food = Food::where('slug', request()->slug)->first();
        if(!$this->food){
            return redirect()->route('food.list');
        }
        $this->relatedFoods = Food::where('sub_category_id', $this->food->sub_category_id)->where('id', '!=', $this->food->id)->get();
    }
    public function render()
    {
        return view('livewire.food-detail');
    }
}
