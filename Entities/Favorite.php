<?php

namespace Modules\CartModule\Entities;

use Database\Factories\FavoritesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    protected static function newFactory()
    {
        return FavoritesFactory::new();
    }
}
