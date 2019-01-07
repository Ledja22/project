@extends('layouts.app')

@section('content')

<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="about-content-2" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                    <div id="abt-cnt-2-img">
                        <img src="images/about-content-2.png" class="img-responsive" alt="about-img" />
                    </div><!-- end abt-cnt-2-img -->
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                    <div id="abt-cnt-2-text">
                        <h2>Welcome to<span><span><i class="fa fa-plane"></i> Star</span>Travels</span></h2>
                        <p>Lorem ipsum dolor sit amet, conse adipiscing elit. Curabitur metus felis, venenatis eu ultricies vel, vehicula eu urna. Phasellus eget augue id est fringilla feugiat id a tellus. Sed hendrerit quam sed ante euismod posuere ultricies. Vestibulum suscipit convallis purus ut mattis. In eget turpis eget urna molestie ultricies in sagittis nunc. Sed accumsan leo in mauris rhoncus volutpat. In eget turpis eget urna molestie ultricies in sagittis nunc. Sed accumsan leo in mauris rhoncus volutpat.</p>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="abt-cnt-2-ftr">
                                    <span><i class="fa fa-diamond"></i></span>
                                    <h4>Best Service</h4>
                                </div><!-- end abt-cnt-2-ftr -->
                            </div><!-- end columns -->

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="abt-cnt-2-ftr">
                                    <span><i class="fa fa-clock-o"></i></span>
                                    <h4>24/7 Availability</h4>
                                </div><!-- end abt-cnt-2-ftr -->
                            </div><!-- end columns -->

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="abt-cnt-2-ftr">
                                    <span><i class="fa fa-star"></i></span>
                                    <h4>5 Star Rating</h4>
                                </div><!-- end abt-cnt-2-ftr -->
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end abt-cnt-2-text -->
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end about-content-2 -->

    <div id="video-banner" class="banner-padding back-size">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Take a Video Tour</h2>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>

                    <a href="https://youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube" id="play-button"><span><i class="fa fa-play"></i></span></a>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end video-banner -->

</section><!-- end innerpage-wrapper -->
<!--======================= BEST FEATURES =====================-->
<section id="best-features" class="banner-padding black-features">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-dollar"></i></span>
                    <h3>Best Price Guarantee</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-lock"></i></span>
                    <h3>Safe and Secure</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-thumbs-up"></i></span>
                    <h3>Best Travel Agents</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-bars"></i></span>
                    <h3>Travel Guidelines</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end best-features -->
@endsection