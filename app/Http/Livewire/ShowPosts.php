<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{

    public $search = 'Esto es lo que se buscara';
    public function render()
    {
        $posts = Post::where('title', 'like', '%' . $this->search . '%')->get();
        return view('livewire.show-posts', compact('posts'));
    }
}
