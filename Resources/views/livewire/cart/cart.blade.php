<div>
    <section>
        <div class="gap100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-sec">
                            <table class="table table-responsive">
                                <tr>
                                    <th>Product name</th>
                                    <th>Product description</th>
                                    <th>price</th>
                                </tr>
                                @forelse($items as $item)
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);" class="delete-cart" wire:click="deleteCartItem({{$item->id}})" ><i class="ti-close"></i></a>
                                            <div class="cart-avatar">
                                                <img src={{asset($item->product->image)}} alt="">
                                            </div>
                                            <div class="cart-meta">
                                                <span>{{$item->product->name}}</span>
                                            </div>
                                       </td>
                                        <td>
                                            <div class="cart-meta">
                                                <span>{{$item->product->description}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="cart-prices">
                                                <del>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$item->product->old_price}}</span>
                                                </del>
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$item->product->price}}</span>
                                                </ins>
                                            </span>
                                        </td>
                                    </tr>
                                    @empty

                                @endforelse
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="amount-area">
                            @if(isset($items) && !empty($items))
                                <a href="javascript:void(0);" wire:click="deleteCartItems" onclick="confirm('Are you sure?'); return false;"class="update-cart">Delete Cart Items</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
