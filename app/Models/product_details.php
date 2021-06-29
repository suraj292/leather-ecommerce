<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_details extends Model
{
    use HasFactory;
    protected $table = "product_details";
    public $timestamps = false;
    protected $fillable = ['product_id', 'title', 'dimension', 'description', 'care_instruction', 'price', 'offer_price', 'return', 'sale', 'discount'];
}
