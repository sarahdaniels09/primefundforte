<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Prime Fort Fund</title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('temp/prime')}}/assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('temp/prime')}}/assets/css/font-awesome-all.css" rel="stylesheet">
<link href="{{ asset('temp/prime')}}/assets/css/flaticon.css" rel="stylesheet">
<link href="{{ asset('temp/prime')}}/assets/css/owl.css" rel="stylesheet">
<link href="{{ asset('temp/prime')}}/assets/css/bootstrap.css" rel="stylesheet">
<link href="{{ asset('temp/prime')}}/assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="{{ asset('temp/prime')}}/assets/css/animate.css" rel="stylesheet">
<link href="{{ asset('temp/prime')}}/assets/css/nice-select.css" rel="stylesheet">
<link href="{{ asset('temp/prime')}}/assets/css/style.css" rel="stylesheet">
<link href="{{ asset('temp/prime')}}/assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">

        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="p" class="letters-loading">
                               p
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="m" class="letters-loading">
                                m
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                           <!--  <span data-text-preloader="o" class="letters-loading">
                                f
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                t
                            </span> -->
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


      

        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="outer-container">
                    
                    <div class="right-column">
                        
                    <div id="google_translate_element"></div>
                        
                        <script type="text/javascript">
                        function googleTranslateElementInit() {
                        new google.translate.TranslateElement(
                        {pageLanguage: 'en'},
                        'google_translate_element'
                        );
                        }
                        </script>
                        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        
                    </div>

                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-area">
                            <div class="logo-box">
                                <figure class="logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('temp/prime')}}/assets/images/p_logo.png" alt=""></a></figure>
                            </div>
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="{{ url('/') }}">Home</a>
                                            
                                        </li>  

                                        <li class="dropdown"><a href="{{ url('/about') }}">About Us</a>
                                            
                                        </li>  

                                        <li class="dropdown"><a href="{{ url('/trading/plan') }}">Trading Plan</a>
                                            
                                        </li>
                                        <li class="dropdown"><a href="{{ url('/affilite') }}">Affiliate</a>
                                           
                                        </li> 
                                        <li class="dropdown"><a href="{{ url('/contact') }}">Support</a>
                                           
                                        </li> 
                                        
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="search-box-outer search-toggler"><i class="flaticon-search"></i></div>
                            <div class="clients-box">
                                <div class="icon-box"><img src="{{ asset('temp/prime')}}/assets/images/icons/icon-6.png" alt=""></div>
                                <a href="{{ url('/login') }}">Client Portal<i class="flaticon-right-down"></i></a>
                            </div>
                            <div class="btn-box"><a href="{{ url('/register') }}" class="theme-btn btn-one"><span>Open an A/c</span></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-area">
                            <div class="logo-box">
                                <figure class="logo"><a href="#"><img src="{{ asset('temp/prime')}}/assets/images/logo.png" alt=""></a></figure>
                            </div>
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="search-box-outer search-toggler"><i class="flaticon-search"></i></div>
                            <div class="clients-box">
                                <div class="icon-box"><img src="{{ asset('temp/prime')}}/assets/images/icons/icon-6.png" alt=""></div>
                                <a href="{{ url('/login') }}">Client Portal<i class="flaticon-right-down"></i></a>
                            </div>
                            <div class="btn-box"><a href="{{ url('/register') }}" class="theme-btn btn-one"><span>Open an A/c</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="#"><img src="{{ asset('temp/prime')}}/assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:support@primefundforte.org">support@primefundforte.org</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <!-- <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul> -->
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


 <!-- TradingView Widget BEGIN -->
 <div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright" style="display:none;"><a href="https://www.tradingview.com" rel="noopener" target="_blank"  style="display:none;"><span class="blue-text">Ticker Tape</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    },
    {
      "description": "DODGE ",
      "proName": "BITKUB:DOGETHB"
    },
    {
      "description": "XRP",
      "proName": "BITFINEX:XRPUSD"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END --> 
