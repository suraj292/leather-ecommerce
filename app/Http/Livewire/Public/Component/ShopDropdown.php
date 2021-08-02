<?php

namespace App\Http\Livewire\Public\Component;

use App\Models\product_category;
use App\Models\sub_category;
use Illuminate\Support\Facades\Cache;
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
        if (Cache::has('categories')){
            $this->categories = json_decode(Cache::get('categories'));
        }else {
            $this->categories = product_category::with('sub_category')->get();
            Cache::put('categories', $this->categories, 2 * 60);
        }
    }

    public function dropdownSubCategory($id)
    {
        $this->emit('product_category', $id);
    }
}
