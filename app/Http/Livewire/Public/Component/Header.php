<?php

namespace App\Http\Livewire\Public\Component;

use App\Models\collection_name;
use App\Models\product_category;
use App\Models\user_cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Header extends Component
{
    public $categories, $user, $collections, $cart;
    protected $listeners = ['cartUpdated'];

    public function cartUpdated($addToCart)
    {
        if (Session::has('cart')){
            foreach (Session::get('cart') as $cart){
                if ($cart['title'] != $addToCart['title']){
                    Session::push('cart', $addToCart);
                    Session::save();
                }else{return;}
            }
        }else{
            Session::put('cart', [$addToCart]);
            Session::save();
        }
        $this->cart = Session::get('cart');
    }

    public function render()
    {
        return view('livewire.public.component.header');
    }

    public function mount()
    {
        if (Cache::has('categories') && Cache::has('collections')){
            $this->categories = json_decode(Cache::get('categories'), true);
            $this->collections = json_decode(Cache::get('collections'));
        }else {
            $this->categories = product_category::all();
            Cache::put('categories', $this->categories, 2 * 60);
            $this->collections = collection_name::all();
            Cache::put('collections', $this->collections, 2 * 60);
        }
        $this->user = Auth::user();
        $this->cart = Session::get('cart');

        if (Auth::check()){
            foreach (Session::get('cart') as $cart){
                if ($cart['user_id'] == null){
                    $cart['user_id'] = Auth::id();
                }
                Session::put('cart', [$cart]);
            }
        }

        dd(Session::get('cart'));

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
