<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;

use Livewire\Component;

class Navbar extends Component
{
    public $mode=false;
    public $type='light';
    public function render()
    {
        //sleep(5);
        return view('livewire.nav-bar');
    }

    function UpdatedMode(){
        $this->mode !=$this->mode;
       if($this->mode){
         $this->type='Dark';
       }else{
        $this->type='Light';
       }
       $this->dispatch('change-theme');

    }
}
