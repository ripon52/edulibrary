<!DOCTYPE html>
<html lang="zxx">
<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <!-- Title -->
    <title>..:: EDU Library - Online Library ::..</title>

    <!-- Favicon -->
    <link href="{{ asset('front/images') }}/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link href="{{ asset('front/css') }}/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Animation-->
    <link href="{{ asset('front/css') }}/aos.css" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link href="{{ asset('front/css') }}/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css') }}/mmenu.positioning.css" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link href="{{ asset('front/css') }}/style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="{{ asset('front/js') }}/html5shiv.min.js"></script>
    <script src="{{ asset('front/js') }}/respond.min.js"></script>
    <![endif]-->
</head>


<body>


<!-- Start: Header Section -->
<header id="header-v1" style="background: #F8F8F8; padding: 20px 0; color: #0a2730!important;" class="navbar-wrapper">
    <button id="myBtn" title="Go to top"><span>&#8593;</span></button>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-topbar">
                    <div class="row">
                        <div class="col-sm-6 col-md-8 d-none d-sm-block">
                            <div class="topbar-info">
                                <a href="tel:+8809638144413" style="color: #0a2730!important;"><i class="fa fa-phone"></i>Call Us Now:
                                    + 88 0963 81444 13</a>
                                <span>/</span>
                                <a style="color: #0a2730!important;" href="mailto:enquiry@eastdelta.edu.bd">
                                    <i class="fa fa-envelope"></i>
                                    Email Now:
                                    enquiry@eastdelta.edu.bd
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="topbar-links" style="color: #0a2730!important;">
                                <a  style="color: #0a2730!important;" href="{{ url('/login') }}"><i class="fa fa-lock"></i>Login</a>
                                <a style="color: #0a2730!important;" href="{{ url('login') }}">Student Login</a>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default">
                    <div class="row w-100 no-gutters">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <a href="index.html">
                                        <img src="{{ asset('front/images') }}/edu.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Header Topbar -->
                            <div class="collapse navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav mr-auto">
                                    <li class="nav-item  active">
                                        <a class="nav-link " href="/">Home</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="books-media-list-view.html">Books</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="books-media-list-view.html">
                                                    Books  List
                                                </a>
                                            </li>
                                            <li><a href="books-media-gird-view.html">
                                                    PDF Books </a></li>

                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link " href="blog-list.html">Blog</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu d-lg-none">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                        <div id="mobile-menu">
                            <ul>
                                <li class="mobile-title">
                                    <h4>Menu</h4>
                                    <a href="#" class="close"></a>
                                </li>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="books-media-list-view.html">Books </a>
                                    <ul>
                                        <li> <a href="books-media-list-view.html"> Books  List  </a>  </li>
                                        <li><a href="books-media-gird-view.html">  PDF Books </a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="blog-list.html">Blog</a>

                                </li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- End: Header Section -->



<div class="google-map" style="margin-top:200px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14757.983926475867!2d91.8072752!3d22.3726523!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x812e380dbc9fee53!2sEast%20Delta%20University!5e0!3m2!1sen!2sbd!4v1628754228551!5m2!1sen!2sbd" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<div class="about-company-detail">
    <div class="container">
        <ul>
            <li>
                <img src="images/icons/location-icon.png" alt="">
                <h6>Our Location</h6>
                <ol>
                    <li> East Delta University </li>
                    <li> Abdullah Al Noman Road </li>
                    <li> Noman Society </li>
                    <li>  East Nasirabad, Khulshi </li>
                    <li>  Chattogram: 4209 </li>
                </ol>
            </li>
            <li>
                <img src="images/icons/phone-icon.png" alt="">
                <h6>Phone and Fax</h6>
                <ol>
                    <li><a href="tel:+8809638144413"><em>Phone:</em>  + 88 0963 81444 13</a></li>
                    <li><a href="tel:+8801714102062"><em>Phone:</em>  + 88 01714 102062</a></li>
                    <li><a href="tel:+880312-558645-6"><em>Phone:</em>  +88 0312-558645-6</a></li>
                </ol>
            </li>
            <li>
                <img src="images/icons/email-website-icon.png" alt="">
                <h6>Email Address</h6>
                <ol>
                    <li><a href="#">Enquiries:enquiry@eastdelta.edu.bd </a></li>
                    <li><a href="#">Admissions:admissions@eastdelta.edu.bd </a></li>
                    <li><a href="#">IT Help Desk:helpdesk@eastdelta.edu.bd </a></li>
                    <li><a href="#">Payment Enquiry:PAYQ@eastdelta.edu.bd </a></li>
                </ol>
            </li>
        </ul>
    </div>
</div>
<!-- Start: Contact Us Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="contact-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="sub-heading-v2">Get In Touch</h6>
                            <h2 class="heading-v2">Send Us A Message</h2>
                            <p class="lead-text">Sed nec fermentum leo. Vestibulum pulvinar, risus quis mollis posuere, lorem lectus pretium turpis, non elementum eros metus ut purus. Morbi hendrerit molestie augue luctus euismod. </p>
                        </div>
                        <div class="col-md-12">
                            <div class="contact-form">
                                <form id="contact" name="contact" action="https://skille.presstigers.dev/contact.html" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="First Name" name="first-name" id="first-name" size="30" value="" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Last Name" name="last-name" id="last-name" size="30" value="" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email" name="email" id="email" size="30" value="" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Phone Number" name="phone" id="phone" size="30" value="" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Write Your Message ..." id="message" aria-required="true"></textarea>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Accept <a
                                                    href="#">terms</a> and <a href="#">privacy policy</a>.</label>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group form-submit">
                                                <input class="btn btn-secondary" id="submit-contact-form" type="button" name="submit" value="Send Message" />
                                            </div>
                                        </div>
                                        <div id="success" class="d-none">
                                                <span>Your message was sent successfully! Our
                                                    team will contact you soon.</span>
                                        </div>

                                        <div id="error" class="d-none">
                                                <span>Something went wrong, try refreshing and
                                                    submitting the form again.</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- End: Contact Us Section -->


<!-- Start: Social Network -->
<section class="social-network section-padding">
    <div class="container">
        <div class="title-content text-center" data-aos="fade-up">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="sub-title">Our Social Network</h6>
                    <h2 class="section-title">Follow Us</h2>
                </div>
            </div>
        </div>
        <ul>
            <li>
                <a class="facebook" href="#" target="_blank">
                    <i class="fa fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a class="twitter" href="#" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a class="google" href="#" target="_blank">
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
            <li>
                <a class="rss" href="#" target="_blank">
                    <i class="fa fa-rss"></i>
                </a>
            </li>
            <li>
                <a class="linkedin" href="#" target="_blank">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li>
                <a class="youtube" href="#" target="_blank">
                    <i class="fa fa-youtube"></i>
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- End: Social Network -->

<!-- Start: Footer -->
<footer class="site-footer">
    <div class="container" data-aos="fade-down">
        <div class="footer-widgets">
            <div class="row w-100">
                <div class="col-lg-5 col-md-6 widget-container">
                    <div id="text-2" class="widget widget_text">
                        <div class="about-us">
                            <a href="index.html">
                                <img src="{{ asset('front/images') }}/logo-footer-v1.png" alt="LIBRARIA" />
                            </a>
                        </div>
                        <div class="textwidget">
                            The EDU library is engaged in learning and discovery as essential participants in the educational community. We develop, organize, provide access to and preserve materials to meet the needs of present and future generations of students and scholars. We explore and implement innovative technologies and services to deliver information and scholarly resources conveniently to users. We create wholesome environments for study, teaching and research outside the classroom.
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 widget-container">
                    <div id="nav_menu-2" class="widget widget_nav_menu">
                        <h3 class="footer-widget-title">Quick Links</h3>
                        <div class="menu-quick-links-container">
                            <ul id="menu-quick-links" class="menu">
                                <li><a href="https://www.eastdelta.edu.bd/central-library/" target="_blank">Library News</a></li>
                                <li><a href="https://www.eastdelta.edu.bd/idea-behind-edu/" target="_blank">History</a></li>
                                <li><a href="https://www.eastdelta.edu.bd/board-of-advisors/" target="_blank">Board of Trustees</a></li>
                                <li><a href="http://ebook.eastdelta.edu.bd/Home/Index" target="_blank">Official eBook Portal by EDU</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 widget-container">
                    <div id="text-4" class="widget widget_text">
                        <h3 class="footer-widget-title">Timing</h3>
                        <div class="timming-text-widget">
                            <time datetime="2017-02-13">Mon - Thu: 9am - 9pm</time>
                            <time datetime="2017-02-13">Fri: 9am - 6pm</time>
                            <time datetime="2017-02-13">Sat: 9am - 5pm</time>
                            <time datetime="2017-02-13">Sun: 1pm - 6pm</time>
                            <ul>
                                <li><a href="#">Closings</a></li>
                                <li><a href="#">Branches</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 widget-container">
                    <div class="widget twitter-widget">
                        <h3 class="footer-widget-title">Contact Info</h3>
                        <address>
                            <div class="info">
                                <i class="fa fa-location-arrow"></i>
                                <span>Abdullah Al Noman Road, Noman Society East Nasirabad, Khulshi, Chattogram: 4209</span>
                            </div>
                            <div class="info">
                                <i class="fa fa-envelope"></i>
                                <span><a href="mailto:enquiry@eastdelta.edu.bd">enquiry@eastdelta.edu.bd</a></span>
                            </div>
                            <div class="info">
                                <i class="fa fa-phone"></i>
                                <span><a href="tel:+8809638144413">+ 88 0963 81444 13</a></span>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="footer-text col-md-12 text-center">
                    <p>&copy; {{ Date('Y') }} <a href="/">EDU Library</a>. All rights reserved.</p>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- End: Footer -->

<!-- jQuery Latest Version 1.x -->
<script src="{{ asset('front/js') }}/jquery-2.2.3.min.js"></script>

<!-- jQuery UI -->
<script src="{{ asset('front/js') }}/jquery-ui.min.js"></script>

<!-- jQuery Easing -->
<script src="{{ asset('front/js') }}/jquery.easing.1.3.js"></script>

<!-- Bootstrap -->
<script src="{{ asset('front/js') }}/bootstrap.bundle.min.js"></script>

<!-- Mobile Menu -->
<script src="{{ asset('front/js') }}/mmenu.min.js"></script>

<!-- Harvey - State manager for media queries -->
<script src="{{ asset('front/js') }}/harvey.min.js"></script>

<!-- Bootstrap Dragable Carousel -->
<script src='{{ asset('front/js') }}/touchSwipe.js'></script>

<!-- UI Animation -->
<script src="{{ asset('front/js') }}/aos.js"></script>
<script src="{{ asset('front/js') }}/highlight.min.js"></script>

<!-- Waypoints - Load Elements on View -->
<script src="{{ asset('front/js') }}/waypoints.min.js"></script>

<!-- Facts Counter -->
<script src="{{ asset('front/js') }}/facts.counter.min.js"></script>

<!-- MixItUp - Category Filter -->
<script src="{{ asset('front/js') }}/mixitup.min.js"></script>

<!-- Owl Carousel -->
<script src="{{ asset('front/js') }}/owl.carousel.min.js"></script>

<!-- Accordion -->
<script src="{{ asset('front/js') }}/accordion.min.js"></script>

<!-- Masonry -->
<script src="{{ asset('front/js') }}/masonry.min.js"></script>

<!-- Carousel Swipe -->
<script src="{{ asset('front/js') }}/carousel.swipe.min.js"></script>

<!-- Testimonial Home Page V3 -->
<script src="{{ asset('front/js') }}/card-slider-min.js"></script>

<!-- Custom Scripts -->
<script src="{{ asset('front/js') }}/main.js"></script>

</body>


</html>
