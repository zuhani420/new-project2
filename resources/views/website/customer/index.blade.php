@extends('website.master')

@section('title')
    My Dashboard
@endsection

@section('body')
    <div class="container">
        <div class="breadcrumbs">
            <a href="#"><i class="las la-home"></i></a>
            <a href="#">Shop</a>
            <a href="#" class="active">My Dashboard</a>
        </div>
    </div>

    <!-- cart area -->
    <div class="cart_area section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card card-body">
                        <ul class="list-group">
                            <li><a href="" class="list-group-item">My Dashboard</a></li>
                            <li><a href="{{route('customer.order')}}" class="list-group-item">My Order</a></li>
                            <li><a href="" class="list-group-item">My Wishlist</a></li>
                            <li><a href="" class="list-group-item">My Account</a></li>
                            <li><a href="" class="list-group-item">My Profile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card card-body">
                        <h1 class="text-center p-5">My Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
