<?php

namespace App\Http\Livewire;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use App\Models\Product;
use Livewire\Attributes\On;

use Livewire\Component;

class Allmodal extends Component
{
    public $products;
    public function mount(){
        $this->products=Product::all();
    }
    public function render()
    {
        return view('livewire.all-products');
    }

    #[On('refresh-products')]
    public function refreshProducts(){
        $this->products=Product::all();
    }
}
