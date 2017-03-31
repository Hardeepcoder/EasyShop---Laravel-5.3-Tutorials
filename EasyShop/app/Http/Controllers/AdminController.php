<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\products;
use Illuminate\Http\Request;
use Storage;
use App\pro_cat;
use Image;
use App\products_properties;

class AdminController extends Controller {

    public function index() {

    return view('admin.index');
    }

    public function addpro_form(){
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

        $Products = DB::table('pro_cat')->rightJoin('products', 'products.cat_id', '=', 'pro_cat.id')->get(); // now we are fetching all products


        return view('admin.products', compact('Products'));
    }

    public function add_cat() {

        return view('admin.addCat');
    }

    // add cat
    public function catForm(Request $request) {
        //echo $request->cat_name;
        //return 'update query here';
        $pro_cat = new pro_cat;

        $pro_cat->name = $request->cat_name;
        $pro_cat->status = '0'; // by defalt enable
        $pro_cat->save();

        $cats = DB::table('pro_cat')->orderby('id', 'DESC')->get();

        return view('admin.categories', compact('cats'));
    }

    // edit form for cat
    public function CatEditForm(Request $request) {
        $catid = $request->id;
        $cats = DB::table('pro_cat')->where('id', $catid)->get();
        return view('admin.CatEditForm', compact('cats'));
    }

    //update query to edit cat
    public function editCat(Request $request) {

        $catid = $request->id;
        $catName = $request->cat_name;
        $status = $request->status;
        DB::table('pro_cat')->where('id', $catid)->update(['name' => $catName, 'status' => $status]);

        $cats = DB::table('pro_cat')->orderby('id', 'DESC')->get();

        return view('admin.categories', compact('cats'));
    }

    public function view_cats() {

        $cats = DB::table('pro_cat')->get();

        return view('admin.categories', compact('cats'));
    }

    public function ProductEditForm($id) {
        //$pro_id = $reqeust->id;
        $Products = DB::table('products')->where('id', '=', $id)->get(); // now we are fetching all products
        return view('admin.editPproducts', compact('Products'));
    }

    public function editProduct(Request $request) {

        $proid = $request->id;

        $pro_name = $request->pro_name;
        $cat_id = $request->cat_id;
        $pro_code = $request->pro_code;
        $pro_price = $request->pro_price;
        $pro_info = $request->pro_info;
        $spl_price = $request->spl_price;

        DB::table('products')->where('id', $proid)->update([
            'pro_name' => $pro_name,
            'cat_id' => $cat_id,
            'pro_code' => $pro_code,
            'pro_price' => $pro_price,
            'pro_info' => $pro_info,
            'spl_price' => $spl_price,
        ]);


        return redirect('/admin/products');
        //$Products = DB::table('pro_cat')->rightJoin('products','products.cat_id', '=', 'pro_cat.id')->get(); // now we are fetching all products
        //return view('admin.products', compact('Products'));
    }

    public function ImageEditForm($id) {
        $Products = DB::table('products')->where('id', '=', $id)->get(); // now we are fetching all products
        return view('admin.ImageEditForm', compact('Products'));
    }

    public function editProImage(Request $request) {

        $proid = $request->id;

        $file = $request->file('new_image');

        $filename = time() . '.' . $file->getClientOriginalName();

        $S_path = 'upload/images/small';
        $M_path = 'upload/images/medium';
        $L_path = 'upload/images/large';

        $img = Image::make($file->getRealPath());
        //$img->crop(300, 150, 25, 25);
        $img->resize(100, 100)->save($S_path . '/' . $filename);
        $img->resize(500, 500)->save($M_path . '/' . $filename);
        $img->resize(1000, 1000)->save($L_path . '/' . $filename);



       // $file->move($path, $filename);


        DB::table('products')->where('id', $proid)->update(['pro_img' => $filename]);
        return redirect('/admin/products');
        //echo 'done';
        //  $Products = DB::table('products')->get(); // now we are fetching all products
        //  return view('admin.products', compact('Products'));
    }

    //for delete cat
    public function deleteCat($id) {

        //echo $id;
        DB::table('pro_cat')->where('id', '=', $id)->delete();


        $cats = DB::table('pro_cat')->get();

        return view('admin.categories', compact('cats'));
    }

  public function sumbitProperty(Request $request){

    $properties = new products_properties;
    $properties->pro_id = $request->pro_id;
    $properties->size = $request->size;
    $properties->color = $request->color;
    $properties->p_price = $request->p_price;
    $properties->save();

    return redirect('/admin/ProductEditForm/'.$request->pro_id);

  }

  public function editProperty(Request $request){
    //dd($request->all());


         $uptProts = DB::table('products_properties')
          ->where('pro_id', $request->pro_id)
          ->where('id', $request->id)
          ->update($request->except('_token'));
          if($uptProts){
          return back()->with('msg', 'updated');
        }else {
        return back()->with('msg', 'check value again');
        }


  }

}
