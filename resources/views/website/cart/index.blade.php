@extends('website.master')

@section('title')
    Product Cart Page
@endsection

@section('body')
    <div class="container">
        <div class="breadcrumbs">
            <a href="index-1.html"><i class="las la-home"></i></a>
            <a href="#" class="active">Shopping Cart</a>
        </div>
    </div>

    <!-- shopping cart -->
    <div class="cart_area section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <h6 class="shop_cart_title sopcart_ttl d-none d-lg-flex">
                        <span style="width: 43%;">Product</span>
                        <span style="width: 29%;">Quantity</span>
                        <span>Subtotal</span>
                    </h6>
                    <div class="shop_cart_wrap">
                        @php($sum = 0)
                        @foreach($cart_products as $cart_product)
                        <div class="single_shop_cart d-flex align-items-center flex-wrap">
                            <div class="cart_img mb-4 mb-md-0">
                                <img loading="lazy" src="{{asset($cart_product->attributes->image)}}" alt="#" style="width: 100px;"/>
                            </div>
                            <div class="cart_cont">
                                <a href="{{route('detail', ['id' => $cart_product->id])}}">
                                    <h5>{{$cart_product->name}}</h5>
                                </a>

                                <p class="text-success">Category: {{$cart_product->attributes->category}}</p>
                                <p class="text-success">Brand: {{$cart_product->attributes->brand}}</p>
                                <p class="price">Price: {{$cart_product->price}} Tk</p>
                            </div>

                            <div>
                                <form action="{{route('cart.update', ['id' => $cart_product->id])}}" method="POST">
                                    @csrf
                                    <input type="number" value="{{$cart_product->quantity}}" name="quantity" min="1" class="form-control" style="width: 83px;"/>
                                    <input type="submit" value="update" class="btn btn-success"/>
                                </form>
                            </div>

                            <div class="cart_price ms-auto">
                                <p>Tk. {{$cart_product->price * $cart_product->quantity}}</p>
                            </div>
                            <div class="cart_remove ms-auto">
                                <a href="{{route('cart.remove', ['id' => $cart_product->id])}}">
                                    <i class="icon-trash"></i>
                                </a>

                            </div>
                        </div>
                            @php($sum = $sum + ($cart_product->price * $cart_product->quantity))
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 mt-4 mt-lg-0">
                    <div class="cart_summary">
                        <h4>Order Summary</h4>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p>Subtotal</p>
                            <p>{{$sum}} Tk</p>
                        </div>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p>Tax Amount</p>
                            <p>{{$tax = $sum * 0.05}} Tk</p>
                        </div>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p>Shipping</p>
                            <p>{{$shipping = 500}} Tk</p>
                        </div>
                        <div class="cart_sum_total d-flex justify-content-between">
                            <p>Total Payable :</p>
                            <p>{{$total_payable = $sum + $tax + $shipping}} Tk</p>
                        </div>
                        <div class="cart_sum_coupon">
                            <input type="text" placeholder="Enter coupon">
                            <button>apply</button>
                        </div>
                        <div>
                            <a href="{{route('checkout')}}" class="btn btn-danger">Procceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
