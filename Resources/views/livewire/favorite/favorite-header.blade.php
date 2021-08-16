<li>
    <a href="#" title="favourites" data-ripple=""><i class="ti-heart"></i><span>{{$productsCount}}</span></a>
    <div class="dropdowns">
        <span>{{$productsCount}} New Favourites</span>
        <ul class="drops-menu">

            @forelse($products as $product)
                <li>
                    <a href="" title="">
                        <img src="{{asset('assets/images/products/')}}{{$product->image}}" alt="">
                        <div class="mesg-meta">
                            <h6>{{$product->name}}</h6>
                            <span>{{$product->description}}</span>
                        </div>
                    </a>
                    <span wire:click="deleteFavoriteProduct({{$product->id}})" class="tag red" style="cursor: pointer"><i class="ti ti-close"></i></span>
                </li>
            @empty
                <span>No New Favourites</span>
            @endforelse

        </ul>
        <a href="" title="" class="more-mesg">view more</a>
    </div>
</li>
