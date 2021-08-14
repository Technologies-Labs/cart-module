<?php

namespace Modules\CartModule\Http\Livewire\Cart;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\CartModule\Entities\CartItem;
use Modules\CartModule\Repositories\CartRepository;
use Modules\CartModule\Services\CartService;

class Cart extends Component
{
    private $cartRepository;
    private $cartService;
    public  $cart;
    public  $items;

    public function __construct()
    {
        $this->cartRepository = new CartRepository();
        $this->cartService    = new CartService();
        $this->cart           = $this->cartService->getUserCart(Auth::user());
    }

    public function render()
    {
        $this->items          = $this->cartRepository->getCartItems($this->cart);
        return view('cartmodule::livewire.cart.cart');
    }

    public function deleteCartItem($id)
    {
        $item  = $this->items->find($id);
        if(!$item)
        {
            session()->flash('message', 'product not found in your cart');
            return ;
        }
        $item->delete();
        session()->flash('message', 'product deleted successfully from your cart');
    }

    public function deleteCartItems()
    {
        $this->cart->delete();
        session()->flash('message', 'products deleted successfully from your cart');
    }
}

