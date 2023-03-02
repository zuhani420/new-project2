@extends('admin.master')

@section('title')
    Manage Order Page
@endsection

@section('body')
    <div class="card card-body">
        <h4>All Product Information</h4>
        <div class="row">
            <h4 class="text-center text-success">{{session('message')}}</h4>
            <table class="table table-bordered table-hover table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Order ID</th>
                    <th>Order Total</th>
                    <th>Customer Info</th>
                    <th>Order Date</th>
                    <th>Order Status</th>
                    <th>Payment Status</th>
                    <th>Payment Type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$order->id}}</td>
                        <td>{{$order->order_total}}</td>
                        <td>
                            {{$order->customer->name}}
                            <br/>
                            {{$order->customer->mobile}}
                        </td>
                        <td>{{$order->order_date}}</td>
                        <td>{{$order->order_status}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->payment_method == 1 ? 'Cash On Delivery' : 'Online'}}</td>
                        <td>
                            <a href="{{route('admin.order-detail', ['id' => $order->id])}}" class="btn btn-outline-primary btn-sm" title="Order Detail">
                                <i class="icofont-book"></i>
                            </a>
                            <a href="{{route('admin.order-invoice', ['id' => $order->id])}}" class="btn btn-outline-primary btn-sm" title="Order Invoice">
                                <i class="icofont-paper"></i>
                            </a>
                            <a href="{{route('admin.print-invoice', ['id' => $order->id])}}" class="btn btn-outline-primary btn-sm" title="Print Invoice" target="_blank">
                                <i class="icofont-print"></i>
                            </a>
                            <a href="{{route('admin.order-edit', ['id' => $order->id])}}" class="btn btn-outline-success btn-sm {{$order->order_status == 'Complete' ? 'disabled' : ''}}" title="Order Edit">
                                <i class="icofont-ui-edit"></i>
                            </a>
                            <a href="{{route('admin.order-delete', ['id' => $order->id])}}" class="btn btn-outline-danger btn-sm {{$order->order_status == 'Complete' || $order->order_status == 'Pending' || $order->order_status == 'Processing' ? 'disabled' : ''}}" title="Order Delete" onclick="return confirm('Are You Sure to delete this...?')">
                                <i class="icofont-ui-delete"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
