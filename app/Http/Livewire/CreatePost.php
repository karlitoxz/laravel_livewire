<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    public $open = false;
    public $title, $content;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function save(){
        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);
        $this->open = false;
        $this->reset(['title', 'content']);
        $this->emit('render');
        //https://www.youtube.com/watch?v=Wcf4pbnt5lI&list=PLZ2ovOgdI-kWqCet33O0WezN14KShkwER&index=7
    }
}
