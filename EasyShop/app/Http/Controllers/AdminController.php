<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    
    public function add_product(Request $request){
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
