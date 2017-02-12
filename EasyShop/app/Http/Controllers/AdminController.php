<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\products;
use Illuminate\Http\Request;
use Storage;



class AdminController extends Controller {

    public function index() {
        $data = DB::table('pro_cat')->leftJoin('products', 'products.cat_id', '=', 'pro_cat.id')->get();

      return view('admin.home', compact('data'));
    }
    
  

    public function add_product(Request $request) {
        $file = $request->file('pro_img');
        $filename = $file->getClientOriginalName();

        $path = 'upload/images';
        $file->move($path, $filename);

        $products = new products;
        $products->pro_name = $request->pro_name;
        $products->pro_code = $request->pro_code;
        $products->pro_price = $request->pro_price;
        $products->pro_info = $request->pro_info;
        $products->spl_price = $request->spl_price;
        $products->pro_img = $filename;
        $products->save();
        return view('admin.home');
        //  return redirect()->action('AdminController@index')->with('status', 'Product Uploaded!');
    }

}
