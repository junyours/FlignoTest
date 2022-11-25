<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Product extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'brand_id',
    //     'price'
    // ];

    public function brands()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }
}
