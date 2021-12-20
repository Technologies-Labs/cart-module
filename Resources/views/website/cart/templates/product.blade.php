<a href="javascript:void(0);" wire:click="addCartItem()" title="" class="main-btn" style="margin-right: 20px;">
    <i class="icofont-cart-alt mr-2"></i>
    @if (!$cssClass)
    Add To Cart @else Remove From Cart
    @endif
    @include('components.loading')
</a>

{{-- <a  title="" href="javascript:void(0);">
    <i style="color: {{$cssClass}}" class="icofont-shopping-cart mr-2"></i>


</a> --}}
