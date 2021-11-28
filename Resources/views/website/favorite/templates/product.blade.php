<a wire:click="addFavoriteProduct()" href="javascript:void(0);" title="">
    <i style="color: {{$favoriteCssClass}}" class="icofont-heart mr-2"></i>
    @if (!$favoriteCssClass) Add To Favorites @else Remove From Favorites @endif
    @include('components.loading')
</a>

