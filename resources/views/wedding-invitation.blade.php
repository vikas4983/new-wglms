<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Love - Wedding Mobile Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/frontend-theme/images/favicon.png') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css"
        integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/framework7.material.colors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/framework7.material.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/style.css') }}">
</head>

<body>

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <!-- panel -->
    {{-- <div class="panel panel-left panel-cover panel-control">
        <ul>
            <li>
                <div class="photos">
                    <i class="fa fa-heart"></i>
                    <h3>Mario Doe & Julie Doe</h3>
                </div>
            </li>
            <li>
                <a class="close-panel" href="index.html"><i class="fa fa-home"></i>Home</a>
            </li>
            <li>
                <div class="list-block accordion-list">
                    <div class="accordion-item">
                        <a href="#" class="item-content item-link">
                            <div class="item-inner">
                                <i class="fa fa-shopping-bag"></i>Profile
                            </div>
                        </a>
                        <div class="accordion-item-content">
                            <ul>
                                <li><a class="close-panel" href="profile1.html">Profile Mario Doe</a></li>
                                <li><a class="close-panel" href="profile2.html">Profile Julie Doe</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="list-block accordion-list">
                    <div class="accordion-item">
                        <a href="#" class="item-content item-link">
                            <div class="item-inner">
                                <i class="fa fa-rss"></i> Blog
                            </div>
                        </a>
                        <div class="accordion-item-content">
                            <ul>
                                <li><a class="close-panel" href="blog.html">Blog</a></li>
                                <li><a class="close-panel" href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a class="close-panel" href="gallery.html"><i class="fa fa-th-large"></i>Gallery</a>
            </li>
            <li>
                <a class="close-panel" href="faq.html"><i class="fa fa-question-circle"></i>Faq</a>
            </li>
            <li>
                <a class="close-panel" href="404.html"><i class="fa fa-times-circle-o"></i>404 Page</a>
            </li>
            <li>
                <a class="close-panel" href="contact.html"><i class="fa fa-envelope"></i>Contact Us</a>
            </li>
            <li>
                <a class="close-panel" href="login.html"><i class="fa fa-sign-in"></i>Login</a>
            </li>
            <li>
                <a class="close-panel" href="register.html"><i class="fa fa-user-plus"></i>Register</a>
            </li>
        </ul>
    </div> --}}
    <!-- end panel -->

    <!-- panel -->
    {{-- <div class="panel panel-right panel-cover panel-control">
        <ul>
            <li class="first">
                <h6>Find & follow us</h6>
            </li>
            <li>
                <a href="" class="external close-panel"><i class="fa fa-facebook"></i> Facebook</a>
            </li>
            <li>
                <a href="" class="external close-panel"><i class="fa fa-twitter"></i>Twitter</a>
            </li>
            <li>
                <a href="" class="external close-panel"><i class="fa fa-linkedin"></i>Linkedin</a>
            </li>
            <li>
                <a href="" class="external close-panel"><i class="fa fa-google"></i>Google +</a>
            </li>
            <li>
                <a href="" class="external close-panel"><i class="fa fa-instagram"></i>Instagram</a>
            </li>
            <li>
                <a href="" class="external close-panel"><i class="fa fa-dribbble"></i>Dribbble</a>
            </li>
            <li>
                <a href="" class="external close-panel"><i class="fa fa-behance"></i>Behance</a>
            </li>
        </ul>
        <div class="contact-panel">
            <p><span>Address:</span> Lorem Ipsum Dolor 09. </p>
            <p><span>Tel:</span> 900000002</p>
            <p><span>Fax:</span> 0400000098</p>
            <p><span>Email:</span> info@youremail.com</p>
        </div>
    </div> --}}
    <!-- end panel -->

    <!-- views -->
    <div class="views">
        <div class="view view-main">

            <!-- navbar -->
            <div class="navbar">
                <div class="navbar-inner">
                    {{-- <div class="left navbar-icon">
                        <a href="" class="link open-panel" data-panel="left"><i class="fa fa-bars"></i></a>
                    </div> --}}
                    <div class="center site-title">
                        <a href="index.html">
                            <h1>Love <i class="fa fa-heart"></i></h1>
                        </a>
                    </div>
                    {{-- <div class="right navbar-icon">
                        <a href="" class="link open-panel" data-panel="right"><i
                                class="fa fa-envelope"></i></a>
                    </div> --}}
                </div>
            </div>
            <!-- end navbar -->

            <!-- pages -->
            <div class="pages">
                <div class="page" data-page="home">
                    <div class="page-content">

                        <!-- slider -->
                        <div class="slider-slick app-pages">
                            <div class="slider-entry">

                                <img src="{{ asset('assets/frontend-theme/images/slider1.png') }}" alt="">
                                <div class="overlay"></div>
                                <div class="caption">
                                    {{-- <div class="container">
                                        <h2>Wedding Templates</h2>
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <a class="app-button" href="">Read More</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="slider-entry">
                                <div class="overlay"></div>
                                <img src="{{ asset('assets/frontend-theme/images/slider1.png') }}" alt="">
                                <div class="caption">
                                    {{-- <div class="container">
                                        <h2>Modern Templates</h2>
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <a class="app-button" href="">Read More</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="slider-entry">
                                <div class="overlay"></div>
                                <img src="{{ asset('assets/frontend-theme/images/slider1.png') }}" alt="">
                                <div class="caption">
                                    {{-- <div class="container">
                                        <h2>Perfect Template</h2>
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <a class="app-button" href="">Read More</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <!-- end slider -->

                        <!-- profile -->
                        {{-- <div class="profile">
                            <div class="container">
                                <div class="row">
                                    <div class="col-50">
                                        <div class="entry">
                                            <img src="{{ asset('assets/frontend-theme/images/p-mario.png') }}"
                                                alt="">
                                            <h6><a href="">Mario Doe</a></h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <ul>
                                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="entry">
                                            <img src="{{ asset('assets/frontend-theme/images/p-julie.png') }}"
                                                alt="">
                                            <h6><a href="">Julie Doe</a></h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <ul>
                                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="date">
                                    <h5>Thursday, 05 February 2026</h5>
                                    <p>Date Our Wedding</p>
                                </div>
                            </div>
                        </div> --}}
                        <!-- end profile -->

                        <!-- event -->
                        <div class="event app-section app-bg-dark">
                            <div class="container">
                                <div class="app-title">
                                    <h4>Wedding Events</h4>
                                    <i class="fa fa-heart"></i>
                                </div>

                                <!-- Barat -->
                                <div class="row">
                                    <div class="col-100">
                                        <div class="icon">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="entry">
                                            <div class="head">
                                                <h6>Barat (Wedding Procession)</h6>
                                                <span>05 February 2026</span>
                                            </div>
                                            <div class="post">
                                                <p>The grand welcome of the groom and his family with music, dance, and
                                                    celebrations.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Haldi -->
                                <div class="row">
                                    <div class="col-100">
                                        <div class="icon">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="entry">
                                            <div class="head">
                                                <h6>Haldi Ceremony</h6>
                                                <span>04 February 2026</span>
                                            </div>
                                            <div class="post">
                                                <p>A beautiful ritual where turmeric paste is applied to bless the bride
                                                    and groom.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mandap -->
                                <div class="row-no">
                                    <div class="col-100">
                                        <div class="icon">
                                            <i class="fa fa-cutlery"></i>
                                        </div>
                                        <div class="entry">
                                            <div class="head">
                                                <h6>Mandap Ceremony</h6>
                                                <span>03 February 2026</span>
                                            </div>
                                            <div class="post">
                                                <p>The sacred wedding rituals performed under the mandap with family and
                                                    loved ones.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- end event -->

                        <!-- portfolio -->
                        <div class="portfolio app-section">
                            <div class="container">
                                <div class="app-title">
                                    <h4>Wedding Gallery</h4>
                                    <i class="fa fa-image"></i>
                                </div>
                                <ul class="portfolio-filter">
                                    <li data-filter="all" class="active">All</li>
                                    <li data-filter="1">Blood Donation</li>
                                    <li data-filter="2">Tree Plantation</li>
                                    <li data-filter="3">Friends</li>
                                </ul>
                                <div class="portfolio-item">
                                    <div class="row">
                                        <div class="col-50 filtr-item" data-category="1, 2">
                                            <a href="{{ asset('assets/frontend-theme/images/gallery1.jpg') }}"
                                                data-lightbox="image-1"><img
                                                    src="{{ asset('assets/frontend-theme/images/gallery1.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-50 filtr-item" data-category="2, 3">
                                            <a href="{{ asset('assets/frontend-theme/images/gallery2.jpg') }}"
                                                data-lightbox="image-1"><img
                                                    src="{{ asset('assets/frontend-theme/images/gallery2.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-50 filtr-item" data-category="3, 3">
                                            <a href="{{ asset('assets/frontend-theme/images/gallery3.jpg') }}"
                                                data-lightbox="image-1"><img
                                                    src="{{ asset('assets/frontend-theme/images/gallery3.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-50 filtr-item" data-category="3, 1">
                                            <a href="{{ asset('assets/frontend-theme/images/gallery4.jpg') }}"
                                                data-lightbox="image-1"><img
                                                    src="{{ asset('assets/frontend-theme/images/gallery4.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-50 filtr-item" data-category="2">
                                            <a href="{{ asset('assets/frontend-theme/images/gallery5.jpg') }}"
                                                data-lightbox="image-1"><img
                                                    src="{{ asset('assets/frontend-theme/images/gallery5.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-50 filtr-item" data-category="2, 1">
                                            <a href="{{ asset('assets/frontend-theme/images/gallery6.jpg') }}"
                                                data-lightbox="image-1"><img
                                                    src="{{ asset('assets/frontend-theme/images/gallery6.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end portfolio -->

                        <!-- testimonial -->
                        {{-- <div class="testimonial app-section">
                            <div class="container">
                                <div class="app-title">
                                    <h4>Friends Says</h4>
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div id="testimonial" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo
                                            inventore, numquam assumenda nihil totam sunt, ipsum nemo distinctio ipsa
                                            voluptates magni enim.</p>
                                        <img src="{{ asset('assets/frontend-theme/images/testimonial1.png') }}"
                                            alt="">
                                        <h6>Mario Doe</h6>
                                        <strong>Web Developer</strong>
                                    </div>
                                    <div class="item">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo
                                            inventore, numquam assumenda nihil totam sunt, ipsum nemo distinctio ipsa
                                            voluptates magni enim.</p>
                                        <img src="{{ asset('assets/frontend-theme/images/testimonial2.png') }}"
                                            alt="">
                                        <h6>Mario Doe</h6>
                                        <strong>Web Developer</strong>
                                    </div>
                                    <div class="item">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo
                                            inventore, numquam assumenda nihil totam sunt, ipsum nemo distinctio ipsa
                                            voluptates magni enim.</p>
                                        <img src="{{ asset('assets/frontend-theme/images/testimonial3.png') }}"
                                            alt="">
                                        <h6>Mario Doe</h6>
                                        <strong>Web Developer</strong>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- end testimonial -->

                        <!-- latest news -->
                        {{-- <div class="latest-news app-section">
                            <div class="container">
                                <div class="app-title">
                                    <h4>Wedding Blog</h4>
                                    <i class="fa fa-rss"></i>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <div class="entry">
                                            <img src="{{ asset('assets/frontend-theme/images/blog1.jpg') }}"
                                                alt="">
                                            <div class="content">
                                                <h6><a href="">Wedding Design</a></h6>
                                                <span>3 Dec 2017</span>
                                                <p>Lorem ipsum dolor sit amet . . .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="entry">
                                            <img src="{{ asset('assets/frontend-theme/images/blog2.jpg') }}"
                                                alt="">
                                            <div class="content">
                                                <h6><a href="">Wedding Design</a></h6>
                                                <span>3 Dec 2017</span>
                                                <p>Lorem ipsum dolor sit amet . . .</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-50">
                                        <div class="entry">
                                            <img src="{{ asset('assets/frontend-theme/images/blog3.jpg') }}"
                                                alt="">
                                            <div class="content">
                                                <h6><a href="">Wedding Design</a></h6>
                                                <span>3 Dec 2017</span>
                                                <p>Lorem ipsum dolor sit amet . . .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="entry">
                                            <img src="{{ asset('assets/frontend-theme/images/blog4.jpg') }}"
                                                alt="">
                                            <div class="content">
                                                <h6><a href="">Wedding Design</a></h6>
                                                <span>3 Dec 2017</span>
                                                <p>Lorem ipsum dolor sit amet . . .</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- end latest news -->

                        <!-- footer -->
                        <footer>
                            <div class="container">
                                <div class="tel-fax-mail">
                                    <ul>
                                        <li><span>Groom:</span> +918224899535 (Satyam)</li>
                                        <li><span>Bride:</span> +918359838906 (Deepak)</li>
                                        <li><span>Email:</span> greenweddingpromise@ashishwedskalyani.com</li>
                                    </ul>
                                </div>
                                <div class="ft-bottom">
                                    <span>© 2026 All Rights Reserved | Designed & Developed by
                                        <strong>Vikas Kumar Chakrawarti</strong></span>
                                </div>
                            </div>
                        </footer>
                        <!-- end footer -->

                    </div>
                </div>
            </div>
            <!-- end pages -->

        </div>
    </div>
    <!-- end views -->

    <!-- script -->
    <script src="{{ asset('assets/frontend-theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/framework7.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/jquery.filterizr.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/my-app.js') }}"></script>
    {{-- <script src="https://kit.fontawesome.com/39fac907c5.js" crossorigin="anonymous"></script> --}}

</body>

</html>
