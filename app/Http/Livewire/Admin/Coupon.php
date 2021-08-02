<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Str;
use Livewire\Component;

class Coupon extends Component
{
    public $coupon;
    public function render()
    {
        return view('livewire.admin.coupon')->layout('layouts.admin');
    }

    public function couponGenerate()
    {
        $this->coupon = strtoupper(Str::random(40));
    }
}
