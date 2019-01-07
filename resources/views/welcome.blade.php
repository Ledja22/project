@extends('layouts.app')


@section('content')
<!--========================= FLEX SLIDER =====================-->
<section class="flexslider-container" id="flexslider-container-4">

    <div class="flexslider slider tour-slider" id="slider-4">
        <ul class="slides">

            <li class="item-1 back-size" style="background:			linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(images/tour-slider-1.jpg) 50% 15%;
	background-size:cover;
	height:100%;">
                <div class="meta">
                    <div class="container">
                        <span class="highlight-price highlight-2">STARTING FROM 1200$ ONLY</span>
                        <h2>Switzerland</h2>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                    </div><!-- end container -->
                </div><!-- end meta -->
            </li><!-- end item-1 -->

            <li class="item-2 back-size" style="background:			linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(images/tour-slider-1.jpg) 50% 15%;
	background-size:cover;
	height:100%;">
                <div class=" meta">
                    <div class="container">
                        <span class="highlight-price highlight-2">STARTING FROM 1200$ ONLY</span>
                        <h2>Switzerland</h2>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                    </div><!-- end container -->
                </div><!-- end meta -->
            </li><!-- end item-2 -->

        </ul>
    </div><!-- end slider -->

    <div class="search-tabs" id="search-tabs-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <ul class="nav nav-tabs">
                        <li><a href="#flights" data-toggle="tab"><span><i class="fa fa-plane"></i></span><span class="st-text">Flights</span></a></li>
                        <li><a href="#hotels" data-toggle="tab"><span><i class="fa fa-building"></i></span><span class="st-text">Hotels</span></a></li>
                        <li class="active"><a href="#tours" data-toggle="tab"><span><i class="fa fa-suitcase"></i></span><span class="st-text">Tours</span></a></li>
                        <li><a href="#cruise" data-toggle="tab"><span><i class="fa fa-ship"></i></span><span class="st-text">Cruise</span></a></li>
                        <li><a href="#cars" data-toggle="tab"><span><i class="fa fa-car"></i></span><span class="st-text">Cars</span></a></li>
                    </ul>

                    <div class="tab-content">

                        <div id="flights" class="tab-pane">
                            <form>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control" placeholder="From" >
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control" placeholder="To" >
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                        <div class="row">

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control dpd2" placeholder="Check Out" >
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                        <div class="form-group right-icon">
                                            <select class="form-control">
                                                <option selected>Adults</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                        <button class="btn btn-orange">Search</button>
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </form>
                        </div><!-- end flights -->

                        <div id="hotels" class="tab-pane">
                            <form>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control dpd2" placeholder="Check Out" >
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Rooms</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-6 col-sm-6 col-md-4">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Adults</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-6 col-sm-6 col-md-4">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Kids</option>
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                        <button class="btn btn-orange">Search</button>
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </form>
                        </div><!-- end hotels -->

                        <div id="tours" class="tab-pane in active">
                            <form>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                                        <div class="form-group left-icon">
                                            <input type="text" class="form-control" placeholder="City,Country" />
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group right-icon">
                                            <select class="form-control">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Adults</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Kids</option>
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                        <button class="btn btn-orange">Search</button>
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </form>
                        </div><!-- end tours -->

                        <div id="cruise" class="tab-pane">
                            <form>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control" placeholder="From" >
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control" placeholder="To" >
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                        <div class="row">

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control dpd2" placeholder="Check Out" >
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                        <div class="form-group right-icon">
                                            <select class="form-control">
                                                <option selected>Adults</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                        <button class="btn btn-orange">Search</button>
                                    </div><!-- end columns -->

                                </div><!-- end columns -->
                            </form>
                        </div><!-- end cruises -->

                        <div id="cars" class="tab-pane">
                            <form>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
                                        <div class="row">

                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control" placeholder="Country" />
                                                    <i class="fa fa-globe"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control" placeholder="City" />
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-sm-12 col-md-4">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control" placeholder="Location" />
                                                    <i class="fa fa-street-view"></i>
                                                </div>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                        <div class="row">

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control dpd2" placeholder="Check Out" >
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                        <button class="btn btn-orange">Search</button>
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </form>
                        </div><!-- end cars -->

                    </div><!-- end tab-content -->

                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->

</section><!-- end flexslider-container -->


<!--=============== TOUR OFFERS ===============-->
<section id="tour-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading">
                    <h2>Tour Offers</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->

                <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">

                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="tour-detail-right-sidebar.html">
                                    <img src="images/tour-1.jpg" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->

                            <div class="offer-price-2">
                                <ul class="list-unstyled">
                                    <li class="price">$568.00<a href="tour-detail-right-sidebar.html" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                </ul>
                            </div><!-- end offer-price-2 -->

                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                    <a href="tour-detail-right-sidebar.html">China Temple Tour</a>
                                    <p>From: China</p>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star grey"></i></span>
                                    </div>
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="tour-detail-right-sidebar.html">
                                    <img src="images/tour-2.jpg" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->

                            <div class="offer-price-2">
                                <ul class="list-unstyled">
                                    <li class="price">$745.00<a href="tour-detail-right-sidebar.html" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                </ul>
                            </div><!-- end offer-price-2 -->

                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                    <a href="tour-detail-right-sidebar.html">African Safari Tour</a>
                                    <p>From: Africa</p>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star grey"></i></span>
                                    </div>
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="tour-detail-right-sidebar.html">
                                    <img src="images/tour-3.jpg" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->

                            <div class="offer-price-2">
                                <ul class="list-unstyled">
                                    <li class="price">$459.00<a href="tour-detail-right-sidebar.html" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                </ul>
                            </div><!-- end offer-price-2 -->

                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                    <a href="tour-detail-right-sidebar.html">Paris City Tour</a>
                                    <p>From: Paris</p>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star grey"></i></span>
                                    </div>
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="tour-detail-right-sidebar.html">
                                    <img src="images/tour-4.jpg" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->

                            <div class="offer-price-2">
                                <ul class="list-unstyled">
                                    <li class="price">$745.00<a href="tour-detail-right-sidebar.html" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                </ul>
                            </div><!-- end offer-price-2 -->

                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                    <a href="tour-detail-right-sidebar.html">China Temple Tour</a>
                                    <p>From: China</p>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star grey"></i></span>
                                    </div>
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->

                </div><!-- end owl-tour-offers -->

                <div class="view-all text-center">
                    <a href="tour-grid-right-sidebar.html" class="btn btn-black">View All</a>
                </div><!-- end view-all -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end tour-offers -->

<!--========================= NEWSLETTER-1 ==========================-->
<section id="newsletter-1" class="section-padding back-size newsletter">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h2>Subscribe Our Newsletter</h2>
                <p>Subscibe to receive our interesting updates</p>
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                            <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                        </div>
                    </div>
                </form>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end newsletter-1 -->

@endsection

