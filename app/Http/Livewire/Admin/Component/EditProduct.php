<?php

namespace App\Http\Livewire\Admin\Component;

use App\Models\product_color_image;
use App\Models\product_details;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProduct extends Component
{
    use WithFileUploads;

    public $editProductId, $product, $images, $selectedColor, $productColorId, $imgDiv, $newImage, $addNewColor,
        $editProductTitle, $editProductDimension, $editProductDescription, $editProductCareInstruction, $editProductPrice, $editProductOfferPrice, $editProductReturn,
        $editProductSale, $editProductDiscount;
    protected $listeners = ['productColorUpdated'];
    public function render()
    {
        return view('livewire.admin.component.edit-product');
    }
    public function mount(){
        $this->product = \App\Models\products::with('details', 'product_all_img')->find($this->editProductId);
        $this->editProductTitle = $this->product->details->title;
        $this->editProductDimension = $this->product->details->dimension;
        $this->editProductDescription = $this->product->details->description;
        $this->editProductCareInstruction = $this->product->details->care_instruction;
        $this->editProductPrice = $this->product->details->price;
        $this->editProductOfferPrice = $this->product->details->offer_price;
        $this->editProductReturn = $this->product->details->return;
        $this->editProductSale = $this->product->details->sale;
        $this->editProductDiscount = $this->product->details->discount;
//        $this->selectedColor = product_color_image::find(1);
    }
    public function getProductColorId($id){
        $colorImgTable = product_color_image::find($id);
        $this->selectedColor = $colorImgTable->product_color;
        $this->images = explode(',', $colorImgTable->images);
        $this->productColorId = $id;

    }

    public function editProductDetails()
    {
        $this->validate([
            'editProductTitle' => 'required|max:100',
            'editProductDimension' => 'max:100',
            'editProductDescription' => 'max:250',
            'editProductCareInstruction' => 'max:250',
            'editProductPrice' => 'required',
            'editProductOfferPrice' => '',
        ]);

        $product = product_details::where('product_id', $this->editProductId)->firstOrFail();
        $product->update([
            'title'=>$this->editProductTitle,
            'dimension'=>$this->editProductDimension,
            'description'=>$this->editProductDescription,
            'care_instruction'=>$this->editProductCareInstruction,
            'price'=>$this->editProductPrice,
            'offer_price'=>$this->editProductOfferPrice,
            'return'=>$this->editProductReturn,
            'sale'=>$this->editProductSale,
            'discount'=>$this->editProductDiscount,
        ]);
        session()->flash('product_detail_updated', 'Product details has been updated');

    }

    public function productNewImg()
    {
        $this->newImage->store('public/product');
        array_push($this->images, $this->newImage->hashName());
        $img = implode(',', $this->images);
        $saveImg = product_color_image::find($this->productColorId);
        $saveImg->update(['images'=> $img]);
        $this->imgDiv = false;
        $this->newImage = null;

        $this->images = explode(',', $saveImg->images);

    }

    public function deleteImg($key)
    {
        $imgDel = $this->images[$key];
        Storage::delete('public/product/'.$imgDel);
        $newImgArray = $this->images; unset($newImgArray[$key]);

        $newImgArray =implode(',', $newImgArray);
        $del = product_color_image::find($this->productColorId);
        $del->update([
            'images' => $newImgArray,
        ]);
        $displayUpdatedImg = $del->images;
        $this->images = explode(',', $displayUpdatedImg);

    }
    public function addImgDiv(){
            $this->imgDiv = true;
    }

    public function deleteColorImg($id){
        $x = product_color_image::find($id);
        $img = explode(',', $x->images);
        foreach ($img as $image){
            Storage::delete('public/product/'.$image);
        }
        $x->delete();
        $this->images = null;
        $this->product = \App\Models\products::with('details', 'product_all_img')->find($this->editProductId);
    }

    public function addColor(){
        // this function is used for toggle "add color"
        if ($this->addNewColor == null){
            $this->addNewColor = $this->editProductId;
        }
        elseif ($this->addNewColor != null){
            $this->addNewColor = null;
        }
    }
    public function productColorUpdated($id)
    {
        $this->product = \App\Models\products::with('details', 'product_all_img')->find($id);
    }
}
