<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart; // for cart lib
use Illuminate\Http\Request;
use App\products;
class CartController extends Controller
{
    public function index(){
        $cartItems = Cart::content(); 
        return view('cart.index', compact('cartItems'));
        
    }
    
    public function addItem($id){
        $products = products::find($id); // get prodcut by id
        
        Cart::add($id,$products->pro_name, 1, $products->pro_price);
         return back(); 
    }
    
    public function destroy($id){
        Cart::remove($id);
        return back(); // will keep same page
    }
    
    public function update(Request $request, $id)
    {
        
     //dd($request->qty);
          Cart::update($id,$request->qty);
         return back(); 
    }
  
}
