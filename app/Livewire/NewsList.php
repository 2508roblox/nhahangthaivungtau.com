<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\News;
class NewsList extends Component
{
    public $news;
    public function mount()
    {
        $this->news = News::all();
    }
    public function render()
    {
        return view('livewire.news-list');
    }
}
