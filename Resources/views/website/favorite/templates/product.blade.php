<a wire:click="addFavoriteProduct()" href="javascript:void(0);" title="">
    <i style="color: {{$favoriteCssClass}}" class="icofont-heart mr-2"></i>
    @if (!$favoriteCssClass) إضافة إلى المفضلة @else  حذف من المفضلة @endif
    @include('components.loading')
</a>

