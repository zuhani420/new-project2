@extends('admin.master')

@section('title')
    Product Detail Page
@endsection

@section('body')
        <div class="card card-body">
            <h4>All Detail Information</h4>
            <div class="row">
                <h4 class="text-center text-success">{{session('message')}}</h4>
                <table class="table table-bordered table-hover table-striped" style="width:100%">
                    <tr>
                        <th>Product Id</th>
                        <td>{{$product->id}}</td>
                    </tr>

                    <tr>
                        <th>Product Name</th>
                        <td>{{$product->name}}</td>
                    </tr>

                    <tr>
                        <th>Product Code</th>
                        <td>{{$product->code}}</td>
                    </tr>

                    <tr>
                        <th>Product Category</th>
                        <td>{{$product->category->name}}</td>
                    </tr>

                    <tr>
                        <th>Product Sub Category</th>
                        <td>{{$product->subCategory->name}}</td>
                    </tr>

                    <tr>
                        <th>Product Brand</th>
                        <td>{{$product->brand->name}}</td>
                    </tr>

                    <tr>
                        <th>Product Unit</th>
                        <td>{{$product->unit->name}}</td>
                    </tr>

                    <tr>
                        <th>Regular Price</th>
                        <td>{{$product->regular_price}}</td>
                    </tr>

                    <tr>
                        <th>Selling Price</th>
                        <td>{{$product->selling_price}}</td>
                    </tr>

                    <tr>
                        <th>Stock Amount</th>
                        <td>{{$product->selling_price}}</td>
                    </tr>

                    <tr>
                        <th>Short Description</th>
                        <td>{{$product->short_description}}</td>
                    </tr>

                    <tr>
                        <th>Long Description</th>
                        <td>{!! $product->long_description !!}</td>
                    </tr>

                    <tr>
                        <th>Product Image</th>
                        <td><img src="{{asset($product->image)}}" alt="" height="180" width="200"></td>
                    </tr>

                    <tr>
                        <th>Other Image</th>
                        <td>
                            @foreach($product->otherImages as $otherImage)
                                <img src="{{asset($otherImage->image)}}" alt="" height="180" width="200"/>
                            @endforeach

                        </td>
                    </tr>

                    <tr>
                        <th>Publication Status</th>
                        <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                    </tr>

                    <tr>
                        <th>Featured Status</th>
                        <td>{{$product->featured_status}}</td>
                    </tr>

                    <tr>
                        <th>Hit Count</th>
                        <td>{{$product->hit_count}}</td>
                    </tr>
                </table>
            </div>
        </div>
@endsection
