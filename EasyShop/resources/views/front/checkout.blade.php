@extends('front.master')

@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div><!--/breadcrums-->

        <div class="step-one">
            <h2 class="heading">Step1</h2>
        </div>




        <?php // form start here?>
        <form action="{{url('/')}}/formvalidate" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="shopper-info">
                            <p>Shopper Information</p>

                            <input type="text" name="fullname"  placeholder="Display Name" class="form-control"  value="{{ old('fullname') }}">

                            <span style="color:red">{{ $errors->first('fullname') }}</span>
                            <hr>

                            <input type="text" placeholder="State Name" name="state" class="form-control" value="{{ old('state') }}">                                

                            <span style="color:red">{{ $errors->first('state') }}</span>

                            <hr>
                            <input type="text" placeholder="Pincode" name="pincode" class="form-control" value="{{ old('pincode') }}">

                            <span style="color:red">{{ $errors->first('pincode') }}</span>

                            <hr>
                            <input type="text" placeholder="City Name" name="city" class="form-control" value="{{ old('city') }}">

                            <span style="color:red">{{ $errors->first('city') }}</span>

                            <hr>

                            <select name="country" class="form-control" >
                                <option value="{{ old('country') }}" selected="selected">Select country</option>
                                <option value="United States">United States</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="UK">UK</option>
                                <option value="India">India</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Ucrane">Ucrane</option>
                                <option value="Canada">Canada</option>
                                <option value="Dubai">Dubai</option>
                            </select>
                            <span style="color:red">{{ $errors->first('country') }}</span>




                            <?php /*   <a class="btn btn-primary" href="">Get Quotes</a>
                              <a class="btn btn-primary" href="">Continue</a>
                             * */ ?>
                            <br/>
                            <div align="right">  <input type="submit" value="Continue"></div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="order-message">
                            <p>Shipping Order</p>
                            <textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
                            <label><input type="checkbox"> Shipping to bill address</label>
                        </div>	
                    </div>					
                </div>
            </div>
        </form>
        <?php // form end here?>  

        <div class="review-payment">
            <h2>Review & Payment</h2>
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
                <tbody>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="images/cart/one.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">Colorblock Scuba</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>$59</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">$59</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="images/cart/two.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">Colorblock Scuba</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>$59</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">$59</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="images/cart/three.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">Colorblock Scuba</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>$59</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">$59</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Cart Sub Total</td>
                                    <td>$59</td>
                                </tr>
                                <tr>
                                    <td>Exo Tax</td>
                                    <td>$2</td>
                                </tr>
                                <tr class="shipping-cost">
                                    <td>Shipping Cost</td>
                                    <td>Free</td>										
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td><span>$61</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="payment-options">
            <span>
                <label><input type="checkbox"> Direct Bank Transfer</label>
            </span>
            <span>
                <label><input type="checkbox"> Check Payment</label>
            </span>
            <span>
                <label><input type="checkbox"> Paypal</label>
            </span>
        </div>
    </div>
</section> <!--/#cart_items-->


@endsection