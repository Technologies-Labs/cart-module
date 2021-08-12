<?php

namespace Modules\CartModule\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ProductModule\Entities\Product;

class CartItem extends Model
{
    use HasFactory;
    protected $guarded = [];

    //////  Relationships /////

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
