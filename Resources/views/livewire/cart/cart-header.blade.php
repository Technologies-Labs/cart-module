<li>
    <a href="#" title="cart" data-ripple="">
        <i class="ti-shopping-cart"></i>
        <span class="cart-items-count" >{{$itemsCount}}</span>
    </a>
    <div class="dropdowns">
        <span> <span class="cart-items-count">{{$itemsCount}}</span> New Shopping Cart</span>
        <ul class="drops-menu">

            @forelse($items as $item)
                <li>
                    <a href="" title="">
                        <img src="{{asset($item->product->image)}}" alt="">
                        <div class="mesg-meta">
                            <h6>{{$item->product->name}}</h6>
                            <span>{{$item->product->description}}</span>
                        </div>

                    </a>
                    <span wire:click="deleteCartItem({{$item->id}})"class="tag red" style="cursor: pointer;"><i class="ti-close"></i></span>

                </li>
            @empty
                <span>No New Shopping Cart</span>
            @endforelse

        </ul>
        <a href="{{route('user.cart.items')}}"  class="more-mesg">view more</a>
    </div>
</li>

