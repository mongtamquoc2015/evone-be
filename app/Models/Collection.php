<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class Collection extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug'];

    public function getProducts()
    {
        return $this->belongsTo(Product::class);
    }
}
