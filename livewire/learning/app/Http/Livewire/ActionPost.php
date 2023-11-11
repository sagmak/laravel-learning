<?php

namespace App\Http\Livewire;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

use Livewire\Component;

class ActionPost extends Component
{

    public $title = '';

    public $content = '';

    // public function save()
    // {
    //     Post::create([
    //         'title' => $this->title,
    //         'content' => $this->content,
    //     ]);
    // }
    public function render()
    {
        return view('livewire.action-post');
    }
}
