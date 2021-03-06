<?php

namespace App\Http\Livewire;

use App\Models\collection_link;
use App\Models\collection_name;
use App\Models\product_category;
use App\Models\product_color;
use App\Models\product_details;
use App\Models\products;
use App\Models\user_verification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Test extends Component
{
    use WithFileUploads;

    public $test, $c=1;
    public function render()
    {
        return view('livewire.test')->layout('layouts.admin');
    }
    public function mount(){
//        $this->test = products::select('title','price','offer_price','images')
//            ->join('product_details', 'products.id', '=', 'product_details.product_id')
//            ->leftJoin('product_color_image', function ($query){
//                $query->on('product_color_image.product_id', '=', DB::raw(
//                    '(SELECT product_id FROM product_color_image WHERE product_color_image.product_id = products.id )'
//                ));
//            })->first()
//            ->where('product_category_id', 1)
//            ->get();

        //Session::put('test', 'cool ..');

//        if (Session()->has('test')){
//            dd(Session::get('test'));
//        }else{
//            dd('failed');
//        }

//        if (Session::has('key')){
//            $this->c = Session::get('key');
//        }


//        $this->test = collection_name::with('collectionLink')->get();

//        $this->test = collection_name::with('collectionLink.products')->get();

//        $this->test = collection_name::with('collectionLink.products')
//            ->where('name', '=', 'collection_2')
//            ->firstOrFail();
////        dd($this->test);

//        dd(Session::get('cart'));
//        if (Auth::check() && session()->has('cart')){
//            foreach (Session::get('cart') as $cart){
//                if ($cart['user_id'] == null){
//                    $cart['user_id'] = Auth::id();
//                    $this->test = $cart;
//                }else{return;}
//            }
//        }
//        dd($this->test);
    }

    public function increase()
    {
        $this->c++;
        Session::put('key', $this->c);
        Session::save();
    }

    public function decrease()
    {
        $this->c--;
        Session::put('key', $this->c);
        Session::save();
    }
}
