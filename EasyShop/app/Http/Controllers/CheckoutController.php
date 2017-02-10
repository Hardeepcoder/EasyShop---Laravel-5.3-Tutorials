<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\address;
use App\orders;

class CheckoutController extends Controller {

    public function index() {
        // check for user login
        if (Auth::check()) {
              $cartItems = Cart::content(); 
            return view('front.checkout', compact('cartItems'));
        } else {
            return redirect('login');
        }
    }

    public function formvalidate(Request $request) {
        $this->validate($request, [
            'fullname' => 'required|min:5|max:35',
            'pincode' => 'required|numeric',
            'city' => 'required|min:5|max:25',
            'state' => 'required|min:5|max:25',
            'country' => 'required']);

        $userid = Auth::user()->id;

        $address = new address;
        $address->fullname = $request->fullname;
        $address->state = $request->state;
        $address->city = $request->city;
        $address->country = $request->country;

        $address->user_id = $userid;
        $address->pincode = $request->pincode;
        $address->payment_type = $request->pay;
        $address->save();
       
        
        orders::createOrder();
        
        Cart::destroy();
        return redirect('thankyou');
    }

}
