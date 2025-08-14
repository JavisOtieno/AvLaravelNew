@extends('layoutcontactaccount')
@section('content')

            <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Contact-v1</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article class="post-2508 page type-page status-publish hentry" id="post-2508">
                                <div itemprop="mainContentOfPage" class="entry-content">
                                    <div class="map" style="width: 100vw; position: relative; margin-left: -50vw; left: 50%; margin-bottom: 3em;">
                                        <iframe height="514" allowfullscreen="" style="border: 0px none; pointer-events: none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.593303940039!2d-0.15470444843858283!3d51.53901886611164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ae62edd5771%3A0x27f2d823e2be0249!2sPrincess+Rd%2C+London+NW1+8JR%2C+UK!5e0!3m2!1sen!2s!4v1458827996435"></iframe>
                                    </div>
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        {{-- <div class="contact-form wpb_column vc_column_container vc_col-sm-9 col-sm-9">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h2 class="contact-page-title">Leave us a Message</h2>
                                                            <p>Maecenas dolor elit, semper a sem sed, pulvinar molestie lacus. Aliquam dignissim, elit non mattis ultrices,<br>neque odio ultricies tellus, eu porttitor nisl ipsum eu massa.</p>
                                                        </div>
                                                    </div>
                                                    <div lang="en-US" dir="ltr" id="wpcf7-f2507-p2508-o1" class="wpcf7" role="form">
                                                        <div class="screen-reader-response"></div>
                                                        <form class="wpcf7-form" method="post" action="#">

                                                            <div style="display: none;">
                                                                <input type="hidden" value="2507" name="_wpcf7">
                                                                <input type="hidden" value="4.4.1" name="_wpcf7_version">
                                                                <input type="hidden" value="en_US" name="_wpcf7_locale">
                                                                <input type="hidden" value="wpcf7-f2507-p2508-o1" name="_wpcf7_unit_tag">
                                                                <input type="hidden" value="47d6f1c9ce" name="_wpnonce">
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-xs-12 col-md-6">
                                                                    <label>First name*</label><br>
                                                                    <span class="wpcf7-form-control-wrap first-name"><input type="text" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text" size="40" value="" name="first-name"></span>
                                                                </div>
                                                                <div class="col-xs-12 col-md-6">
                                                                    <label>Last name*</label><br>
                                                                    <span class="wpcf7-form-control-wrap last-name"><input type="text" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text" size="40" value="" name="last-name"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Subject</label><br>
                                                                <span class="wpcf7-form-control-wrap subject"><input type="text" aria-invalid="false" class="wpcf7-form-control wpcf7-text input-text" size="40" value="" name="subject"></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Your Message</label><br>
                                                                <span class="wpcf7-form-control-wrap your-message"><textarea aria-invalid="false" class="wpcf7-form-control wpcf7-textarea" rows="10" cols="40" name="your-message"></textarea></span>
                                                            </div>
                                                            <div class="form-group clearfix">

                                                                <p><input type="submit" value="Send Message"></p>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="store-info wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h2 class="contact-page-title">Our Contact</h2>
                                                            <address>Email: {{request()->get('user')['email']}}<br>
                                                                Phone: {{request()->get('user')['phone']}}<br>
                                                                
                                                            </address>
                                                            {{-- <h3>Hours of Operation</h3>
                                                            <ul class="list-unstyled operation-hours inner-right-md">
                                                                <li class="clearfix"><span class="day">Monday:</span><span class="pull-right flip hours">12-6 PM</span></li>
                                                                <li class="clearfix"><span class="day">Tuesday:</span><span class="pull-right flip hours">12-6 PM</span></li>
                                                                <li class="clearfix"><span class="day">Wednesday:</span><span class="pull-right flip hours">12-6 PM</span></li>
                                                                <li class="clearfix"><span class="day">Thursday:</span><span class="pull-right flip hours">12-6 PM</span></li>
                                                                <li class="clearfix"><span class="day">Friday:</span><span class="pull-right flip hours">12-6 PM</span></li>
                                                                <li class="clearfix"><span class="day">Saturday:</span><span class="pull-right flip hours">12-6 PM</span></li>
                                                                <li class="clearfix"><span class="day">Sunday</span><span class="pull-right flip hours">Closed</span></li>
                                                            </ul>
                                                            <h3>Careers</h3>
                                                            <p class="inner-right-md">If you’re interested in employment opportunities at Electro, please email us: <a href="mailto:contact@yourstore.com">contact@yourstore.com</a></p> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store-info wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h2 class="contact-page-title">Our Info</h2>
                                                            <address>CBD<br>
                                                                Nairobi<br>
                                                                Kenya
                                                            </address>
                                                            {{-- <h3>Hours of Operation</h3>
                                                            <ul class="list-unstyled operation-hours inner-right-md">
                                                                <li class="clearfix"><span class="day">Monday:</span><span class="pull-right flip hours">12-6 PM</span></li>
                                                                <li class="clearfix"><span class="day">Tuesday:</span><span class="pull-right flip hours">12-6 PM</span></li>
                                                                <li class="clearfix"><span class="day">Wednesday:</span><span class="pull-right flip hours">12-6 PM</span></li>
                                                                <li class="clearfix"><span class="day">Thursday:</span><span class="pull-right flip hours">12-6 PM</span></li>
                                                                <li class="clearfix"><span class="day">Friday:</span><span class="pull-right flip hours">12-6 PM</span></li>
                                                                <li class="clearfix"><span class="day">Saturday:</span><span class="pull-right flip hours">12-6 PM</span></li>
                                                                <li class="clearfix"><span class="day">Sunday</span><span class="pull-right flip hours">Closed</span></li>
                                                            </ul>
                                                            <h3>Careers</h3>
                                                            <p class="inner-right-md">If you’re interested in employment opportunities at Electro, please email us: <a href="mailto:contact@yourstore.com">contact@yourstore.com</a></p> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .container -->
            </div><!-- #content -->
            
            @endsection