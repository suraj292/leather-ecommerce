<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_cart extends Model
{
    use HasFactory;
    protected $table = "user_cart";
    public $timestamps = false;
    protected $fillable = ['user_id', 'product_id', 'product_color', 'quantity'];
}
