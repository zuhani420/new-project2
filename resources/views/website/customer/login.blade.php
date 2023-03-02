@extends('website.master')

@section('title')
    Login Page
@endsection

@section('body')
    <!-- breadcrumbs -->
    <div class="container">
        <div class="breadcrumbs">
            <a href="#"><i class="las la-home"></i></a>
            <a href="#" class="active">Login</a>
        </div>
    </div>

    <!--Login wrap-->
    <div class="register_wrap section_padding_b">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9">
                    <div class="register_form padding_default shadow_sm">
                        <h4 class="title_2">Login</h4>
                        <p class="mb-4 text_md">Login if you a existing customer</p>
                        <h4>{{session('message')}}</h4>
                        <form action="{{route('customer.login')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Email Address <span>*</span></label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email"/>
                                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Password <span>*</span></label>
                                        <input type="password" class="form-control" name="password" placeholder="type password"/>
                                        <span class="text-danger">{{$errors->has('password') ? $errors->first('password') : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-12 mt-2 d-flex justify-content-between align-items-center">
                                    <div class="custom_check check_2 d-flex align-items-center">
                                        <input type="checkbox" class="check_inp" hidden id="save-default"/>
                                        <label for="save-default">Remember Me</label>
                                    </div>

                                    <a href="forgot-password.html" class="text-color">Forgot Password?</a>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="default_btn xs_btn rounded px-4 d-block w-100">Login</button>
                                </div>

                            </div>
                        </form>

                        <div class="dif_regway my-3">
                            <span class="txt">Or login in with</span>
                        </div>

                        <div class="d-flex">
                            <button class="default_btn xs_btn rounded px-4 d-block w-50 text-capitalize bg-facebook">
                                <i class="fab fa-facebook-f me-2"></i> Facebook
                            </button>
                            <button class="default_btn xs_btn rounded px-4 d-block w-50 ms-3 text-capitalize bg-google">
                                <i class="fab fa-google me-2"></i> Google
                            </button>
                        </div>

                        <p class="text-center mt-3 mb-0">Don't have an account.? <a href="register.html" class="text-color">Register Now</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
