<?php

namespace Modules\Cart\Repositories;

use App\Models\User;

class FavoriteRepository
{
    /**
     * Get User Favorite Products
     */
    public function getUserFavoriteProduct(User $user)
    {
        return $user->favorites;
    }
}
