<?php

namespace Modules\CartModule\Http\Livewire\Favorite;

use App\Traits\ModalHelper;
use Auth;
use Livewire\Component;
use Modules\CartModule\Repositories\FavoriteRepository;

class FavoriteProducts extends Component
{
    use ModalHelper;
    public $items;
    public $user;
    private $favoriteRepository;

    public function boot()
    {
        $this->user = Auth::user();

    }

    public function __construct()
    {
        $this->favoriteRepository = new FavoriteRepository();
    }
    public function mount()
    {
        $this->items = $this->favoriteRepository->getUserFavoriteProduct($this->user);
    }
    public function render()
    {
        
        return view('cartmodule::livewire.favorite.favorite-products');
    }

    public function deleteFavoriteItem($id)
    {
        $product  = $this->items->find($id);
        if(!$product)
        {
            $this->modalClose('','error','product not found in your cart','product not found in your cart');
            return ;
        }
        $this->items  = $this->items->filter(function ($item) use ($product) {
            return $item->id != $product->id;
        });
        $this->user->favorites()->detach($id);
        $this->modalClose('','success','product deleted successfully from your cart','product deleted successfully from your cart');
        // $this->emit('updateCartItemsCount');

    }
}
