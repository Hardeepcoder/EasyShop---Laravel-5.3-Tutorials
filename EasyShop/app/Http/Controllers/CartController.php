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
        
        Cart::add($id,$products->pro_name, 1, $products->pro_price, ['img' => $products->pro_img,'stock' => $products->stock]);
         return back(); 
    }
    
    public function destroy($id){
        Cart::remove($id);
        return back(); // will keep same page
    }
    
    public function update(Request $request, $id)
    {
        $qty = $request->qty;
        $proId = $request->proId;
         $products = products::find($proId);
        $stock = $products->stock;
     
      
        if($qty<$stock){
            
            $msg = 'Cart is updated';
           Cart::update($id,$request->qty);
           return back()->with('status',$msg); 
           
        }else{
             $msg = 'Please check your qty is more than product stock';
              return back()->with('error',$msg); 
        }
 
    }
  
}
