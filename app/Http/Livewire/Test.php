<?php

namespace App\Http\Livewire;

use App\Models\product_color;
use App\Models\products;
use Livewire\Component;

class Test extends Component
{
    public $p=1;
    public function render()
    {
        return view('livewire.test')->layout('layouts.admin');
    }
    public function mount(){

    }

    public function increment()
    {
        $this->p++;
    }

    public function decrement()
    {
        $this->p--;
    }
}
