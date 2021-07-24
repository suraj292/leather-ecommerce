<?php

namespace App\Http\Livewire\Admin\Component;

use App\Models\product_category;
use App\Models\product_color;
use App\Models\product_details;
use App\Models\sub_category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Products extends Component
{
    public $categories, $subCategories, $products,
        $selectedCategory, $selectedSubCategory,
        $productTitle, $productDimension, $productDescription, $productCareInstruction, $productPrice, $productOfferPrice, $productReturn, $productSale, $productDiscount,
        $productId, $editProductId;
    public function render()
    {
        return view('livewire.admin.component.products')->layout('layouts.admin');
    }
    public function mount(){
        $this->categories = product_category::all();
    }
    public function updatedSelectedCategory($selectedCategory){
        $this->subCategories = sub_category::where('product_category_id', $selectedCategory)->get();
        $this->selectedSubCategory = null;
        $this->editProductId = null;
        $this->productId = null;
    }
    public function updatedSelectedSubCategory($selectedSubCategory){
        $this->products = \App\Models\products::with('details', 'product_color_img')
            ->where('sub_category_id', $selectedSubCategory)
            ->get();
        $this->editProductId = null;
        $this->productId = null;
    }
    public function productDetails(){
        $this->validate([
            'productTitle' => 'required|max:100',
            'productDimension' => 'max:100',
            'productDescription' => 'max:250',
            'productCareInstruction' => 'max:250',
            'productPrice' => 'required',
            'productOfferPrice' => '',
        ]);
        $product_details = new product_details([
            'product_id'=>$this->selectedCategory,
            'title'=>$this->productTitle,
            'dimension'=>$this->productDimension,
            'description'=>$this->productDescription,
            'care_instruction'=>$this->productCareInstruction,
            'price'=>$this->productPrice,
            'offer_price'=>$this->productOfferPrice,
            'return'=>$this->productReturn,
            'sale'=>$this->productSale,
            'discount'=>$this->productDiscount,
        ]);
        $x = \App\Models\products::create([
            'product_category_id' => $this->selectedCategory,
            'sub_category_id' => $this->selectedSubCategory,
        ])->details()->save($product_details);

        $this->products = \App\Models\products::with('details', 'product_color_img')
            ->where('sub_category_id', $this->selectedSubCategory)
            ->get();

        $this->productId = $x->id;
        if ($x){
            session()->flash('product_detail', 'Product Detail has been saved.');
        }
    }
    public function getEditProduct($id){
        $this->editProductId = $id;
    }

    public function deleteProduct($id)
    {
        // Delete Product, product_detail, Product Color & Image
        $product = \App\Models\products::with('product_all_img')->find($id);
        foreach ($product->product_all_img as $y){
            foreach (explode(',', $y->images) as $image){
                Storage::delete('public/product/'.$image);
            }
        }
        $product->delete();

        $this->products = \App\Models\products::with('details', 'product_color_img')
            ->where('sub_category_id', $this->selectedSubCategory)
            ->get();

        session()->flash('product_deleted', 'Product has been deleted');
    }

}
