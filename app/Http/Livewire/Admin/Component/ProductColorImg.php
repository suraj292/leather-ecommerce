<?php

namespace App\Http\Livewire\Admin\Component;

use App\Models\product_color_image;
use App\Models\select_product_color;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductColorImg extends Component
{
    use WithFileUploads;

    public $colors, $productId, $productColors, $imgName, $product,
            $newImg1, $newImg2, $newImg3, $newImg4, $newImg5;

    public function render()
    {
        return view('livewire.admin.component.product-color-img');
    }
    public function mount(){
        $this->colors = select_product_color::all();
    }
    public function productColorImg(){
        $this->validate([
            'productColors' => 'required',
            'newImg1' => 'required|image|max:1024',
            'newImg2' => 'required|image|max:1024',
            'newImg3' => 'image|max:1024|nullable',
            'newImg4' => 'image|max:1024|nullable',
            'newImg5' => 'image|max:1024|nullable',
        ]);
        if (!is_null($this->newImg1)){
            $this->newImg1->store('public/product');
        }
        if (!is_null($this->newImg2)){
            $this->newImg2->store('public/product');
        }
        if (!is_null($this->newImg3)){
            $this->newImg3->store('public/product');
        }
        if (!is_null($this->newImg4)){
            $this->newImg4->store('public/product');
        }
        if (!is_null($this->newImg5)){
            $this->newImg5->store('public/product');
        }
        $imgArray = [
            $this->newImg1,
            $this->newImg2,
            $this->newImg3,
            $this->newImg4,
            $this->newImg5,
        ];
        foreach (array_filter($imgArray) as  $key=>$y){
            $this->imgName[$key] = $y->hashName();
        }
        $this->imgName = implode(',', $this->imgName);

        $create_color_img = product_color_image::create([
           'product_id'=>$this->productId,
           'product_color'=>$this->productColors,
           'images'=> $this->imgName,
        ]);
        if ($create_color_img){
            session()->flash('color_img', 'Color & Images has been added.');
            $this->productColors = null;
            $this->newImg1 = null;
            $this->newImg2 = null;
            $this->newImg3 = null;
            $this->newImg4 = null;
            $this->newImg5 = null;
            $this->imgName = null;
            $this->emit('productColorUpdated', $this->productId);
        }
    }
    public function add_more_color(){
        session()->forget('color_img');
    }
}
