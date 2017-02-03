<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  //  public function __construct()
   // {
   //     $this->middleware('auth');
   // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
          return view('front.home');
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.home');
    }
    
    
     public function shop()
    {
        
        $Products = DB::table('products')->paginate(1);
        
        return view('front.shop', compact('Products'));
    }
    
    Public function product_details($id){
        
       $Products = DB::table('products')->where('id',$id)->get();
        
        return view('front.product_details', compact('Products'));
    }
    
     public function contact()
    {
        return view('front.contact');
    }
    
    public function search(Request $request){
        $search = $request->search_data;
         if($search==''){
            return view('front.home');
        }
        else{
         $Products = DB::table('products')->where('pro_name','like', '%'.$search.'%')->paginate(2);
         return view('front.shop', ['msg' =>'Results: '. $search ] , compact('Products'));
        }
    }
    
}
