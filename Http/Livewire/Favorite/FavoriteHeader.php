<?php

namespace Modules\CartModule\Http\Livewire\Favorite;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\CartModule\Repositories\FavoriteRepository;

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

        return view('cartmodule::livewire.favorite.favorite-header');
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
}
