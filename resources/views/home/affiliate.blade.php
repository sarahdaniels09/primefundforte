@include('includes.header')

    <!-- page-title -->
    <section class="page-title centred">
            <div class="bg-layer" style="background-image: url({{ asset('temp/prime')}}/assets/images/background/page-title.jpg);"></div>
            <div class="line-box">
                <div class="line-1"></div>
                <div class="line-2"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Affiliate</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


       
        <!-- apps-section -->
        <section class="apps-section bg-color-1">
            <div class="pattern-layer" style="background-image: url({{ asset('temp/prime')}}/assets/images/shape/shape-7.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('temp/prime')}}/assets/images/resource/apps-1.jpg" alt=""></figure>
                            <div class="image-content">
                                <div class="text-box">
                                    <h2>4.7<span>Million +</span></h2>
                                    <p>Paid Commission</p>
                                </div>
                                <ul class="rating clearfix">
                                    <li>4.96</li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">Reward</span>
                                <h2>Affiliate <span>Program</span></h2>
                            </div>
                            <div class="text-box">
                                <p>
                                Get upto 5% commission through our affiliate program, the Pipsterevolution team has developed an 
                                affiliate program that gives investors an opportunity to earn an extra income for promoting Prime Fund Forte Trading platform.
                                </p>
                            </div>
                            
                            <div class="btn-box">
                                <a href="{{ url('/login') }}" class="theme-btn btn-three"><span>Get Started</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- apps-section end -->





      
 @include('includes.footer')