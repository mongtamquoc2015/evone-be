<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Order;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','discount','order_id','quantity','price'];

    public function getProduct()
    {
        $this->belongsTo(Product::class);
    }

    public function getOrder()
    {
        $this->belongsTo(Order::class);
    }
}
