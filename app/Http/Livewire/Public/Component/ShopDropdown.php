<?php

namespace App\Http\Livewire\Public\Component;

use App\Models\product_category;
use App\Models\sub_category;
use Livewire\Component;

class ShopDropdown extends Component
{
    public $categories;
    public function render()
    {
        return view('livewire.public.component.shop-dropdown');
    }
    public function mount(){
        $this->categories = product_category::with('sub_category')->get();
//        $y = product_category::with('sub_category')->get();
//        foreach ($y as $x){
//            echo $x->product_category;
//            echo $x->sub_category;
//        }
    }
}
