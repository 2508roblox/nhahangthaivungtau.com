<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\News;

class NewsDetail extends Component
{
    public $news;
    public function mount($slug)
    {
        $this->news = News::where('slug', $slug)->first();
        if (!$this->news) {
            abort(404);
        }else{
            $this->news->views++;
            $this->news->save();
        }
    }
    public function render()
    {
        return view('livewire.news-detail');
    }
}
