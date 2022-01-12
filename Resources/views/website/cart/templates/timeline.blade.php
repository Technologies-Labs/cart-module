<a wire:click="addCartItem()" title="" href="javascript:void(0);">
    <i style="color: {{$cssClass}}" class="icofont-shopping-cart mr-2"></i>
    @if (!$cssClass) إضافة إلى السلة @else  حذف من السلة @endif
    @include('components.loading')
</a>
