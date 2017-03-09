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
                    <?php } else { ?>
                        @foreach($Products as $product)
                        <div class="col-sm-4" >
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product_details')}}">
                                            <img src="<?php echo $product->pro_img; ?>" alt="" />
                                        </a>
                                        <h2 id="price">$<?php echo $product->pro_price; ?></h2>

                                        <p><a href="{{url('/product_details')}}"><?php echo $product->pro_name; ?></a></p>
                                        <a href="{{url('/cart/addItem')}}/<?php echo $product->id; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <a href="{{url('/product_details')}}/<?php echo $product->id; ?>">
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>$<?php echo $product->pro_price; ?></h2>
                                                <p><?php echo $product->pro_name; ?></p>
                                                <a href="{{url('/cart/addItem')}}/<?php echo $product->id; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div></a>
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

                        @endforeach
                    <?php } ?>


                </div>
                <ul class="pagination">
                    {{ $Products->links()}}
                </ul>