<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\products;
use Illuminate\Http\Request;
use Storage;

class AdminController extends Controller {

    public function index() {
        $cat_data = DB::table('pro_cat')->get();

        return view('admin.home', compact('cat_data'));
    }

    public function add_product(Request $request) {
        $file = $request->file('pro_img');
        $filename = $file->getClientOriginalName();

        $path = 'upload/images';
        $file->move($path, $filename);

        $products = new products;
        $products->pro_name = $request->pro_name;
        $products->cat_id = $request->cat_id;
        $products->pro_code = $request->pro_code;
        $products->pro_price = $request->pro_price;
        $products->pro_info = $request->pro_info;
        $products->spl_price = $request->spl_price;
        $products->pro_img = $filename;
        $products->save();
        
        $cat_data = DB::table('pro_cat')->get();

        return view('admin.home', compact('cat_data'));
      
        //  return redirect()->action('AdminController@index')->with('status', 'Product Uploaded!');
    }
    
     public function view_products() {
    
         return view('admin.products');
     }
     
      public function add_cat() {
    
          return view('admin.addCat');
     }
     
      public function view_cats() {
    
          return view('admin.categories');
     }

}
