<?php

namespace App\Http\Livewire\Public;

use App\Models\product_color_image;
use App\Models\product_details;
use App\Models\sub_category;
use App\Models\user_cart;
use Illuminate\Support\Facades\Auth;
use App\Models\product_category;
use Illuminate\Support\Str;
use Livewire\Component;

class Products extends Component
{
    public $productCategoryId, $products, $sub_categories, $selectFilter;
    public function render()
    {
        return view('livewire.public.products');
    }
    public function mount($category)//$category
    {
        $this->productCategoryId = product_category::where('product_category', $category)->value('id');
        $this->sub_categories = sub_category::where('product_category_id', $this->productCategoryId)->get();

        if ($category=='male'){
            $this->products = \App\Models\products::with('product_color_img')
                ->join('product_details', 'products.id', '=', 'product_details.product_id')
                ->where('gender', '!=', 'female')
                ->get();
        } elseif ($category=='female'){
            $this->products = \App\Models\products::with('product_color_img')
                ->join('product_details', 'products.id', '=', 'product_details.product_id')
                ->where('gender', '!=', 'male')
                ->get();
        } else {
            $this->products = \App\Models\products::with('product_color_img')
                ->join('product_details', 'products.id', '=', 'product_details.product_id')
                ->where('product_category_id', $this->productCategoryId)
                ->get();
        }

    }
    public function updatedSelectFilter($selectFilter)
    {
        $this->products = product_details::with([
            'product_color_img',
            'product'=>function($q){
                $q->where('product_category_id', $this->productCategoryId);
            }
        ])  ->orderBy('price', $selectFilter)
            ->get();
    }

    public function filterBySubCategory($id)
    {
        $this->products = product_details::with([
            'product_color_img','product'=>function($q) use ($id) {
                $q->where('sub_category_id', $id);
            }
        ])->get();
    }

    public function addToCart($id)
    {
        $product = product_details::with('product_color_img')->find($id);
        Auth::check() ? $user_id=Auth::user()->id : $user_id=null;
        $product->offer_price ? $price = $product->offer_price : $price = $product->price;
        $image = explode(',', $product->product_color_img->images);
        $product_color = product_color_image::where('product_id', '=', $product->product_id)->first();

        $addToCart = [
            'user_id' => $user_id,
            'product_id' => $product->product_id,
            'product_color_id' => $product_color->product_color_id,
            'title' => $product->title,
            'price' => $price,
            'image' => $image[0],
            'quantity' => 1,
        ];

        $this->emit('cartUpdated', $addToCart);
    }

    public function addToWishlist($id)
    {

    }

}
