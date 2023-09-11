<?php

namespace App\Http\Controllers\Livewire\Posts;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.posts.index');
    }
}
