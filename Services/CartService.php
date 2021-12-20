<?php

namespace Modules\Cart\Services;

use App\Models\User;
use Modules\Cart\Entities\Cart;
use PhpParser\Builder\Trait_;

class CartService
{
    public static function getUserCart(User $user)
    {
       $cart = $user->cart->where('status','active')->first();
       return ($cart) ?? Cart::create(['user_id'=> $user->id]);
    }

    public static function getUserInitialCart(User $user)
    {
        return $user->cart->where('status','active')->first();
    }
}
