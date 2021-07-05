<?php

namespace Modules\CartModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\CartModule\Entities\Cart;

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
        $carts=Cart::get();
        return view('cartmodule::dashboard.carts.index',compact('carts'));

    }
}
