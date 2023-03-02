@extends('admin.master')

@section('title')
    Order Detail Page
@endsection

@section('body')
    <div class="card card-body">
        <h4>All Detail Information</h4>
        <div class="row">
            <h4 class="text-center text-success">{{session('message')}}</h4>
            <table class="table table-bordered table-hover table-striped" style="width:100%">
                <tr>
                    <th>Order No</th>
                    <th>{{$order->id}}</th>
                </tr>

                <tr>
                    <th>Order Date</th>
                    <th>{{$order->order_date}}</th>
                </tr>

                <tr>
                    <th>Order Total</th>
                    <th>{{$order->order_total}}</th>
                </tr>

                <tr>
                    <th>Tax Total</th>
                    <th>{{$order->tax_total}}</th>
                </tr>

                <tr>
                    <th>Shipping Total</th>
                    <th>{{$order->shipping_total}} No</th>
                </tr>

                <tr>
                    <th>Order Status</th>
                    <th>{{$order->order_status}}</th>
                </tr>

                <tr>
                    <th>Payment Type</th>
                    <th>{{$order->payment_method == 1 ? 'Cash On Delivery' : 'Online'}}</th>
                </tr>

                <tr>
                    <th>Payment Status</th>
                    <th>{{$order->payment_status}}</th>
                </tr>

                <tr>
                    <th>Delivery Address</th>
                    <th>{{$order->delivery_address}}</th>
                </tr>

                <tr>
                    <th>Delivery Status</th>
                    <th>{{$order->delivery_status}}</th>
                </tr>

                <tr>
                    <th>Customer Name</th>
                    <th>{{$order->customer->name}}</th>
                </tr>

                <tr>
                    <th>Customer Mobile</th>
                    <th>{{$order->customer->mobile}}</th>
                </tr>
            </table>
        </div>
    </div>

    <div class="card card-body">
        <h4>Order Product Information</h4>
        <div class="row">
            <h4 class="text-center text-success">{{session('message')}}</h4>
            <table class="table table-bordered table-hover table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->orderDetails as $orderDetail)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$orderDetail->product_id}}</td>
                        <td>{{$orderDetail->product_name}}</td>
                        <td>{{$orderDetail->product_price}}</td>
                        <td>{{$orderDetail->product_quantity}}</td>
                        <td>{{$orderDetail->product_quantity * $orderDetail->product_price}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
