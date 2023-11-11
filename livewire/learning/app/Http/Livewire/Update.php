<?php

namespace App\Http\Livewire;
use Livewire\Attributes\Layout;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class UpdatePost extends Component
{
    public $todo;
    // #[Computed]
    // public function todos()
    // {
    //     return Auth::user()
    //         ->todo()
    //         ->select(['title', 'content'])
    //         ->get();
    // }

    // public function mount(Post $post)
    // {
    //     $this->post = $post;

    //     $this->fill(
    //         $post->only('title', 'description'),
    //     );
    // }
    public function render()
    {
        return view('livewire.update');
    }
}
