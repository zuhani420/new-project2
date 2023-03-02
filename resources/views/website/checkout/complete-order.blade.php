@extends('website.master')

@section('title')
    Complete Order Page
@endsection

@section('body')
    <div class="container">
        <div class="breadcrumbs">
            <a href="#"><i class="las la-home"></i></a>
            <a href="#">Shop</a>
            <a href="#" class="active">Complete Order</a>
        </div>
    </div>

    <!-- cart area -->
    <div class="cart_area section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
