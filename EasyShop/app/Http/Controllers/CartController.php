<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart; // for cart lib
use Illuminate\Http\Request;
use App\products;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function index(){
        $cartItems = Cart::content();
        return view('cart.index', compact('cartItems'));

    }

    public function addItem(Request $request, $id){
        $products = products::find($id); // get prodcut by id
        if(isset($request->newPrice))
        {
          $price = $request->newPrice; // if size select
        }
        else{
          $price = $products->pro_price; // default price
        }
        Cart::add($id,$products->pro_name,1,$price,['img' => $products->pro_img,'stock' => $products->stock]);

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
           $rowId = $request->rowId;
            Cart::update($rowId,$qty); // for update
            $cartItems = Cart::content(); // display all new data of cart
            return view('cart.upCart', compact('cartItems'))->with('status', 'cart updated');
            /*  $products = products::find($proId);
              $stock = $products->stock;
              if($qty<$stock){
                  $msg = 'Cart is updated';
                 Cart::update($id,$request->qty);
                 return back()->with('status',$msg);
              }else{
                   $msg = 'Please check your qty is more than product stock';
                    return back()->with('error',$msg);
              }        */

          }


}
