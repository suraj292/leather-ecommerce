<?php

namespace App\Http\Livewire;

use App\Models\product_category;
use App\Models\product_color;
use App\Models\product_details;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Test extends Component
{
    use WithFileUploads;

    public $test, $image;
    public function render()
    {
        return view('livewire.test')->layout('layouts.admin');
    }
    public function mount(){
        $this->test = products::select('title','price','offer_price','images')
            ->join('product_details', 'products.id', '=', 'product_details.product_id')
            ->leftJoin('product_color_image', function ($query){
                $query->on('product_color_image.product_id', '=', DB::raw(
                    '(SELECT product_id FROM product_color_image WHERE product_color_image.product_id = products.id )'
                ));
            })->first()
            ->where('product_category_id', 1)
            ->get();

        dd($this->test);
    }
}
