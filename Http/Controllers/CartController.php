<?php

namespace Modules\CartModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Modules\CartModule\Entities\Cart;
use Modules\CartModule\Entities\CartItem;
use Modules\ProductModule\Entities\Product;

class CartController extends Controller
{
    // public function __construct(){
    //     $this->middleware('permission:cart-list',     ['only' => ['show', 'index']]);
    // }
    // /**
    //  * Display a listing of the resource.
    //  * @return Renderable
    //  */
    public function index()
    {
        $cart=Cart::get();
        return view('cartmodule::dashboard.carts.index',compact('carts'));
    }

    // public function addProduct($id)
    // {
    //     $cart=Cart::find(1);
    //     $cart->products()->attach($id,['count'=>3]);
    //     if($cart)
    //     return response()->json([
    //         'status'=>true,
    //         'msg'=>'تم انشاء  بنجاح',
    //     ]);
    // }


    //     public function cart($id)
    // {

    //     $product = CartItem::where('cart_id',Auth::user()->id)->where('product_id',$id)->get();
    //     if (!$product) {
    //         Auth::user()->cart->products()->detach($id);
    //         echo '<i class="fa  fa-shopping-cart " data-toggle="tooltip" title=" اضافة الى السلة"></i>';
    //     } else {
    //         Auth::user()->cart->products()->attach($id);
    //         echo '<i class="fa  fa-shopping-cart filled" data-toggle="tooltip" title=" اضافة الى السلة"></i>';
    //     }


    // }
}
