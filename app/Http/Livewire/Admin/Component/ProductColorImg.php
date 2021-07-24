<?php

namespace App\Http\Livewire\Admin\Component;

use App\Models\product_color_image;
use App\Models\select_product_color;
use Livewire\Component;
use Intervention\Image\Facades\Image;
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
            'newImg3' => 'required|image|max:1024',
            'newImg4' => 'required|image|max:1024',
            'newImg5' => 'required|image|max:1024',
        ]);
        if (!is_null($this->newImg1)){
//            $this->newImg1->store('public/product');
            $img = Image::make($this->newImg1->path())->resize(320, 409);
            $img->save('storage/product/'.$this->newImg1->hashName());
        }
        if (!is_null($this->newImg2)){
//            $this->newImg2->store('public/product');
            $img = Image::make($this->newImg2->path())->resize(320, 409);
            $img->save('storage/product/'.$this->newImg2->hashName());
        }
        if (!is_null($this->newImg3)){
//            $this->newImg3->store('public/product');
            $img = Image::make($this->newImg3->path())->resize(320, 409);
            $img->save('storage/product/'.$this->newImg3->hashName());
        }
        if (!is_null($this->newImg4)){
//            $this->newImg4->store('public/product');
            $img = Image::make($this->newImg4->path())->resize(320, 409);
            $img->save('storage/product/'.$this->newImg4->hashName());
        }
        if (!is_null($this->newImg5)){
//            $this->newImg5->store('public/product');
            $img = Image::make($this->newImg5->path())->resize(320, 409);
            $img->save('storage/product/'.$this->newImg5->hashName());
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
