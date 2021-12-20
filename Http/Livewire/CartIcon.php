<?php

namespace Modules\Cart\Http\Livewire;

use Livewire\Component;

class CartIcon extends Component
{
    public $cartItemCount = 0;

    protected $listeners = ['loadCartItemCount' , 'cartItemAction'];

    public function cartItemAction($action)
    {
        if($action == "add"){

            $this->cartItemCount += 1;
        }
        if($action == "remove"){
            ($this->cartItemCount > 0) ? $this->cartItemCount -= 1 : 0;
        }
        session(['cart-item-count' => $this->cartItemCount]);
    }

    public function loadCartItemCount($count)
    {
        $this->cartItemCount = $count;
    }

    public function render()
    {
        $this->cartItemCount = session('cart-item-count' , 0);
        return view('cart::livewire.cart-icon');
    }
}
