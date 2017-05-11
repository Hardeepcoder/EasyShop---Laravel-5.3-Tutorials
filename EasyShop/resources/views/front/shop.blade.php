@extends('front.master')

@section('content')
<script>
$(document).ready(function(){
<?php $maxP = count($Products);
  for($i=0;$i<$maxP; $i++) {?>
    $('#successMsg<?php echo $i;?>').hide();
    $('#cartBtn<?php echo $i;?>').click(function(){
      var pro_id<?php echo $i;?> = $('#pro_id<?php echo $i;?>').val();

      $.ajax({
        type: 'get',
        url: '<?php echo url('/cart/addItem');?>/'+ pro_id<?php echo $i;?>,
        success:function(){
        $('#cartBtn<?php echo $i;?>').hide();
        $('#successMsg<?php echo $i;?>').show();
        $('#successMsg<?php echo $i;?>').append('product has been added to cart');
        }
      });

    });
    <?php }?>
});
</script>
<section id="advertisement">
    <div class="container">
      <h3 align="center">Products</h3>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">

                    <div class="price-range"><!--price-range-->

                                <div class="well">
                                   <h2>Price Range</h2>
                                    <div id="slider-range"></div>
                                    <br>
                                    <b class="pull-left">$
                                        <input size="2" type="text" id="amount_start" name="start_price"
                                               value="15" style="border:0px; font-weight: bold; color:green" readonly="readonly" /></b>

                                    <b class="pull-right">$
                                        <input size="2" type="text" id="amount_end" name="end_price" value="65"
                                               style="border:0px; font-weight: bold; color:green" readonly="readonly"/></b>
                                   </div>

                            </div><!--/price-range-->

                    <div class="brands_products"><!--brands_products-->
                        <div class="brands-name">
                              <h2>Brands</h2>
                                <ul class="nav nav-pills nav-stacked">

                                    <?php $cats = DB::table('pro_cat')->orderby('name', 'ASC')->get();?>

                                    @foreach($cats as $cat)
                                    <li class="brandLi"><input type="checkbox" id="brandId" value="{{$cat->id}}" class="try"/>
                                 <span class="pull-right">({{App\products::where('cat_id',$cat->id)->count()}})</span>
                                  <b>  {{ucwords($cat->name)}}</b></li>
                                   @endforeach
                                 <?php /*   <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                    <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                    <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                    <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                    <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                    <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                                  * */?>

                               </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="{{url('../')}}/theme/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right"  id="updateDiv" >

                 <div class="features_items"> <!--features_items-->
                      <b> Total Products</b>:  {{$Products->total()}}
                    <h2 class="title text-center">
                       <?php
                        if (isset($msg)) {
                            echo $msg;
                        } else {
                            ?> Features Item <?php } ?> </h2>

                    <?php if ($Products->isEmpty()) { ?>
                        sorry, products not found
                    <?php } else {
                      $countP=0;?>
                        @foreach($Products as $product)
                        <input type="hidden" id="pro_id<?php echo $countP;?>" value="{{$product->id}}"/>
                        <div class="col-sm-4" >
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product_details')}}">
                                            <img src="<?php echo $product->pro_img; ?>" alt="" />
                                        </a>

                                        <h2 id="price">
                                          @if($product->spl_price==0)
                                          ${{$product->pro_price}}
                                          @else
                                          <img src="{{Config::get('app.url')}}theme/images/shop/sale.png" style="width:60px"/>
                                        <span style="text-decoration:line-through; color:#ddd">
                                           ${{$product->pro_price}} </span>
                                           ${{$product->spl_price}}
                                          @endif

                                        </h2>

                                        <p><a href="{{url('/product_details')}}"><?php echo $product->pro_name; ?></a></p>
                                      <?php /*  <a href="{{url('/cart/addItem')}}/<?php echo $product->id; ?>"
                                           class="btn btn-default add-to-cart">
                                           <i class="fa fa-shopping-cart"></i>Add to cart</a> */?>
                                           <button class="btn btn-success add-to-cart"
                                           id="cartBtn<?php echo $countP;?>">Add to Cart</button>
                                           <div id="successMsg<?php echo $countP;?>" class="alert alert-success"></div>
                                    </div>

                                </div>
                                <div class="choose">
                                    <?php
                                    $wishData = DB::table('wishlist')->leftJoin('products', 'wishlist.pro_id', '=', 'products.id')->where('wishlist.pro_id', '=', $product->id)->get();
                                    $count = App\wishList::where(['pro_id' => $product->id])->count();
                                    ?>

                                    <?php if ($count == "0") { ?>
                                        <form action="{{url('/addToWishList')}}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{$product->id}}" name="pro_id"/>
                                            <p align="center">
                                                <input type="submit" value="Add to WishList" class="btn btn-primary"/>
                                            </p>
                                        </form>
                                    <?php } else { ?>
                                        <h5 style="color:green"> Added to <a href="{{url('/WishList')}}">wishList</a></h5>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <?php $countP++?>
                        @endforeach
                    <?php } ?>


                </div>
                <ul class="pagination">
                    {{ $Products->links()}}
                </ul>
            </div><!--features_items-->

        </div>
    </div>
</div>
</section>
@endsection
