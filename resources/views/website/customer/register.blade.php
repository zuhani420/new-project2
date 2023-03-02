@extends('website.master')

@section('title')
    Register Page
@endsection

@section('body')
    <div class="container">
        <div class="breadcrumbs">
            <a href="index-1.html"><i class="las la-home"></i></a>
            <a href="#" class="active">Register</a>
        </div>
    </div>

    <!--register wrapper-->
    <div class="register_wrap section_padding_b">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9">
                    <div class="register_form padding_default shadow_sm">
                        <h4 class="title_2">Create New Account</h4>
                        <p class="mb-4 text_md">Register here if you are a new customer.</p>
                        <form action="{{route('customer.register')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Full Name <span>*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Email Address <span>*</span></label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Password <span>*</span></label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                                        <span class="text-danger">{{$errors->has('password') ? $errors->first('password') : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Mobile <span>*</span></label>
                                        <input type="number" class="form-control" name="mobile" placeholder="Enter Number">
                                        <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="default_btn xs_btn rounded px-4 d-block w-100">create
                                        account</button>
                                </div>
                            </div>
                        </form>
                        <p class="text-center mt-3 mb-0">Already have an account.? <a href="login.html" class="text-color">Login Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
