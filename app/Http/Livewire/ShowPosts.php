<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class ShowPosts extends Component
{

    public Collection $posts;

    public function render()
    {
        return view('livewire.show-posts');
    }
}
