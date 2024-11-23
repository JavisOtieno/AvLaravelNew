@extends('layout')
@section('content')

<div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" ><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>My Account</nav><!-- .woocommerce-breadcrumb -->

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article id="post-8" class="hentry">

                                <div class="entry-content">
                                    <div class="woocommerce">
                                        <div class="customer-login-form">
                                            {{-- <span class="or-text">or</span> --}}

                                            <div class="col2-set" id="customer_login">

                                                <div class="col-1">


                                                    <h2>Buy Now</h2>

                                                    <form method="post" class="login" action="/submitbuynow">
                                                        @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <ul>
            <li>{{ session('error') }}</li>
        </ul>
    </div>
@endif

                                                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                        </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                                                        @csrf

                                                        <p class="before-login-text">Welcome back! Sign in to your account</p>

                                                        <input class="input-text" type="hidden" name="product_id" id="product_id" value="{{$product['id']}}" />


                                                        <p class="form-row form-row-wide">
                                                            <label for="username">Name<span class="required">*</span></label>
                                                            <input type="text" class="input-text" name="name" id="name" value="" />
                                                        </p>

                                                        <p class="form-row form-row-wide">
                                                            <label for="phone">Phone<span class="required">*</span></label>
                                                            <input class="input-text" type="text" name="phone" id="phone" />
                                                        </p>

                                                        <p class="form-row form-row-wide">
                                                            <label for="address">Address<span class="required">*</span></label>
                                                            <input class="input-text" type="text" name="address" id="addresss" />
                                                        </p>

                                                        <p class="form-row">
                                                            <input class="button" type="submit" value="Buy Now" name="buynow">
                                                            {{-- <label for="rememberme" class="inline"><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me</label> --}}
                                                        </p>

                                                        {{-- <p class="lost_password"><a href="login-and-register.html">Lost your password?</a></p> --}}

                                                    </form>


                                                </div><!-- .col-1 -->

                                                {{-- <div class="col-2">

                                                    <h2>Register</h2>

                                                    <form method="post" class="register">

                                                        <p class="before-register-text">Create your very own account</p>

                                                        <p class="form-row form-row-wide">
                                                            <label for="reg_email">Email address<span class="required">*</span></label>
                                                            <input type="email" class="input-text" name="email" id="reg_email" value="" />
                                                        </p>

                                                        <p class="form-row"><input type="submit" class="button" name="register" value="Register" /></p>

                                                        <div class="register-benefits">
                                                            <h3>Sign up today and you will be able to :</h3>
                                                            <ul>
                                                                <li>Speed your way through checkout</li>
                                                                <li>Track your orders easily</li>
                                                                <li>Keep a record of all your purchases</li>
                                                            </ul>
                                                        </div>

                                                    </form>

                                                </div><!-- .col-2 --> --}}

                                            </div><!-- .col2-set -->

                                        </div><!-- /.customer-login-form -->
                                    </div><!-- .woocommerce -->
                                </div><!-- .entry-content -->

                            </article><!-- #post-## -->

                        </main><!-- #main -->
                    </div><!-- #primary -->

                </div><!-- .col-full -->
            </div><!-- #content -->



            
@endsection





