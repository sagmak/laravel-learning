<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Livewire\Component;

class Computed extends Component
{
    public $userId;

    #[Computed]
    public function user()
    {
        return User::find($this->userId);
    }
    // public function follow()
    // {
    //     Auth::user()->follow($this->user);
    // }

    public function render()
    {
        return view('livewire.computed');
    }
}
