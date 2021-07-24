<?php

namespace App\Http\Livewire\Public\Component;

use App\Models\product_category;
use App\Models\sub_category;
use Illuminate\Support\Str;
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
    }

    public function dropdownSubCategory($id)
    {
        $this->emit('product_category', $id);
    }
}
