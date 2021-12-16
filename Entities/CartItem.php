<?php

namespace Modules\CartModule\Entities;

use App\Models\User;
use Database\Factories\CartItemsFactory;
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
    protected static function newFactory()
    {
        return CartItemsFactory::new();
    }
    // public function products()
    // {
    //     return $this->belongsTo(Product::class,'product_id');
    // }
}
