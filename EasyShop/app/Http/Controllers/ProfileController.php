<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {

    public function index() {
        return view('profile.index');
    }

    public function orders() {
        $user_id = Auth::user()->id;
        $orders = DB::table('orders_products')->leftJoin('products', 'products.id', '=', 'orders_products.products_id')->leftJoin('orders', 'orders.id', '=', 'orders_products.orders_id')->where('orders.user_id','=',$user_id)->get();
        return view('profile.orders', compact('orders'));
    }

}
