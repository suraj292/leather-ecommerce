<?php

namespace App\Http\Livewire\Public;

use App\Models\product_color_image;
use App\Models\product_details;
use Illuminate\Support\Str;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product, $images, $color, $productId;

    public function render()
    {
        return view('livewire.public.product-detail');
    }
    public function mount($slug)
    {
        $title = str_replace('-', ' ', $slug);
        $this->productId = product_details::where('title', $title)->value('product_id');

        $this->product = product_details::where('product_id', $this->productId)->first();
        $this->color = product_color_image::where('product_id', $this->productId)->get();
        $this->images = explode(',', $this->color[0]->images);
    }

    public function getProductColor($array)
    {
        //$color = product_color_image::where('product_id', $this->productId)->get();
        //$this->images = null;
        $this->images = explode(',', $this->color[$array]->images);
//        dd($this->images->images);
    }
}
