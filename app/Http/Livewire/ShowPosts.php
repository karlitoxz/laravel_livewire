<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{

    public $search = '';
    public $click = '';
    protected $listeners = ['render' => 'render'];

    public function render()
    {
        $posts = Post::where('title', 'like', '%' . $this->search . '%')->get();
        return view('livewire.show-posts', compact('posts'));
    }

    public function click($recibir){
        $this->click = 'Dio click: ' . $recibir;
    }

}
