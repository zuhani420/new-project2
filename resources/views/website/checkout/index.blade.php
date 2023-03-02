@extends('website.master')

@section('title')
    Checkout Page
@endsection

@section('body')
    <div class="container">
        <div class="breadcrumbs">
            <a href="#"><i class="las la-home"></i></a>
            <a href="#">Shop</a>
            <a href="#" class="active">Checkout</a>
        </div>
    </div>

    <!-- cart area -->
    <div class="cart_area section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-6">
                    <h4 class="shop_cart_title mb-4 ps-3">Billing details</h4>
                    <div class="billing_form">
                        <form action="{{route('new-order')}}" method="POST">
                            @csrf
                            <div class="row">
                                @if(!Session::get('customer_id'))
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Full Name<span>*</span></label>
                                        <input type="text" placeholder="Full Name" name="name"/>
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="single_billing_inp">
                                        <label>Email Address<span>*</span></label>
                                        <input type="email" placeholder="Email Address" name="email"/>
                                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="single_billing_inp">
                                        <label>Phone Number<span>*</span></label>
                                        <input type="number" placeholder="Phone Number" name="mobile"/>
                                        <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                    </div>
                                </div>
                                @endif

                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Delivery Address<span>*</span></label>
                                        <textarea name="delivery_address" rows="5" placeholder="Delivery Address"></textarea>
                                        <span class="text-danger">{{$errors->has('delivery_address') ? $errors->first('delivery_address') : ''}}</span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="single-form form-default">
                                        <label>Select Your Payment Method</label>
                                        <div>
                                            <label><input type="radio" name="payment_method" checked value="1" style="margin: 3px;"/>Cash On Delivery</label> &nbsp; &nbsp;
                                            <label><input type="radio" name="payment_method" value="2" style="margin: 3px;"/>Online</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="checkorder_agree custom_check check_2">
                                    <input type="checkbox" class="check_inp" hidden id="save-default">
                                    <label for="save-default" style="margin-left: 0px; font-size: 13px; padding-left: 25px;">Agree to our <a href="#" class="text-color">terms & conditions</a></label>
                                </div>

                                <div class="checkorder_btn">
                                    <button type="submit" class="default_btn rounded">Confirm order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <h4 class="shop_cart_title ps-3">Your order</h4>
                    <div class="checkout_order mt-5">
                        <h4>Your Order Summery</h4>
                        @php($sum = 0)
                        @foreach(Cart::getContent() as $cartProduct)
                        <div class="single_check_order">
                            <div class="checkorder_cont">
                                <h5>{{$cartProduct->name}}</h5>
                            </div>
                            <p class="checkorder_price">{{$cartProduct->price * $cartProduct->quantity}} Tk</p>
                        </div>
                            @php($sum = $sum + ($cartProduct->price * $cartProduct->quantity))
                        @endforeach
                        <hr/>
                        <div class="single_check_order">
                            <div class="checkorder_cont">
                                <h5>Cart Total</h5>
                            </div>
                            <p class="checkorder_price">{{$sum}} Tk</p>
                        </div>
                        <div class="single_check_order">
                            <div class="checkorder_cont">
                                <h5>Tax Amount</h5>
                            </div>
                            <p class="checkorder_price">{{$tax = $sum * 0.05}} Tk</p>
                        </div>
                        <div class="single_check_order">
                            <div class="checkorder_cont">
                                <h5>Shipping Cost</h5>
                            </div>
                            <p class="checkorder_price">{{$shipping = 500}} Tk</p>
                        </div>
                        <hr/>
                        <div class="single_check_order total">
                            <div class="checkorder_cont">
                                <h5>Total Payable</h5>
                            </div>
                            <p class="checkorder_price">{{$total_payable = $sum + $tax + $shipping}} Tk</p>
                        </div>
                        <?php
                            Session::put('order_total', $total_payable);
                            Session::put('tax_total', $tax);
                            Session::put('shipping_total', $shipping);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
