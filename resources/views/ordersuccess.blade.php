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


                                                    <h2>Order Successfully Placed! Order #{{$order->id}} </h2>

                                                    


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





