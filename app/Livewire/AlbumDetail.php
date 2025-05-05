<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Album;

class AlbumDetail extends Component
{
    public $album;

    public function mount($slug)
    {
        $this->album = Album::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.album-detail');
    }
}
