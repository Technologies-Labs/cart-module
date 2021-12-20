<section>
    @php
        use Modules\Product\Enum\ProductEnum;
    @endphp
    <div class="gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="page-contents" class="row merged20">
                        <div class="col-lg-12">
                            <div class="main-wraper">
                                <h4 class="main-title">Product Cart</h4>
                                <div class="cart-table">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($items as $item)
                                            <tr>
                                                <td>
                                                    @include('components.loading')
                                                    <div wire:loading wire:target="items" class="sp sp-circle"></div>
                                                    @can('cart-item-delete')
                                                    <span class="edit-cart" wire:click="deleteCartItem({{$item->id}})"><i
                                                            class="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash-2">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                                            </svg></i>
                                                    </span>
                                                    @endcan

                                                    <figure><img class="img-fluid" width="60" height="60" src="{{ asset('storage') }}/{{ProductEnum::IMAGE.$item->product->image}}" alt="">
                                                    </figure>
                                                    <div class="item-meta">
                                                        <h6>{{$item->product->name}}</h6>
                                                        <span>{{$item->product->description}}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>{{$item->product->price}}</span>
                                                </td>
                                                <td>
                                                    <span>##</span>
                                                </td>
                                                <td>
                                                    <span>##</span>
                                                </td>
                                            </tr>
                                            @empty

                                            @endforelse

                                        </tbody>
                                    </table>

                                    @if(isset($items) && !empty($items))
                                    <div class="cart-update">
                                        <a href="javascript:void(0);" onclick="confirm('Are you sure?'); return false;"
                                            wire:click="deleteCartItems">Delete Cart Items</a>
                                    </div>
                                    @endif


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
