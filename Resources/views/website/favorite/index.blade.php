@extends('layouts.simple.master')

@section('content')
<section>
    <div class="gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="page-contents" class="row merged20">
                        <div class="col-lg-12">
                            <div class="main-wraper">
                                <h4 class="main-title">Product Favorite</h4>
                                <div class="cart-table">
                                    @livewire('cart::favorite.favorite-products')

                                    {{-- @if(isset($items) && !empty($items))
                                        <div class="cart-update">
                                            <a href="javascript:void(0);" onclick="confirm('Are you sure?'); return false;"  wire:click="deleteCartItems"  >Delete Cart Items</a>
                                        </div>
                                    @endif --}}


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <livewire:cart::cart.cart/> --}}
@endsection


