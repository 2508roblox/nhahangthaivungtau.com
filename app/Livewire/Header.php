<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Setting;
use App\Models\Category;
use App\Models\SubCategory;

class Header extends Component
{
    public function render()
    {
        $settings = Setting::first();
        $categories = Category::where('status', 1)
            ->orderBy('order_number')
            ->with(['subCategories' => function($query) {
                $query->where('status', 1)
                    ->orderBy('order_number');
            }])
            ->get();

        return view('livewire.header', [
            'settings' => $settings,
            'categories' => $categories
        ]);
    }
}
