<?php

namespace App\Http\Livewire\Public\Component;

use App\Models\user_cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Checkout extends Component
{
    public $cart, $user;
    public function render()
    {
        return view('livewire.public.component.checkout');
    }

    public function mount()
    {
        if (Auth::check()){
            $this->cart = user_cart::where('user_id', '=', Auth::id())->get();
        }else{
            $this->cart = Session::get('cart');
        }
        if (is_null($this->cart)){
            dd('cart is null');
        }
    }
}
