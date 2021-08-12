<?php

namespace Modules\CartModule\Repositories;

use Modules\CartModule\Entities\Cart;

class CartRepository
{
   public function getCartItems(Cart $cart){
    $items = $cart->cartItems()->get();
    return $items;
   }

   public function getItemsProduct($items)
   {
    foreach($items as $item)
    {
         $item->product;
    }
    return $items;
   }
}
