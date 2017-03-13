<?php
$products1 = DB::table('recommends')
        ->leftJoin('products','recommends.pro_id','products.id')
        ->select('pro_id','pro_name','pro_img','pro_price', DB::raw('count(*) as total'))
        ->groupBy('pro_id','pro_name','pro_img','pro_price')
        ->orderby('total','DESC')
        ->take(3)
        ->get();
if(Auth::check()){
 $products2 = DB::table('recommends')
         ->leftJoin('products','recommends.pro_id','products.id')     
         ->where('uid',Auth::user()->id)
         ->inRandomOrder()
        ->take(3)
        ->get();
}else{
 $products2 = DB::table('recommends')
         ->leftJoin('products','recommends.pro_id','products.id')
         ->inRandomOrder()
        ->take(3)
        ->get();
}    
?>
<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">	
                                      @foreach($products1 as $p)
                                       <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                       <a href="{{url('/product_details')}}/{{$p->pro_id}}"> 
                                                           <img src="{{$p->pro_img}}" alt="" /></a>
                                                        <h2>${{$p->pro_price}}</h2>
                                                        <p>  <a href="{{url('/product_details')}}/{{$p->pro_id}}">{{$p->pro_name}}</a></p>
                                                        <a href="{{url('/cart/addItem')}}/{{$p->pro_id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                      @endforeach
                                    </div>
                                    <div class="item">	
                                         @foreach($products2 as $p)
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <a href="{{url('/product_details')}}/{{$p->pro_id}}"> 
                                                            <img src="{{$p->pro_img}}" alt="" /></a>
                                                        <h2>${{$p->pro_price}}</h2>
                                                        <p>  <a href="{{url('/product_details')}}/{{$p->pro_id}}">{{$p->pro_name}}</a></p>
                                                        <a href="{{url('/cart/addItem')}}/{{$p->pro_id}}" class="btn btn-default add-to-cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            Add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                      @endforeach
                                      
                                    </div>
                                </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>			
                            </div>