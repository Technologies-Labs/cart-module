<?php

namespace Modules\Cart\Entities;

use App\Models\User;
use Database\Factories\CartsFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Entities\Product;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*  Relationships */

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function newFactory()
    {
        return CartsFactory::new();
    }
}
