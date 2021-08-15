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
<header id="header-v1" class="navbar-wrapper">
    <button id="myBtn" title="Go to top"><span>&#8593;</span></button>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-topbar">
                    <div class="row">
                        <div class="col-sm-6 col-md-8 d-none d-sm-block">
                            <div class="topbar-info">
                                <a href="tel:+8809638144413"><i class="fa fa-phone"></i>Call Us Now:
                                    + 88 0963 81444 13</a>
                                <span>/</span>
                                <a href="mailto:enquiry@eastdelta.edu.bd">
                                    <i class="fa fa-envelope"></i>
                                    Email Now:
                                    enquiry@eastdelta.edu.bd
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="topbar-links">
                                <a href="{{ url('/login') }}"><i class="fa fa-lock"></i>Login</a>
                                <a href="{{ url('login') }}">Student Login</a>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default">
                    <div class="row w-100 no-gutters">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <a href="#">
                                        <img src="{{ asset('front/images') }}/edu.png" style="height: 38px;width: 131px;" alt="" />
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
                                        <a class="nav-link " title="Blog Coming soon" href="#">Blog</a>
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

<!-- Start: Slider Section -->
<div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel" data-interval="false" data-pause="hover">
    <!-- Carousel slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <figure>
                <img alt="Home Slide" class="d-block w-100" src="{{ asset('front/images') }}/header-slider/home-v1/header-slide.jpg" />
            </figure>
            <div class="carousel-caption" data-aos="fade-down">
                <h3>Online PDF Book Read Anytime, Anywhere!</h3>
                <h2>Discover Your Plan</h2>
                <p>There are many plans inside your mind which can be explore through reading Books.</p>
                <div class="slide-buttons hidden-sm hidden-xs">
                    <a href="{{ url('/login') }}" class="btn btn-primary">Get Started Now!<span></span></a>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <figure>
                <img alt="Home Slide" class="d-block w-100" src="{{ asset('front/images') }}/header-slider/home-v1/header-slide.jpg" />
            </figure>
            <div class="carousel-caption">
                <h3>Online Learning Anytime, Anywhere!</h3>
                <h2>Discover Your Roots</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                <div class="slide-buttons hidden-sm hidden-xs">
                    <a href="signin.html" class="btn btn-primary">Get Started Now!<span></span></a>
                    <a href="signup.html" class="btn btn-light">Join Now<span></span></a>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <figure>
                <img alt="Home Slide" class="d-block w-100" src="{{ asset('front/images') }}/header-slider/home-v1/header-slide.jpg" />
            </figure>
            <div class="carousel-caption">
                <h3>Online Learning Anytime, Anywhere!</h3>
                <h2>Discover Your Roots</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                <div class="slide-buttons hidden-sm hidden-xs">
                    <a href="signin.html" class="btn btn-primary">Get Started Now!<span></span></a>
                    <a href="signup.html" class="btn btn-light">Join Now<span></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="carousel-control-prev" href="#home-v1-header-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#home-v1-header-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- End: Slider Section -->

<!-- Start: Search Section -->
<section class="search-filters">
    <div class="container">
        <div class="filter-box">
            <div class="row align-items-center">
                <div class="col-md-4 col-sm-12">
                    <h3>What are you looking for at the EDU Library?</h3>
                </div>
                <div class="col-md-8 col-sm-12">
                    <form action="https://skille.presstigers.dev/index.html" method="get">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="sr-only" for="keywords">Search by Keyword</label>
                                    <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="catalog" id="catalog" class="form-control">
                                        <option>Search the Department</option>
                                        @forelse(departments() as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>

                                        @empty

                                        @endforelse

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="category" id="category" class="form-control">
                                        <option>All Publisher</option>
                                        @forelse(publishers() as $publisher)
                                            <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>

                                        @empty

                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <a href="#" class="btn btn-primary">Search Now<span></span></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Search Section -->

<!-- Start: Welcome Section -->
<section class="welcome-section" data-speed="0.06" data-revert="true">
    <div class="container">
        <div class="title-content text-center" data-aos="fade-up">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h6 class="sub-title">Welcome to the EAST DELTA UNIVERSITY</h6>
                    <h2 class="section-title">Welcome to the EDU LIBRARY</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-image" data-aos="fade-up-right">
                    <img src="{{ asset('front/images') }}/welcome-img-home-v1.jpg" class="algin-right" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="facts-counter" data-aos="fade-left">
                    <ul>
                        <li class="bg-light-blue">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="ebook"></i>
                                </div>
                                <span>Books<strong class="fact-counter">45780</strong></span>
                            </div>
                        </li>
                        <li class="bg-purple">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="ebook"></i>

                                </div>
                                <span>PDF Book<strong class="fact-counter">32450</strong></span>
                            </div>
                        </li>

                        <li class="bg-yellow">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="magazine"></i>
                                </div>
                                <span>Magazines<strong class="fact-counter">32450</strong></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="welcome-wrap" data-aos="fade-down">
                    <div class="welcome-text">
                        <p>
                            A library is a collection of materials, books or media that are easily accessible for use and not just for display purposes. It is responsible for housing updated information in order to meet the user's needs on a daily basis. A Library provides physical (hard copies documents) or digital access (soft copies) materials, and may be a physical location or a virtual space, or both. A library's collection can include printed materials and other physical resources in many formats such as DVDs, CDs and Cassette as well as access to information, music or other content held on bibliographic databases.
                            .</p>
                        <a class="btn btn-primary" href="{{ url('login') }}">Free Join Now<span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Welcome Section -->
<!-- Start: Category Filter -->
<section class="category-filter section-padding">
    <div class="container">
        <div class="title-content" data-aos="fade-up">
            <div class="row">
                <div class="col-md-8 text-center mx-auto">
                    <h6 class="sub-title">Latest Collections</h6>
                    <h2 class="section-title">Checkout New Releases <br /> Of Books, Audios and Videos</h2>
                </div>
            </div>
        </div>
        <div class="row text-center" data-aos="flip-left">
            <div class="col-sm-12">
                <div class="filter-buttons">
                    <div class="filter btn" data-filter="all">All Releases</div>
                    @forelse(\App\Department::query()->orderBy('name')->get() as $department)
                        <div class="filter btn" data-filter=".department{{$department->id}}">{{ $department->name }}</div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <div id="category-filter">
        <ul class="category-list">
            @forelse(\App\Book::query()->orderBy('title')->get() as $book)
                <li class="category-item department{{$book->department_id}}">
                    <figure style="    height: 409px;
    width: 409px;
    border: 1px solid rgba(0,0,0,0.15);
    border-radius: 9px;">
                        <img src="{{ asset('front/images') }}/undraw_studying_s3l7.svg" alt="New Releaase" />
                        <h3>{{ $book->title }}</h3>
                        <figcaption class="bg-black">
                            <div class="info-block">
                                <ol>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fa fa-share-alt"></i>
                                        </a>
                                    </li>

                                </ol>
                                <span class="author"><strong>Author:</strong> {{ $book->writer->name  }}</span>
                                <h4> {{ $book->title }}</h4>
                                <span class="author"><strong>ISBN:</strong> {{ $book->isbn }}</span>
                                <div class="rating">
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                </div>
                                <p>
                                    {{ $book->description }}
                                </p>
                                <a href="#">Available <i class="fa fa-long-arrow-right"></i> {{ $book->stocks->count()-$book->bookIssued->count() }} </a>
                            </div>
                        </figcaption>
                    </figure>
                </li>
            @empty

            @endforelse
        </ul>

        <div class="clearfix"></div>
    </div>
</section>
<!-- Start: Category Filter -->

<!-- Start: Features -->
<section class="features">
    <div class="container">
        <ul>
            <li data-aos="fade-left">
                <div class="feature-box">
                    <div class="image">
                        <img src="{{ asset('front/images') }}/features/home-v1/books-collection.jpg" alt="Books Collection" />
                    </div>
                    <h3>Collection Of Books</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

                </div>
            </li>
            <li data-aos="fade-down">
                <div class="feature-box">
                    <div class="image">
                        <img src="{{ asset('front/images') }}/features/home-v1/ebooks.jpg" alt="Books Collection" />
                    </div>
                    <h3>Download or Read eBooks</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

                </div>
            </li>

            <li data-aos="fade-left">
                <div class="feature-box">
                    <div class="image">
                        <img src="{{ asset('front/images') }}/features/home-v1/magazines.jpg" alt="Books Collection" />
                    </div>
                    <h3>Read Magazines</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

                </div>
            </li>

        </ul>
    </div>
</section>
<!-- End: Features -->

<!-- Start: Newsletter -->
<section class="newsletter section-padding">
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-md-5">
                <h6 class="sub-title">Newsletter</h6>
                <h2 class="section-title">Subscribe to get the latest updates</h2>
            </div>
            <div class="col-md-7">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Enter your Email!" id="newsletter" name="newsletter" type="email">
                        <input class="form-control btn btn-primary" value="Subscribe" type="submit">
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<!-- End: Newsletter -->

<!-- Start: Meet Staff -->
<section class="team section-padding">
    <div class="container">
        <div class="title-content" data-aos="fade-up">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="sub-title">TEAM-K</h6>
                    <h2 class="section-title">Meet Our Coder-Gems</h2>
                </div>
            </div>
        </div>
        <div class="team-list">
            <div class="row no-gutters">
                <div class="col-md-12 col-lg-4">
                    <div class="team-member first-member-box" data-aos="fade-down">
                        <figure>
                            <img class="rounded-border" src="{{ asset('front/images') }}/maynuddin.jpg" alt="team" />
                        </figure>
                        <div class="content-block bottom-left-rounded">
                            <div class="member-info">
                                <h4>Maynuddin Hasan</h4>
                                <span class="designation">Team K - Member</span>
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://facebook.com/maynuddin.shakil" target="_blank">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="team-member second-member-box" data-aos="fade-right">
                        <div class="content-block">
                            <div class="member-info">
                                <h4>Mir Imtiaz Mahmud</h4>
                                <span class="designation">Team K - Member</span>
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                            </div>
                        </div>
                        <figure>
                            <img class="rounded-border" src="{{ asset('front/images') }}/mir.jpg" alt="team" />
                        </figure>
                    </div>
                    <div class="team-member third-member-box" data-aos="fade-left">
                        <figure>
                            <img src="{{ asset('front/images') }}/rayhan.jpg" alt="team" />
                        </figure>
                        <div class="content-block">
                            <div class="member-info">
                                <h4>Rayhan Hossain</h4>
                                <span class="designation">Team K - Member</span>
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Meet Staff -->

<!-- Start: Latest Blog -->
<section class="latest-blog section-padding banner" >
    <div class="container">
        <div class="title-content text-center" data-aos="fade-up">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="sub-title">Our Blog</h6>
                    <h2 class="section-title">Latest Blog Posts</h2>
                </div>
            </div>
        </div>
        <div class="tabs-container">
            <div class="tabs-menu">
                <ul>
                    <li class="active">
                        <a href="#" class="bg-light-blue top-left-rounded">
                            <div class="title">
                                <i class="yellow"></i>
                                <h3>Books</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-purple">
                            <div class="title">
                                <i class="light-green"></i>
                                <h3>eBooks</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-pink">
                            <div class="title">
                                <i class="blue"></i>
                                <h3>DVDS</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-yellow">
                            <div class="title">
                                <i class="red"></i>
                                <h3>Magazines</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-indigo bottom-left-rounded">
                            <div class="title">
                                <i class="violet"></i>
                                <h3>Audio</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-orange">
                            <div class="title">
                                <i class="green"></i>
                                <h3>eAudio</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tabs-list">
                <div class="tab-content active">
                    <article>
                        <div class="post-detail">
                            <div class="info-bar">
                                <div class="comments">
                                    <a href="#">
                                        <i class="fa fa-comment"></i> 37
                                    </a>
                                </div>
                                <div class="likes">
                                    <a href="#">
                                        <i class="fa fa-thumbs-o-up"></i> 110
                                    </a>
                                </div>
                                <div class="viewed">
                                    <a href="#">
                                        <i class="fa fa-eye"></i> 180
                                    </a>
                                </div>
                                <div class="share">
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i> Share
                                    </a>
                                </div>
                            </div>
                            <h4>It uses dictionary over 200 Latin</h4>
                            <div class="author">
                                <a href="#">
                                    <i class="fa fa-user"></i> Adrey Pachai
                                </a>
                            </div>
                            <p>Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper
                                auctor, mauris lacus imperdiet turpis, et semper enim massa ut diam. Sed at
                                malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio
                                diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam
                                condimentum semper mauris vitae porttitor.</p>
                            <a href="#" class="btn btn-dark-gray">Read More -- Coming soon</a>
                        </div>
                        <figure>
                            <img src="{{ asset('front/images') }}/latest-blog-img-home-v1.jpg" alt="Latest Blog">
                            <figcaption>
                                <a href="#">
                                    <span class="date">07</span>
                                    <span class="month">Mar</span>
                                </a>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="tab-content">
                    <article>
                        <div class="post-detail">
                            <div class="info-bar">
                                <div class="comments">
                                    <a href="#">
                                        <i class="fa fa-comment"></i> 37
                                    </a>
                                </div>
                                <div class="likes">
                                    <a href="#">
                                        <i class="fa fa-thumbs-o-up"></i> 110
                                    </a>
                                </div>
                                <div class="viewed">
                                    <a href="#">
                                        <i class="fa fa-eye"></i> 180
                                    </a>
                                </div>
                                <div class="share">
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i> Share
                                    </a>
                                </div>
                            </div>
                            <h4>eBooks</h4>
                            <div class="author">
                                <a href="#">
                                    <i class="fa fa-user"></i> Adrey Pachai
                                </a>
                            </div>
                            <p>Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus.
                                Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem
                                erat. Etiam condimentum semper mauris vitae porttitor. Etiam posuere ultrices mauris
                                vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus
                                imperdiet turpis, et semper enim massa ut.</p>
                            <a href="#" class="btn btn-dark-gray">Read More</a>
                        </div>
                        <figure>
                            <img src="{{ asset('front/images') }}/latest-blog-img-home-v1-2.jpg" alt="Latest Blog">
                            <figcaption>
                                <a href="#">
                                    <span class="date">06</span>
                                    <span class="month">Mar</span>
                                </a>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="tab-content">
                    <article>
                        <div class="post-detail">
                            <div class="info-bar">
                                <div class="comments">
                                    <a href="#">
                                        <i class="fa fa-comment"></i> 37
                                    </a>
                                </div>
                                <div class="likes">
                                    <a href="#">
                                        <i class="fa fa-thumbs-o-up"></i> 110
                                    </a>
                                </div>
                                <div class="viewed">
                                    <a href="#">
                                        <i class="fa fa-eye"></i> 180
                                    </a>
                                </div>
                                <div class="share">
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i> Share
                                    </a>
                                </div>
                            </div>
                            <h4>DVDS</h4>
                            <div class="author">
                                <a href="#">
                                    <i class="fa fa-user"></i> Adrey Pachai
                                </a>
                            </div>
                            <p>Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper
                                auctor, mauris lacus imperdiet turpis, et semper enim massa ut diam. Sed at
                                malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio
                                diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam
                                condimentum semper mauris vitae porttitor.</p>
                            <a href="#" class="btn btn-dark-gray">Read More</a>
                        </div>
                        <figure>
                            <img src="{{ asset('front/images') }}/latest-blog-img-home-v1.jpg" alt="Latest Blog">
                            <figcaption>
                                <a href="#">
                                    <span class="date">05</span>
                                    <span class="month">Mar</span>
                                </a>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="tab-content">
                    <article>
                        <div class="post-detail">
                            <div class="info-bar">
                                <div class="comments">
                                    <a href="#">
                                        <i class="fa fa-comment"></i> 37
                                    </a>
                                </div>
                                <div class="likes">
                                    <a href="#">
                                        <i class="fa fa-thumbs-o-up"></i> 110
                                    </a>
                                </div>
                                <div class="viewed">
                                    <a href="#">
                                        <i class="fa fa-eye"></i> 180
                                    </a>
                                </div>
                                <div class="share">
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i> Share
                                    </a>
                                </div>
                            </div>
                            <h4>Magazines</h4>
                            <div class="author">
                                <a href="#">
                                    <i class="fa fa-user"></i> Adrey Pachai
                                </a>
                            </div>
                            <p>Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus.
                                Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem
                                erat. Etiam condimentum semper mauris vitae porttitor. Etiam posuere ultrices mauris
                                vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus
                                imperdiet turpis, et semper enim massa ut.</p>
                            <a href="#" class="btn btn-dark-gray">Read More</a>
                        </div>
                        <figure>
                            <img src="{{ asset('front/images') }}/latest-blog-img-home-v1-2.jpg" alt="Latest Blog">
                            <figcaption>
                                <a href="#">
                                    <span class="date">04</span>
                                    <span class="month">Mar</span>
                                </a>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="tab-content">
                    <article>
                        <div class="post-detail">
                            <div class="info-bar">
                                <div class="comments">
                                    <a href="#">
                                        <i class="fa fa-comment"></i> 37
                                    </a>
                                </div>
                                <div class="likes">
                                    <a href="#">
                                        <i class="fa fa-thumbs-o-up"></i> 110
                                    </a>
                                </div>
                                <div class="viewed">
                                    <a href="#">
                                        <i class="fa fa-eye"></i> 180
                                    </a>
                                </div>
                                <div class="share">
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i> Share
                                    </a>
                                </div>
                            </div>
                            <h4>Audio</h4>
                            <div class="author">
                                <a href="#">
                                    <i class="fa fa-user"></i> Adrey Pachai
                                </a>
                            </div>
                            <p>Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper
                                auctor, mauris lacus imperdiet turpis, et semper enim massa ut diam. Sed at
                                malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio
                                diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam
                                condimentum semper mauris vitae porttitor.</p>
                            <a href="#" class="btn btn-dark-gray">Read More</a>
                        </div>
                        <figure>
                            <img src="{{ asset('front/images') }}/latest-blog-img-home-v1.jpg" alt="Latest Blog">
                            <figcaption>
                                <a href="#">
                                    <span class="date">03</span>
                                    <span class="month">Mar</span>
                                </a>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="tab-content">
                    <article>
                        <div class="post-detail">
                            <div class="info-bar">
                                <div class="comments">
                                    <a href="#">
                                        <i class="fa fa-comment"></i> 37
                                    </a>
                                </div>
                                <div class="likes">
                                    <a href="#">
                                        <i class="fa fa-thumbs-o-up"></i> 110
                                    </a>
                                </div>
                                <div class="viewed">
                                    <a href="#">
                                        <i class="fa fa-eye"></i> 180
                                    </a>
                                </div>
                                <div class="share">
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i> Share
                                    </a>
                                </div>
                            </div>
                            <h4>eAudio</h4>
                            <div class="author">
                                <a href="#">
                                    <i class="fa fa-user"></i> Adrey Pachai
                                </a>
                            </div>
                            <p>Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus.
                                Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem
                                erat. Etiam condimentum semper mauris vitae porttitor. Etiam posuere ultrices mauris
                                vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus
                                imperdiet turpis, et semper enim massa ut.</p>
                            <a href="#" class="btn btn-dark-gray">Read More</a>
                        </div>
                        <figure>
                            <img src="{{ asset('front/images') }}/latest-blog-img-home-v1-2.jpg" alt="Latest Blog">
                            <figcaption>
                                <a href="#">
                                    <span class="date">02</span>
                                    <span class="month">Mar</span>
                                </a>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Latest Blog -->

<!-- Start: Our Community Section -->
<section class="community-testimonial">
    <div class="container">
        <div class="title-content text-center" data-aos="fade-up">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="sub-title">User Testimonial</h6>
                    <h2 class="section-title">Words From our Students</h2>
                </div>
            </div>
        </div>
        <div class="owl-carousel">

            @forelse(reviews() as $review)
                <div class="single-testimonial-box" data-aos="{{ $loop->iteration == 1 ? 'fade-left' : 'fade-right' }} ">
                    <div class="top-portion">
                        <img src="{{ asset('front/images') }}/testimonial-image-01.jpg" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                {{ $review->comments }}
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            {{ $review->student->name }}<small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @empty

            @endforelse
        </div>
    </div>
</section>
<!-- End: Our Community Section -->


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
                            <a href="{{ url("/") }}">
                                <img src="{{ asset('front/images') }}/edu.png"  style="height: 38px;width: 131px;" alt="LIBRARIA" />
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
