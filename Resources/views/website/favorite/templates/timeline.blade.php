<a wire:click="addFavoriteProduct()"  title="" href="javascript:void(0);"><i style="color: {{$favoriteCssClass}}" class="icofont-heart mr-2"></i>
    @if (!$favoriteCssClass) Add To Favorites @else Remove From Favorites @endif
    @include('components.loading')
</a>
