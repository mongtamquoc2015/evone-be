<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Collection;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','image_url','collection_id','slug'];

    public function getCollection()
    {
        return $this->hasMany(Collection::class);
    }
}
