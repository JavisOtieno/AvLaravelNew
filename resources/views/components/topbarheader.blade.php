


<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Electro &#8211; Electronics Ecommerce Theme</title>

        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/font-electro.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/colors/yellow.css" media="all" />

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="assets/images/fav-icon.png">
    </head>

    <body class="{{str_contains(request()->path(),'product')?'single-product full-width':(request()->path()=='/contact'?'page page-template-default contact-v1':'left-sidebar')}}">
        {{-- (request()->path()=='/contact'?'page page-template-default contact-v1':'left-sidebar') --}}
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <div class="top-bar">
                <div class="container">
                    <nav>
                        <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                            <li class="menu-item animate-dropdown"><a title="Welcome to {{ucfirst(request()->get('user')['websitename'])}} Electronics Store" href="/">Welcome to {{ucfirst(request()->get('user')['websitename'])}} Electronics Store</a></li>
                        </ul>
                    </nav>

                    <nav>
                        <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                            {{-- <li class="menu-item animate-dropdown"><a title="Store Locator" href="#"><i class="ec ec-map-pointer"></i>Store Locator</a></li> --}}
                            {{-- {{ request()->get('websiteName') }} --}}
                            {{-- {{ $websiteName}} --}}
                            {{-- <li class="menu-item animate-dropdown"><a title="Track Your Order" href="/trackyourorder"><i class="ec ec-transport"></i>Track Your Order</a></li> --}}
                            <li class="menu-item animate-dropdown"><a title="Shop" href="/shop"><i class="ec ec-shopping-bag"></i>Shop</a></li>
                            <li class="menu-item animate-dropdown"><a title="My Account" href="/account"><i class="ec ec-user"></i>My Account</a></li>
                        </ul>
                    </nav>
                </div>
            </div><!-- /.top-bar -->
