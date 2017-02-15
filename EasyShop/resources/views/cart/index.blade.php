@extends('front.master')

@section('content')



<?php if ($cartItems->isEmpty()) { ?>
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div align="center">  <img src="{{asset('theme/images/cart/empty-cart.png')}}"/></div>

        </div>
    </section> <!--/#cart_items-->
<?php } else { ?>

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>

            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    @foreach($cartItems as $cartItem)
                    
              
                    <tbody>

                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="http://localhost/easyshop/upload/images/{{$cartItem->options->img}}" alt="" width="200px"></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">{{$cartItem->name}}</a></h4>
                                <p>Web ID: {{$cartItem->id}}</p>
                            </td>
                            <td class="cart_price">
                                <p>${{$cartItem->price}}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    {!! Form::open(['url' => ['cart/update',$cartItem->rowId], 'method'=>'put']) !!}
                                    <input type="button" value="-" id="moins{{$cartItem->id}}" onclick="minus{{$cartItem->id}}()" class="cart_quantity_down">
                                    <input type="text" size="3" value="{{$cartItem->qty}}" name="qty" id="count{{$cartItem->id}}" autocomplete="off" style="text-align:center" >
                                    <input type="button" value="+" id="plus{{$cartItem->id}}" onclick="plus{{$cartItem->id}}()" class="cart_quantity_up">


                                    <br>
                                    <input type="submit" value="Update" class="btn btn-primary" style="margin:5px">
                                    {!! Form::close() !!}
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">${{$cartItem->subtotal}}</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{url('/cart/remove')}}/{{$cartItem->rowId}}"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>


                    </tbody>  @endforeach
                </table>
            </div>

        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area">
                        <ul class="user_option">
                            <li>
                                <input type="checkbox">
                                <label>Use Coupon Code</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Use Gift Voucher</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Estimate Shipping & Taxes</label>
                            </li>
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Dillih</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field zip-field">
                                <label>Zip Code:</label>
                                <input type="text">
                            </li>
                        </ul>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span>${{Cart::subtotal()}}</span></li>
                            <li>Eco Tax <span>${{Cart::tax()}}</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>${{Cart::total()}}</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="{{url('/')}}/checkout">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->


    <script>
        @foreach($cartItems as $cartItem)
                var count{{$cartItem -> id}} = 1;
        var countEl{{$cartItem -> id}} = document.getElementById("count{{$cartItem->id}}");
        function plus{{$cartItem -> id}}(){
        count{{$cartItem -> id}}++;
        countEl.value = count{{$cartItem -> id}};
        }
        function minus{{$cartItem -> id}}(){
        if (count{{$cartItem -> id}} > 1) {
        count{{$cartItem -> id}}--;
        countEl{{$cartItem -> id}}.value = count{{$cartItem -> id}};
        }
        }
        @endforeach
    </script>

<?php } ?>
@endsection


