<?php

namespace App\Http\Livewire;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class CreatePost extends Component
{
    public $title;

    public function save()
    {
        // $post = $post::create([
        //     'title' => $this->title
        // ]);
    }
    #[Layout('layout.app')]
    public function render()
    {
        return view('livewire.create-post')->with([
            'author' => Auth::user()
        ]);
    }
}
