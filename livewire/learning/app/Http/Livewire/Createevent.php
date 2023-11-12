<?php

namespace App\Http\Livewire;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use App\Models\Product;
use Livewire\Attributes\On;

use Livewire\Component;

class Createevent extends Component
{
    public $product;
    public $formtitle='Create Product';
    public $editform=false;
    #[Rule('required')]
    public $title;

    #[Rule('required')]
    public $description;

    #[Rule('required')]
    public $price;
    public function render()
    {
        return view('livewire.create-event');
    }
    public function save(){
        $validated=$this->validate();
        Product::create($validated);
        $this->dispatch('refresh-products');
        session()->flash('status','product created');
        $this->reset();
    }

    #[On('reset-modal')]
    public function close(){
        $this->reset();
    }

    #[On('edit-mode')]
    public function edit($id){
        //dd($id);
        $this->editform=true;
        $this->formtitle='Edit Product';
        $this->product=Product::findOrfail($id);
        $this->title=$this->product->title;
        $this->description=$this->product->description;
        $this->price=$this->product->price;
    }

    public function update(){
        $validated=$this->validate();
        $p=Product::findOrFail($this->product->id);
        $p->update($validated);
        $this->dispatch('refresh-products');
        session()->flash('status','Product updated succesfully');

    }
}
