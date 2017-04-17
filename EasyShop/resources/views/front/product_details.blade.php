@extends('front.master')

@section('content')
<script>
$(document).ready(function(){
$('#addToCart').hide();
$('#addToCart_default').show();
 $('#size').change(function(){
   var size = $('#size').val();
var proDum = $('#proDum').val();


      $.ajax({
          type: 'get',
          dataType: 'html',
          url: '<?php echo url('/selectSize');?>',
          data: "size=" + size + "& proDum=" + proDum,
          success: function (response) {
              console.log(response);
              $('#price').html(response);
              $('#addToCart').hide();
              $('#addToCart_default').show();

              <?php for($i=1;$i<10;$i++){?>
                var colorValue<?php echo $i;?> = $('#colorValue<?php echo $i;?>').val();
              $('#colorClicked<?php echo $i;?>').click(function(){

              // pass color values to color function in Controller
              $.ajax({
                  type: 'get',
                  dataType: 'html',
                  url: '<?php echo url('/selectColor');?>',
                  data: "size=" + size + "& proDum=" + proDum + "& color=" + colorValue<?php echo $i;?>,
                  success: function (response) {
                      console.log(response);
                        $('#price').html(response);
                      $('#addToCart').show();
                      $('#addToCart_default').hide();


                  }
              });

                });
               <?php }?>
          }
      });


 });

});
</script>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">

                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->


                    <div class="shipping text-center"><!--shipping-->
                        <img src="{{Config::get('app.url')}}/theme/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>
            @foreach($Products as $value)
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="<?php echo $value->pro_img; ?>" alt="" />
                            <h3>ZOOM</h3>
                        </div>

                    </div>
                    <div class="col-sm-7">

                        <div class="product-information"><!--/product-information-->

                          @if($value->new_arrival==1)
                            <img src="{{Config::get('app.url')}}theme/images/product-details/new.jpg"
                              class="newarrival" alt="" />
                            @endif
                            <h2><?php echo ucwords($value->pro_name); ?></h2>
                            <p>Web Code: <?php echo $value->pro_code; ?></p>
                              <form action="{{url('/cart/addItem')}}/<?php echo $value->id; ?>">
                              <span>
                                  <span id="price">
                                    @if($value->spl_price ==0)
                                    ${{$value->pro_price}}
                                     <input type="hidden" value="{{$value->pro_price}}"
                                      name="newPrice"/>
                                      @else
                                    <b style="text-decoration:line-through; color:#ddd">
                                      ${{$value->pro_price}} </b>
                                       ${{$value->spl_price}}
                                       <input type="hidden" value="{{$value->spl_price}}"
                                        name="newPrice"/>
                                      @endif

                                  </span>
                                  <label>Quantity:</label>
                                    <input type="number" size="2" value="1" id="qty"  autocomplete="off"
                                     style="text-align:center; max-width:50px;" MIN="1" MAX="30">
                                     <button class="btn btn-fefault cart" id="addToCart_default">
                                         <i class="fa fa-shopping-cart"></i>
                                         Add to cart
                                     </button>
                                      <button class="btn btn-fefault cart" id="addToCart">
                                          <i class="fa fa-shopping-cart"></i>
                                          Add to cart
                                      </button>
                                    <input type="hidden" value="<?php echo $value->id; ?>" id="proDum"/>
                              </span>
                            <p><b>Availability:</b> <?php echo $value->stock; ?> In Stock</p>

                            <?php $sizes = DB::table('products_properties')
                            ->select('size')
                            ->groupBy('size')
                            ->where('pro_id',$value->id)->groupBy('size')->get();?>
                            @if(count($sizes)!=0)
                            <select name="size" id="size">
                              <option value="">Select Size to see color</option>
                              @foreach ($sizes as $size)
                              <option>{{$size->size}}</option>
                              @endforeach
                            </select>
                            @endif
                          </form>

                            <?php
                            //wishlist Code start
                            if(Auth::check()){
                            $wishData = DB::table('wishlist')->leftJoin('products', 'wishlist.pro_id', '=', 'products.id')->where('wishlist.pro_id', '=',$value->id)->get();

                            //if($wishData==""){ echo 'empty'; } else { echo 'filled';}
                            $count = App\wishList::where(['pro_id' => $value->id])->count();
                            ?>
                          <?php if($count=="0"){?>
                            <form action="{{url('/addToWishList')}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{$value->id}}" name="pro_id"/>
                                <input type="submit" value="Add to WishList" class="btn btn-success"/>
                            </form>
                          <?php } else {?>
                            <h5 style="color:green"> Added to <a href="{{url('/WishList')}}">wishList</a></h5>
                          <?php }
                            }?>


                        </div><!--/product-information-->

                        <?php  $altImgs = DB::table('alt_images')->where('proID', $value->id)->get();   ?>
                        @if(count($altImgs)!=0)
                              <div class="col-md-12">

                                <h2 align="Center">Alternative Images</h2>
                                @foreach($altImgs as $altImg)
                                <div class="col-md-2" style="margin:5px">
                                  <img src="{{Config::get('app.url')}}/public/img/alt_images/{{$altImg->alt_img}}"
                                  style="width:80px; height:80px;"/>
                                </div>
                                @endforeach

                              </div>
                              @endif
                    </div>
                </div><!--/product-details-->
    <?php $reviews = DB::table('reviews')->get();
    $count_reviews = count($reviews);?>
            <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
                            <li><a href="#tag" data-toggle="tab">Tag</a></li>
                            <li ><a href="#reviews" data-toggle="tab">Reviews ({{$count_reviews}})</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="details" >
                          <p>{{ $value->pro_info}}</p>
                        </div>

                        <div class="tab-pane fade" id="tag" >
                          <li>tag1</li>   <li>tag2</li>
                        </div>

                        <div class="tab-pane fade " id="reviews" >
                            <div class="col-sm-12">

                              @foreach($reviews as $review)
                                <ul>
                                    <li><a href=""><i class="fa fa-user"></i>{{$review->person_name}}</a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i>
                                      {{date('H: i', strtotime($review->created_at))}}</a></li>
                                    <li><a href=""><i class="fa fa-calendar-o"></i>
                                        {{date('F j, Y', strtotime($review->created_at))}}</a></li>
                                </ul>
                                <p>{{$review->review_content}}</p>
                                @endforeach
                                <p><b>Write Your Review</b></p>

                                <form action="{{url('/addReview')}}" method="post">
                                  {{ csrf_field() }}
                                    <span>
                                        <input type="text" name="person_name" placeholder="Your Name"/>
                                        <input type="email", name="person_email" placeholder="Email Address"/>
                                    </span>
                                    <textarea name="review_content" ></textarea>

                                    <button type="submit" class="btn btn-default pull-right">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div><!--/category-tab-->

                     <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">recommended items</h2>
                            @include('front.recommends')
                        </div><!--/recommended_items-->

            </div>

            @endforeach
        </div>
    </div>
</section>


@endsection
