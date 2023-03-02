@extends('admin.master')

@section('title')
    Edit Order Page
@endsection

@section('body')
    <div class="card card-body">
        <h4>Order Edit Form</h4>
        <div class="row">
            <h4 class="text-center text-success">{{session('message')}}</h4>
            <form action="{{route('admin.update-order', ['id' => $order->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 align-items-center">
                    <div class="col-md-12">
                        <label class="form-label">Order No</label>
                        <input type="text" class="form-control" value="{{$order->id}}" readonly/>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Order Status</label>
                            <select class="form-control" name="order_status">
                                <option value="Pending" {{$order->order_status == 'Pending' ? 'selected' : ''}}> Pending </option>
                                <option value="Processing" {{$order->order_status == 'Processing' ? 'selected' : ''}}> Processing </option>
                                <option value="Complete" {{$order->order_status == 'Complete' ? 'selected' : ''}}> Complete </option>
                                <option value="Cancel" {{$order->order_status == 'Cancel' ? 'selected' : ''}}> Cancel </option>
                            </select>
                        </div>

                    <div class="col-md-12">
                        <label class="form-label">Delivery Address</label>
                        <textarea class="form-control" rows="4" required name="delivery_address">{{$order->delivery_address}}</textarea>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Order Total</label>
                        <input type="number" class="form-control" name="order_total" value="{{$order->order_total}}" readonly/>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Payment Amount</label>
                        <input type="number" class="form-control" name="payment_amount" value="{{$order->order_total}}"/>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Update Order Status</button>
            </form>
        </div>
    </div>
@endsection
