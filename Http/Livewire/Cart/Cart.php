<?php

namespace Modules\Cart\Http\Livewire\Cart;

use App\Traits\ModalHelper;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Cart\Entities\CartItem;
use Modules\Cart\Repositories\CartRepository;
use Modules\Cart\Services\CartService;

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

        return view('cart::livewire.cart.cart');
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

