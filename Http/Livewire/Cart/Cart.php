<?php

namespace Modules\CartModule\Http\Livewire\Cart;

use App\Traits\ModalHelper;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\CartModule\Entities\CartItem;
use Modules\CartModule\Repositories\CartRepository;
use Modules\CartModule\Services\CartService;

class Cart extends Component
{
    use ModalHelper;
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
            $this->modalClose('','error','هناك خطاء','هناك خطاء');
            return ;
        }
        $item->delete();
        $this->emit('cartItemAction','remove');
    }

    public function deleteCartItems()
    {
        $this->cart->delete();
        session(['cart-item-count' => 0]);
        session()->flash('message', 'products deleted successfully from your cart');
    }
}

