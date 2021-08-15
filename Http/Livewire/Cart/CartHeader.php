<?php

namespace Modules\CartModule\Http\Livewire\Cart;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\CartModule\Repositories\CartRepository;
use Modules\CartModule\Services\CartService;

class CartHeader extends Component
{
    private $cartRepository;
    private $cartService;
    public  $cart;
    public  $items;
    public  $itemsCount;
    protected $listeners = ['updateCartItemsCount'=> 'render'];

    public function __construct()
    {
        $this->cartRepository = new CartRepository();
        $this->cartService    = new CartService();
        $this->cart           = $this->cartService->getUserInitialCart(Auth::user());
    }

    public function render()
    {
        $this->items       = $this->cartRepository->getCartItems($this->cart);
        $this->itemsCount  = empty( $this->items) ? 0 : $this->items->count();
        return view('cartmodule::livewire.cart.cart-header');
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
        // $this->emit('updateCartItemsCount');
        session()->flash('message', 'product deleted successfully from your cart');
    }
}
