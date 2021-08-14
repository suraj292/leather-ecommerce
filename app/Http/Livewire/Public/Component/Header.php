<?php

namespace App\Http\Livewire\Public\Component;

use App\Models\collection_name;
use App\Models\product_category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Header extends Component
{
    public $categories, $user, $collections;
    public function render()
    {
        return view('livewire.public.component.header');
    }

    public function mount()
    {
        if (Cache::has('categories')){
            $this->categories = json_decode(Cache::get('categories'));
            $this->collections = json_decode(Cache::get('collections'));
        }else {
            $this->categories = product_category::with('sub_category')->get();
            Cache::put('categories', $this->categories, 2 * 60);
            $this->collections = collection_name::all();
            Cache::put('collections', $this->collections, 2 * 60);
        }
        $this->user = Auth::user();
    }

    public function dropdownSubCategory($id)
    {
        $this->emit('product_category', $id);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }


}
