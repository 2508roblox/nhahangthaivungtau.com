<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;
class VideoList extends Component
{
    public $videos;
    public function mount()
    {
        $this->videos = Review::where('status', true)->get();
    }
    public function render()
    {
        return view('livewire.video-list');
    }
}
