<?php

namespace App\Http\Livewire;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\WithPagination;

use Livewire\Component;

class CreatePost extends Component
{
    use WithPagination;

    public $query = '';

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.pagination', [
            'posts' => user::where('title', 'like', '%'.$this->query.'%')->paginate(10),
        ]);
    }
}
