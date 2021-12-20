<a wire:click="addCartItem()" title="" href="javascript:void(0);">
    <i style="color: {{$cssClass}}" class="icofont-shopping-cart mr-2"></i>
    @if (!$cssClass) Add To Cart @else Remove From Cart @endif
    @include('components.loading')
</a>
