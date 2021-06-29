<?php

namespace App\Http\Livewire\Public;

use App\Models\collection_banner;
use App\Models\slider;
use Livewire\Component;

class Home extends Component
{
    public $slides, $banners;
    public function render()
    {
        return view('livewire.public.home');
    }
    public function mount(){
        $this->slides = slider::all();
        $this->banners = collection_banner::all();
    }
}
