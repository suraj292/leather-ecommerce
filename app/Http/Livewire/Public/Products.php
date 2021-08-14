<?php

namespace App\Http\Livewire\Public;

use App\Models\product_details;
use App\Models\sub_category;
use App\Models\user_cart;
use Illuminate\Support\Facades\DB;
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

        $this->products = \App\Models\products::with('product_color_img')
            ->join('product_details', 'products.id', '=', 'product_details.product_id')
            ->where('product_category_id', $this->productCategoryId)
            ->get();

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
        $product = product_details::find($id);
        $addToCart = new user_cart([
            'user_id' => '',
            'product_id' => $product->product_id,
            'product_color' => '',
            'quantity' => '',
        ]);
        dd($product);
    }

    public function addToWishlist($id)
    {

    }

}
