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
                <div wire:loading wire:target="items" class="sp sp-circle"></div>
                @if ('favourite-item-delete')
                <div class="edit-cart" wire:click="deleteFavoriteItem({{$item->id}})"><i class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trash-2">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg></i>
                </div>
                @endif

                <figure><img src="{{ asset('storage') }}/{{$item->image}}" alt=""></figure>
                <div class="item-meta">
                    <h6>{{$item->name}}</h6>
                    <span>{{$item->description}}</span>
                </div>
            </td>
            <td>
                <span>{{$item->price}}</span>
            </td>
            <td>
                <span>{{$item->count}}</span>
            </td>
            <td>
                <span>##</span>
            </td>
        </tr>
        @empty

        @endforelse

    </tbody>


</table>
