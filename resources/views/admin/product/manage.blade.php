@extends('admin.master')

@section('title')
    Manage Product Page
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
                <th>product Name</th>
                <th>Product Code</th>
                <th>Selling Price</th>
                <th>Stock Amount</th>
                <th>Image</th>
                <th>status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->selling_price}}</td>
                    <td>{{$product->stock_amount}}</td>
                    <td><img src="{{asset($product->image)}}" alt="" height="50" width="50/"></td>
                    <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                    <td>
                        <a href="{{route('product.detail', ['id' => $product->id])}}" class="btn btn-outline-primary btn-sm" title="Detail">
                            <i class="icofont-book"></i>
                        </a>
                        <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-outline-success btn-sm" title="Edit">
                            <i class="icofont-ui-edit"></i>
                        </a>
                        <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-outline-danger btn-sm" title="Delete" onclick="return confirm('Are You Sure to delete this...?')">
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
