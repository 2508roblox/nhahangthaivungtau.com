<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Setting;
use App\Models\Food;
use App\Models\Category;
use App\Models\SubCategory;
class FoodList extends Component
{
    public $setting;
    public $foods;
    public $category;
    public $subCategory;
    public function mount()
    {
        $this->setting = Setting::first();
        if (request()->category) {
            $this->category = Category::where('id', request()->category)->first();
            if (request()->subcategory) {
                $this->subCategory = SubCategory::where('id', request()->subcategory)->first();
                $this->foods = Food::where('category_id', $this->category->id)->where('sub_category_id', $this->subCategory->id)->get();
            }else{
                $this->foods = Food::where('category_id', $this->category->id)->get();
                $this->subCategory = SubCategory::where('id', request()->subcategory)->first();
            }
        }else{
            $this->foods = Food::all();
        }

    }
    public function render()
    {
        return view('livewire.food-list');
    }
}
