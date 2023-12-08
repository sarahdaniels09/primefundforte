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
                    <h1>Contact</h1>
                    <p>Get Support</p>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-style-two -->
       <!--  <section class="contact-style-two sec-pad">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-49.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">Need Help</span>
                                <h2><span>Connecting</span> World for <br />Better Solving</h2>
                                <p>Get in touch with our world class support team</p>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 info-block">
                                    <div class="info-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><img src="assets/images/icons/icon-84.png" alt=""></div>
                                            <h4>Request Call Back</h4>
                                            <p>Just Share your ph num, we will back.</p>
                                            <div class="link-box">
                                                <a href="tel:000000000"><span>Your Ph Num</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 info-block">
                                    <div class="info-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><img src="assets/images/icons/icon-85.png" alt=""></div>
                                            <h4>Live Chat Support</h4>
                                            <p>Chat live with our forex specialist.</p>
                                            <div class="link-box">
                                                <button><span>Start Chat</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <h3>Contact Info</h3>
                            <ul class="info-list clearfix">
                                <li>
                                    <div class="icon-box"><img src="assets/images/icons/icon-86.png" alt=""></div>
                                    <p>191 Integer Rd, 2nd Street, LA 08219 USA.</p>
                                </li>
                                <li>
                                    <div class="icon-box"><img src="assets/images/icons/icon-87.png" alt=""></div>
                                    <p><a href="tel:122256789091">+1 222 56 78 90 & 91</a></p>
                                </li>
                                <li>
                                    <div class="icon-box"><img src="assets/images/icons/icon-88.png" alt=""></div>
                                    <p><a href="mailto:customercare@example.com">customercare@example.com</a></p>
                                </li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="contact.html"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="contact.html"><i class="fa-brands fa-square-twitter"></i></a></li>
                                <li><a href="contact.html"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="contact.html"><i class="fa-brands fa-square-pinterest"></i></a></li>
                            </ul>
                            <div class="btn-box">
                                <a href="https://www.google.com/maps" target="_blank" class="theme-btn btn-two"><span>View On Google Map</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- contact-style-two end -->


        <!-- contact-section -->
        <section class="contact-section alternat-2 sec-pad centred">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Drop a Line</span>
                    <h2>Send Your <span>Message</span> to us</h2>
                </div>
                <form method="post" action="" id="contact-form"> 
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 left-column">
                            <div class="left-content">
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                   
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 right-column">
                            <div class="right-content">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Write Your Message Here..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="message-btn">
                        <button type="submit" class="theme-btn btn-three" name="submit-form"><span>Send Now</span></button>
                    </div>
                </form>
            </div>
        </section>
        <!-- contact-section end -->



      
 @include('includes.footer')