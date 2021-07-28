<?php

namespace Modules\CartModule\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ProductModule\Entities\Product;

class CartItem extends Model
{
    use HasFactory;

    protected $table='cart_item';
    protected $fillable = [
        'count'
    ];

    //////  Relationships /////

    // public function itemable()
    // {
    //     return $this->morphTo();
    // }
}
