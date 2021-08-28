<?php

namespace App\Http\Livewire\Public\Component;

use App\Models\user_cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Cart extends Component
{
    public $cart;
    public function render()
    {
        return view('livewire.public.component.cart');
    }

    public function mount()
    {
        $db_user_cart = user_cart::where('user_id', Auth::id())->get();
        if (!$db_user_cart->isEmpty()){
            $this->cart = $db_user_cart;
        }else{
            $this->cart = Session::get('cart');
        }
    }
    public function dProductCart($key)
    {
        if (Auth::check()){
            $product = user_cart::where('user_id', Auth::id())->where('product_id', $key)->first();
            $product->delete();
            $this->cart = user_cart::where('user_id', Auth::id())->get();
        }else {
            $cartProduct = Session::get('cart');
            unset($cartProduct[$key]);
            Session::put('cart', $cartProduct);
            $this->cart = Session::get('cart');
        }
        $this->emit('cartRemoved');
    }
}
