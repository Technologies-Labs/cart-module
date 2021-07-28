<?php

namespace Modules\CartModule\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ProductModule\Entities\Product;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    //////  Relationships /////

    public function products()
    {
        return $this->belongsToMany(Product::class,'cart_item')->withPivot('count');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function products()
    // {
    //     return $this->morphToMany(CartItem::class,'itemable');
    // }
}
