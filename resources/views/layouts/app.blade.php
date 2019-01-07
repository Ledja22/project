<!doctype html>
<html lang="en">
<head>
    <title>Tour Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" >

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" >

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" >
    <link rel="stylesheet" id="cpswitch" href="{{URL::asset('css/orange.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">

    <!-- Owl Carousel Stylesheet -->

    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.css')}}" >

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="{{URL::asset('css/flexslider.css')}}" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="{{URL::asset('css/datepicker.css')}}">
</head>


<body id="tour-homepage">

<!--====== LOADER =====-->
<div class="loader"></div>


<!--======== SEARCH-OVERLAY =========-->
<div class="overlay">
    <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
    <div class="overlay-content">
        <div class="form-center">
            <form>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." required />
                        <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                    </div><!-- end input-group -->
                </div><!-- end form-group -->
            </form>
        </div><!-- end form-center -->
    </div><!-- end overlay-content -->
</div><!-- end overlay -->


{{--<!--============= TOP-BAR ===========-->--}}
{{--<div id="top-bar" class="tb-text-white">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">--}}
                {{--<div id="info">--}}
                    {{--<ul class="list-unstyled list-inline">--}}
                        {{--<li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>--}}
                        {{--<li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>--}}
                    {{--</ul>--}}
                {{--</div><!-- end info -->--}}
            {{--</div><!-- end columns -->--}}

            {{--<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">--}}
                {{--<div id="links">--}}
                    {{--<ul class="list-unstyled list-inline">--}}
                        {{--<li><a href="login.html"><span><i class="fa fa-lock"></i></span>Login</a></li>--}}
                        {{--<li><a href="registration.html"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>--}}
                        {{--<li>--}}
                            {{--<form>--}}
                                {{--<ul class="list-inline">--}}
                                    {{--<li>--}}
                                        {{--<div class="form-group language">--}}
                                            {{--<span><i class="fa fa-angle-down"></i></span>--}}
                                            {{--<select class="form-control">--}}
                                                {{--<option value="">EN</option>--}}
                                                {{--<option value="">UR</option>--}}
                                                {{--<option value="">FR</option>--}}
                                                {{--<option value="">IT</option>--}}
                                            {{--</select>--}}
                                        {{--</div><!-- end form-group -->--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</form>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div><!-- end links -->--}}
            {{--</div><!-- end columns -->--}}
        {{--</div><!-- end row -->--}}
    {{--</div><!-- end container -->--}}
{{--</div><!-- end top-bar -->--}}

{{--<nav class="navbar navbar-default main-navbar navbar-custom navbar-colored" id="mynavbar">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle" id="menu-button">--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<div class="header-search hidden-lg">--}}
                {{--<a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>--}}
            {{--</div>--}}
            {{--<a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>--}}
        {{--</div><!-- end navbar-header -->--}}

        {{--<div class="collapse navbar-collapse" id="myNavbar1">--}}
            {{--<ul class="nav navbar-nav navbar-right navbar-search-link">--}}


                {{--<li class="dropdown active"><a href="#" class="dropdown-toggle" >Home</a></li>--}}

                {{--<li @if((\Route::current()->getName() == '/') ) class="dropdown active" @else  @endif>--}}

                    {{--<a href="{{url("/")}}" class="dropdown-toggle">Home</a>--}}
                {{--</li>--}}


                {{--<li @if((\Route::current()->getName() == 'about_us') ) class="dropdown active" @else  @endif>--}}

                    {{--<a href="{{url("about-us")}}" class="dropdown-toggle"> About Us</a>--}}
                {{--</li>--}}

                {{--<li @if((\Route::current()->getName() == 'trips') ) class="dropdown active" @else  @endif>--}}

                    {{--<a href="{{url("trips")}}" class="dropdown-toggle"> Trips </a>--}}
                {{--</li>--}}

                {{--<li @if((\Route::current()->getName() == 'guiders') ) class="dropdown active" @else  @endif>--}}

                    {{--<a href="{{url("guiders")}}" class="dropdown-toggle"> Guiders </a>--}}
                {{--</li>--}}




                {{--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotel<span><i class="fa fa-angle-down"></i></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="hotel-homepage.html">Hotel Homepage</a></li>--}}
                        {{--<li><a href="hotel-listing-left-sidebar.html">List View Left Sidebar</a></li>--}}
                        {{--<li><a href="hotel-listing-right-sidebar.html">List View Right Sidebar</a></li>--}}
                        {{--<li><a href="hotel-grid-left-sidebar.html">Grid View Left Sidebar</a></li>--}}
                        {{--<li><a href="hotel-grid-right-sidebar.html">Grid View Right Sidebar</a></li>--}}
                        {{--<li><a href="hotel-detail-left-sidebar.html">Detail Left Sidebar</a></li>--}}
                        {{--<li><a href="hotel-detail-right-sidebar.html">Detail Right Sidebar</a></li>--}}
                        {{--<li><a href="hotel-booking-left-sidebar.html">Booking Left Sidebar</a></li>--}}
                        {{--<li><a href="hotel-booking-right-sidebar.html">Booking Right Sidebar</a></li>--}}
                        {{--<li><a href="hotel-search-result.html">Search Result</a></li>--}}
                        {{--<li><a href="hotel-offers.html">Hot Offers</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}


                {{--<li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>--}}
            {{--</ul>--}}
        {{--</div><!-- end navbar collapse -->--}}
    {{--</div><!-- end container -->--}}
{{--</nav><!-- end navbar -->--}}

{{--<div class="sidenav-content">--}}
    {{--<div id="mySidenav" class="sidenav" >--}}
        {{--<h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>--}}

        {{--<div id="main-menu">--}}
            {{--<div class="closebtn">--}}
                {{--<button class="btn btn-default" id="closebtn">&times;</button>--}}
            {{--</div><!-- end close-btn -->--}}

            {{--<div class="list-group panel">--}}

                {{--<a href="#home-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>--}}
                {{--<div class="collapse sub-menu" id="home-links">--}}
                    {{--<a href="index.html" class="list-group-item">Main Homepage</a>--}}
                    {{--<a href="flight-homepage.html" class="list-group-item">Flight Homepage</a>--}}
                    {{--<a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>--}}
                    {{--<a href="#" class="list-group-item active">Tour Homepage</a>--}}
                    {{--<a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a>--}}
                    {{--<a href="car-homepage.html" class="list-group-item">Car Homepage</a>--}}
                    {{--<a href="landing-page.html" class="list-group-item">Landing Page</a>--}}
                    {{--<a href="travel-agency-homepage.html" class="list-group-item">Travel Agency Page</a>--}}
                {{--</div><!-- end sub-menu -->--}}

                {{--<a href="#flights-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-plane link-icon"></i></span>Flights<span><i class="fa fa-chevron-down arrow"></i></span></a>--}}
                {{--<div class="collapse sub-menu" id="flights-links">--}}
                    {{--<a href="flight-homepage.html" class="list-group-item">Flight Homepage</a>--}}
                    {{--<a href="flight-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>--}}
                    {{--<a href="flight-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>--}}
                    {{--<a href="flight-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>--}}
                    {{--<a href="flight-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>--}}
                    {{--<a href="flight-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>--}}
                    {{--<a href="flight-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>--}}
                    {{--<a href="flight-booking-left-sidebar.html" class="list-group-item">Booking Left Sidebar</a>--}}
                    {{--<a href="flight-booking-right-sidebar.html" class="list-group-item">Booking Right Sidebar</a>--}}
                    {{--<a href="flight-search-result.html" class="list-group-item">Search Result</a>--}}
                    {{--<a href="flight-offers.html" class="list-group-item">Hot Offers</a>--}}
                {{--</div><!-- end sub-menu -->--}}

                {{--<a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>--}}
                {{--<div class="collapse sub-menu" id="hotels-links">--}}
                    {{--<a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>--}}
                    {{--<a href="hotel-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>--}}
                    {{--<a href="hotel-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>--}}
                    {{--<a href="hotel-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>--}}
                    {{--<a href="hotel-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>--}}
                    {{--<a href="hotel-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>--}}
                    {{--<a href="hotel-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>--}}
                    {{--<a href="hotel-booking-left-sidebar.html" class="list-group-item">Booking Left Sidebar</a>--}}
                    {{--<a href="hotel-booking-right-sidebar.html" class="list-group-item">Booking Right Sidebar</a>--}}
                    {{--<a href="hotel-search-result.html" class="list-group-item">Search Result</a>--}}
                    {{--<a href="hotel-offers.html" class="list-group-item">Hot Offers</a>--}}
                {{--</div><!-- end sub-menu -->--}}

                {{--<a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>--}}
                {{--<div class="collapse sub-menu" id="tours-links">--}}
                    {{--<a href="tour-homepage.html" class="list-group-item">Tour Homepage</a>--}}
                    {{--<a href="tour-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>--}}
                    {{--<a href="tour-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>--}}
                    {{--<a href="tour-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>--}}
                    {{--<a href="tour-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>--}}
                    {{--<a href="tour-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>--}}
                    {{--<a href="tour-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>--}}
                    {{--<a href="tour-booking-left-sidebar.html" class="list-group-item">Booking Left Sidebar</a>--}}
                    {{--<a href="tour-booking-right-sidebar.html" class="list-group-item">Booking Right Sidebar</a>--}}
                    {{--<a href="tour-search-result.html" class="list-group-item">Search Result</a>--}}
                    {{--<a href="tour-offers.html" class="list-group-item">Hot Offers</a>--}}
                {{--</div><!-- end sub-menu -->--}}

                {{--<a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Cruise<span><i class="fa fa-chevron-down arrow"></i></span></a>--}}
                {{--<div class="collapse sub-menu" id="cruise-links">--}}
                    {{--<a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a>--}}
                    {{--<a href="cruise-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>--}}
                    {{--<a href="cruise-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>--}}
                    {{--<a href="cruise-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>--}}
                    {{--<a href="cruise-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>--}}
                    {{--<a href="cruise-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>--}}
                    {{--<a href="cruise-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>--}}
                    {{--<a href="cruise-booking-left-sidebar.html" class="list-group-item">Booking Left Sidebar</a>--}}
                    {{--<a href="cruise-booking-right-sidebar.html" class="list-group-item">Booking Right Sidebar</a>--}}
                    {{--<a href="cruise-search-result.html" class="list-group-item">Search Result</a>--}}
                    {{--<a href="cruise-offers.html" class="list-group-item">Hot Offers</a>--}}
                {{--</div><!-- end sub-menu -->--}}

                {{--<a href="#cars-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cars<span><i class="fa fa-chevron-down arrow"></i></span></a>--}}
                {{--<div class="collapse sub-menu" id="cars-links">--}}
                    {{--<a href="car-homepage.html" class="list-group-item">Car Homepage</a>--}}
                    {{--<a href="car-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>--}}
                    {{--<a href="car-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>--}}
                    {{--<a href="car-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>--}}
                    {{--<a href="car-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>--}}
                    {{--<a href="car-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>--}}
                    {{--<a href="car-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>--}}
                    {{--<a href="car-booking-left-sidebar.html" class="list-group-item">Booking Left Sidebar</a>--}}
                    {{--<a href="car-booking-right-sidebar.html" class="list-group-item">Booking Right Sidebar</a>--}}
                    {{--<a href="car-search-result.html" class="list-group-item">Search Result</a>--}}
                    {{--<a href="car-offers.html" class="list-group-item">Hot Offers</a>--}}
                {{--</div><!-- end sub-menu -->--}}

                {{--<a href="#features-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-puzzle-piece link-icon"></i></span>Features<span><i class="fa fa-chevron-down arrow"></i></span></a>--}}
                {{--<div class="collapse sub-menu mega-sub-menu" id="features-links">--}}
                    {{--<a href="#header-style-links" class="list-group-item" data-toggle="collapse">Header<span><i class="fa fa-caret-down arrow"></i></span></a>--}}
                    {{--<div class="collapse sub-menu mega-sub-menu-links" id="header-style-links">--}}
                        {{--<a href="feature-header-style-1.html" class="list-group-item">Header Style 1</a>--}}
                        {{--<a href="feature-header-style-2.html" class="list-group-item">Header Style 2</a>--}}
                        {{--<a href="feature-header-style-3.html" class="list-group-item">Header Style 3</a>--}}
                        {{--<a href="feature-header-style-4.html" class="list-group-item">Header Style 4</a>--}}
                        {{--<a href="feature-header-style-5.html" class="list-group-item">Header Style 5</a>--}}
                        {{--<a href="feature-header-style-6.html" class="list-group-item">Header Style 6</a>--}}
                    {{--</div>--}}
                    {{--<a href="#page-title-style-links" class="list-group-item" data-toggle="collapse">Page Title<span><i class="fa fa-caret-down arrow"></i></span></a>--}}
                    {{--<div class="collapse sub-menu mega-sub-menu-links" id="page-title-style-links">--}}
                        {{--<a href="feature-page-title-style-1.html" class="list-group-item">Page Title Style 1</a>--}}
                        {{--<a href="feature-page-title-style-2.html" class="list-group-item">Page Title Style 2</a>--}}
                        {{--<a href="feature-page-title-style-3.html" class="list-group-item">Page Title Style 3</a>--}}
                        {{--<a href="feature-page-title-style-4.html" class="list-group-item">Page Title Style 4</a>--}}
                        {{--<a href="feature-page-title-style-5.html" class="list-group-item">Page Title Style 5</a>--}}
                        {{--<a href="feature-page-title-style-6.html" class="list-group-item">Page Title Style 6</a>--}}
                    {{--</div>--}}
                    {{--<a href="#footer-style-links" class="list-group-item" data-toggle="collapse">Footer<span><i class="fa fa-caret-down arrow"></i></span></a>--}}
                    {{--<div class="collapse sub-menu mega-sub-menu-links" id="footer-style-links">--}}
                        {{--<a href="feature-footer-style-1.html" class="list-group-item">Footer Style 1</a>--}}
                        {{--<a href="feature-footer-style-2.html" class="list-group-item">Footer Style 2</a>--}}
                        {{--<a href="feature-footer-style-3.html" class="list-group-item">Footer Style 3</a>--}}
                        {{--<a href="feature-footer-style-4.html" class="list-group-item">Footer Style 4</a>--}}
                        {{--<a href="feature-footer-style-5.html" class="list-group-item">Footer Style 5</a>--}}
                    {{--</div>--}}
                    {{--<a href="#f-blog-links" class="list-group-item" data-toggle="collapse">Blog<span><i class="fa fa-caret-down arrow"></i></span></a>--}}
                    {{--<div class="collapse sub-menu mega-sub-menu-links" id="f-blog-links">--}}
                        {{--<a href="blog-listing-left-sidebar.html" class="list-group-item">Blog Listing Left Sidebar</a>--}}
                        {{--<a href="blog-listing-right-sidebar.html" class="list-group-item">Blog Listing Right Sidebar</a>--}}
                        {{--<a href="blog-detail-left-sidebar.html" class="list-group-item">Blog Detail Left Sidebar</a>--}}
                        {{--<a href="blog-detail-right-sidebar.html" class="list-group-item">Blog Detail Right Sidebar</a>--}}
                    {{--</div>--}}
                    {{--<a href="#f-gallery-links" class="list-group-item" data-toggle="collapse">Gallery<span><i class="fa fa-caret-down arrow"></i></span></a>--}}
                    {{--<div class="collapse sub-menu mega-sub-menu-links" id="f-gallery-links">--}}
                        {{--<a href="gallery-masonry.html" class="list-group-item">Gallery Masonry</a>--}}
                        {{--<a href="gallery-2-columns.html" class="list-group-item">Gallery 2 Columns</a>--}}
                        {{--<a href="gallery-3-columns.html" class="list-group-item">Gallery 3 Columns</a>--}}
                        {{--<a href="gallery-4-columns.html" class="list-group-item">Gallery 4 Columns</a>--}}
                    {{--</div>--}}
                    {{--<a href="#f-forms-links" class="list-group-item" data-toggle="collapse">Forms<span><i class="fa fa-caret-down arrow"></i></span></a>--}}
                    {{--<div class="collapse sub-menu mega-sub-menu-links" id="f-forms-links">--}}
                        {{--<a href="login-1.html" class="list-group-item">Login 1</a>--}}
                        {{--<a href="login-2.html" class="list-group-item">Login 2</a>--}}
                        {{--<a href="registration-1.html" class="list-group-item">Registration 1</a>--}}
                        {{--<a href="registration-2.html" class="list-group-item">Registration 2</a>--}}
                        {{--<a href="forgot-password-1.html" class="list-group-item">Forgot Password 1</a>--}}
                        {{--<a href="forgot-password-2.html" class="list-group-item">Forgot Password 2</a>--}}
                    {{--</div>--}}
                {{--</div><!-- end sub-menu -->--}}

                {{--<a href="#pages-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>--}}
                {{--<div class="collapse sub-menu" id="pages-links">--}}
                    {{--<div class="list-group-heading list-group-item">Standard <span>Pages</span></div>--}}
                    {{--<a href="about-us-1.html" class="list-group-item">About Us 1</a>--}}
                    {{--<a href="about-us-2.html" class="list-group-item">About Us 2</a>--}}
                    {{--<a href="services-1.html" class="list-group-item">Services 1</a>--}}
                    {{--<a href="services-2.html" class="list-group-item">Services 2</a>--}}
                    {{--<a href="team-1.html" class="list-group-item">Our Team 1</a>--}}
                    {{--<a href="team-2.html" class="list-group-item">Our Team 2</a>--}}
                    {{--<a href="contact-us-1.html" class="list-group-item">Contact Us 1</a>--}}
                    {{--<a href="contact-us-2.html" class="list-group-item">Contact Us 2</a>--}}
                    {{--<div class="list-group-heading list-group-item">User <span>Dashboard</span></div>--}}
                    {{--<a href="dashboard-1.html" class="list-group-item">Dashboard 1</a>--}}
                    {{--<a href="dashboard-2.html" class="list-group-item">Dashboard 2</a>--}}
                    {{--<a href="user-profile.html" class="list-group-item">User Profile</a>--}}
                    {{--<a href="booking.html" class="list-group-item">Booking</a>--}}
                    {{--<a href="wishlist.html" class="list-group-item">Wishlist</a>--}}
                    {{--<a href="cards.html" class="list-group-item">Cards</a>--}}
                    {{--<div class="list-group-heading list-group-item">Special <span>Pages</span></div>--}}
                    {{--<a href="error-page-1.html" class="list-group-item">404 Page 1</a>--}}
                    {{--<a href="error-page-2.html" class="list-group-item">404 Page 2</a>--}}
                    {{--<a href="coming-soon-1.html" class="list-group-item">Coming Soon 1</a>--}}
                    {{--<a href="coming-soon-2.html" class="list-group-item">Coming Soon 2</a>--}}
                    {{--<a href="faq-left-sidebar.html" class="list-group-item">FAQ Left Sidebar</a>--}}
                    {{--<a href="faq-right-sidebar.html" class="list-group-item">FAQ Right Sidebar</a>--}}
                    {{--<a href="testimonials-1.html" class="list-group-item">Testimonials 1</a>--}}
                    {{--<a href="testimonials-2.html" class="list-group-item">Testimonials 2</a>--}}
                    {{--<div class="list-group-heading list-group-item">Extra <span>Pages</span></div>--}}
                    {{--<a href="before-you-fly.html" class="list-group-item">Before Fly</a>--}}
                    {{--<a href="travel-insurance.html" class="list-group-item">Travel Insurance</a>--}}
                    {{--<a href="travel-guide.html" class="list-group-item">Travel Guide</a>--}}
                    {{--<a href="holidays.html" class="list-group-item">Holidays</a>--}}
                    {{--<a href="thank-you.html" class="list-group-item">Thank You</a>--}}
                    {{--<a href="payment-success.html" class="list-group-item">Payment Success</a>--}}
                    {{--<a href="pricing-table-1.html" class="list-group-item">Pricing Table 1</a>--}}
                    {{--<a href="pricing-table-2.html" class="list-group-item">Pricing Table 2</a>--}}
                    {{--<a href="popup-ad.html" class="list-group-item">Popup Ad</a>--}}
                {{--</div><!-- end sub-menu -->--}}
            {{--</div><!-- end list-group -->--}}
        {{--</div><!-- end main-menu -->--}}
    {{--</div><!-- end mySidenav -->--}}
{{--</div><!-- end sidenav-content -->--}}



<!--============= TOP-BAR ===========-->
<div id="top-bar" class="tb-text-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="info">
                    <ul class="list-unstyled list-inline">
                        <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                        <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                    </ul>
                </div><!-- end info -->
            </div><!-- end columns -->

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="links">
                    <ul class="list-unstyled list-inline">
                        <li><a href="login.html"><span><i class="fa fa-lock"></i></span>Login</a></li>
                        <li><a href="registration.html"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                        <li>
                            <form>
                                <ul class="list-inline">
                                    <li>
                                        <div class="form-group currency">
                                            <span><i class="fa fa-angle-down"></i></span>
                                            <select class="form-control">
                                                <option value="">$</option>
                                                <option value="">£</option>
                                            </select>
                                        </div><!-- end form-group -->
                                    </li>

                                    <li>
                                        <div class="form-group language">
                                            <span><i class="fa fa-angle-down"></i></span>
                                            <select class="form-control">
                                                <option value="">EN</option>
                                                <option value="">UR</option>
                                                <option value="">FR</option>
                                                <option value="">IT</option>
                                            </select>
                                        </div><!-- end form-group -->
                                    </li>
                                </ul>
                            </form>
                        </li>
                    </ul>
                </div><!-- end links -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end top-bar -->

<nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" id="menu-button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="header-search hidden-lg">
                <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
            </div>
            <a href="#" class="navbar-brand"><span><i class="fa fa-compass"></i></span>Kalipso</a>
        </div><!-- end navbar-header -->

        <div class="collapse navbar-collapse" id="myNavbar1">
            <ul class="nav navbar-nav navbar-right navbar-search-link">

                <li @if((\Route::current()->getName() == '/') ) class="dropdown active" @else  @endif>
                    <a href="{{url("/")}}" class="dropdown-toggle">Home</a>
                </li>

            <li @if((\Route::current()->getName() == 'about_us') ) class="dropdown active" @else  @endif>

            <a href="{{url("about-us")}}" class="dropdown-toggle"> About Us</a>
            </li>

            <li @if((\Route::current()->getName() == 'trips') ) class="dropdown active" @else  @endif>

            <a href="{{url("trips")}}" class="dropdown-toggle"> Trips </a>
            </li>

            <li @if((\Route::current()->getName() == 'guiders') ) class="dropdown active" @else  @endif>

            <a href="{{url("guiders")}}" class="dropdown-toggle"> Guiders </a>
            </li>
                <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
            </ul>
        </div><!-- end navbar collapse -->
    </div><!-- end container -->
</nav><!-- end navbar -->

<div class="sidenav-content">
    <div id="mySidenav" class="sidenav" >
        <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

        <div id="main-menu">
            <div class="closebtn">
                <button class="btn btn-default" id="closebtn">&times;</button>
            </div><!-- end close-btn -->

            <div class="list-group panel">

                <a href="#home-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="home-links">
                    <a href="#" class="list-group-item active">Main Homepage</a>
                    <a href="flight-homepage.html" class="list-group-item">Flight Homepage</a>
                    <a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                    <a href="tour-homepage.html" class="list-group-item">Tour Homepage</a>
                    <a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a>
                    <a href="car-homepage.html" class="list-group-item">Car Homepage</a>
                    <a href="landing-page.html" class="list-group-item">Landing Page</a>
                    <a href="travel-agency-homepage.html" class="list-group-item">Travel Agency Page</a>
                </div><!-- end sub-menu -->



            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->



@yield("content")




<!--======================= FOOTER =======================-->
<section id="footer" class="ftr-heading-w ftr-heading-mgn-2">
    <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-grey">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-5 footer-widget ftr-about ftr-our-company">
                    <h3 class="footer-heading">OUR COMPANY</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                    <ul class="social-links list-inline list-unstyled">
                        <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 footer-widget ftr-instagram">
                    <h3 class="footer-heading">Instagram Post</h3>
                    <ul class="list-unstyled instagram-list list-inline">
                        <li><a href="#"><img src="images/ftr-instagram-1.jpg" class="img-responsive" alt="instagram-img" /></a></li>
                        <li><a href="#"><img src="images/ftr-instagram-2.jpg" class="img-responsive" alt="instagram-img" /></a></li>
                        <li><a href="#"><img src="images/ftr-instagram-3.jpg" class="img-responsive" alt="instagram-img" /></a></li>
                        <li><a href="#"><img src="images/ftr-instagram-4.jpg" class="img-responsive" alt="instagram-img" /></a></li>
                        <li><a href="#"><img src="images/ftr-instagram-5.jpg" class="img-responsive" alt="instagram-img" /></a></li>
                        <li><a href="#"><img src="images/ftr-instagram-6.jpg" class="img-responsive" alt="instagram-img" /></a></li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                    <h3 class="footer-heading">Contact Us</h3>
                    <ul class="list-unstyled">
                        <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                        <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                        <li><span><i class="fa fa-envelope"></i></span>info@starhotel.com</li>
                    </ul>
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-top -->

    <div id="footer-bottom" class="ftr-bot-black">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                    <p>© 2017 <a href="#">StarTravel</a>. All rights reserved.</p>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                    <ul class="list-unstyled list-inline">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-bottom -->

</section><!-- end footer -->


<!-- Page Scripts Starts -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script  src="{{URL::to('js/bootstrap.min.js')}}"></script>
<script  src="{{URL::to('js/jquery.flexslider.js')}}"></script>
<script  src="{{URL::to('js/bootstrap-datepicker.js')}}"></script>
<script  src="{{URL::to('js/owl.carousel.min.js')}}"></script>
<script  src="{{URL::to('js/custom-navigation.js')}}"></script>
<script  src="{{URL::to('js/custom-flex.js')}}"></script>
<script  src="{{URL::to('js/custom-owl.js')}}"></script>
<script  src="{{URL::to('js/custom-date-picker.js')}}"></script>
<!-- Page Scripts Ends -->


</body>
</html>