<?php

namespace Modules\Cart\Http\Livewire\Favorite;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Cart\Entities\CartItem;
use Modules\Cart\Repositories\CartRepository;
use Modules\Cart\Repositories\FavoriteRepository;
use Modules\Cart\Services\CartService;

class FavoriteHeader extends Component
{
    private $favoriteRepository;
    public  $products;
    public  $productsCount;

    public function __construct()
    {
        $this->favoriteRepository = new FavoriteRepository();
    }

    public function render()
    {
        $this->products         = $this->favoriteRepository->getUserFavoriteProduct(Auth::user());
        $this->productsCount    = empty($this->products) ? 0 : $this->products->count();

        return view('cart::livewire.favorite.favorite-header');
    }

    public function deleteFavoriteProduct($id)
    {
        $product  = $this->products->find($id);
        if(!$product)
        {
            session()->flash('message', 'product not found in your favorites');
            return ;
        }
        Auth::user()->favorites()->detach($id);
        session()->flash('message', 'product deleted successfully from your favorites');
    }

    public function rmoveFavoriteProductToCart($id)
    {
        $cartRepository = new CartRepository();
        $cartService    = new CartService();
        $cart           = $cartService->getUserCart(Auth::user());
        $cartItems      = $cartRepository->getCartItems($cart);
        $product        = $this->products->find($id);
        if(!$product)
        {
            session()->flash('message', 'product not found in your favorites');
            return ;
        }
        Auth::user()->favorites()->detach($id);
        $cartItem = $cartItems->where('product_id',$id)->first();
        if(!$cartItem)
        {
            CartItem::create([
                'cart_id'    => $cart->id,
                'product_id' => $product->id,
            ]);
            session()->flash('message', 'product removed from your favorites to yor cart');
            $this->emit('updateCartItemsCount');
        }
        session()->flash('message', 'product already in your cart');
    }
}
