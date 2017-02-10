<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\products;

use Illuminate\Database\Eloquent\Model;

class orders extends Model {

    protected $fillable = ['total', 'status'];

    public function orderFields() {
        return $this->belongsToMany(products::class)->withPivot('qty', 'total');
    }

    public static function createOrder() {

        // for order inserting to database

        $user = Auth::user();
        $order = $user->orders()->create(['total' => Cart::total(), 'status' => 'pending']);


        $cartItems = Cart::content();
        foreach ($cartItems as $cartItem) {
            $order->orderFields()->attach($cartItem->id, ['qty' => $cartItem->qty, 'tax' => Cart::tax(), 'total' => $cartItem->qty * $cartItem->price]);
        }
    }

}
