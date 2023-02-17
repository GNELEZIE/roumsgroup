<?php
require_once $layout.'/header.php';
?>


    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Construction</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link href="<?=$cdn_domaine?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=$cdn_domaine?>/ccs/all.css" rel="stylesheet">
        <link href="<?=$cdn_domaine?>/css/owl.carousel.css" rel="stylesheet">
        <link href="<?=$cdn_domaine?>/css/style.css" rel="stylesheet">
        <link href="rs-plugin/<?=$cdn_domaine?>>/settings.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">

    </head>
    <body>

    <!-- Top bar start -->
    <div class="top-bar">
        <div class="container">
            <!-- Row Start -->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="top-text">We have more than 25 years of experiences</div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-links">
                        <li><a href="login.html"><i class="fas fa-lock" aria-hidden="true"></i> LOGIN</a></li>
                        <li><a href="register.html"><i class="fas fa-user" aria-hidden="true"></i> Register</a></li>
                    </ul>
                </div>
            </div>
            <!-- Row End -->
        </div>
    </div>
    <!-- Top bar end -->

    <!-- Header start -->
    <div class="header">
        <div class="container">

            <!-- Row Start -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="navbar navbar-expand-lg bg-light">
                        <div class="logo"><a href="index-2.html"><img src="<?=$cdn_domaine?>/images/logo.png" alt=""></a></div>
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <!--navegation-->

                    <div class="navigationwrape">
                        <nav class="navbar navbar-expand-lg"> <a class="navbar-brand" href="#">Navbar</a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="dropdown"> <a href="index-2.html" class="active"> Home <span class="caret"><i class="fas fa-caret-down"></i></span></a>
                                        <i class="fas fa-caret-down"></i>
                                        <ul class="dropdown-menu">
                                            <li> <a href="index-2.html"> Home version 1</a></li>
                                            <li> <a href="index2.html"> Home version 2 </a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="about-us.html"> About Us </a></li>

                                    <li class="dropdown"> <a href="services.html"> Service <span class="caret"><i class="fas fa-caret-down"></i></span></a>
                                        <i class="fas fa-caret-down"></i>
                                        <ul class="dropdown-menu">
                                            <li> <a href="services.html"> Service </a></li>
                                            <li> <a href="service-details.html"> Service Details </a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"> <a href="#"> Pages <span class="caret"><i class="fas fa-caret-down"></i></span></a>
                                        <i class="fas fa-caret-down"></i>
                                        <ul class="dropdown-menu">
                                            <li> <a href="about-us.html"> About Us </a></li>
                                            <li> <a href="our-team.html"> Our Team </a></li>
                                            <li> <a href="testimonials.html"> Testimonials </a></li>
                                            <li> <a href="faqs.html"> FAQ </a></li>
                                            <li> <a href="gallery.html"> Gallery </a></li>
                                            <li> <a href="404.html"> 404 Page </a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="projects.html"> Projects </a></li>
                                    <li class="dropdown"> <a href="blog.html"> Blog <span class="caret"><i class="fas fa-caret-down"></i></span></a>
                                        <i class="fas fa-caret-down"></i>
                                        <ul class="dropdown-menu">
                                            <li> <a href="blog-grid.html"> Blog Grid sidebar</a></li>
                                            <li> <a href="blog.html"> Blog List sidebar</a></li>
                                            <li> <a href="blog-grid-full-width.html"> Blog full width </a></li>
                                            <li> <a href="blog-details.html"> Blog Details with sidebar </a></li>
                                            <li> <a href="blog-details-full-width.html"> Blog Details </a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="contact-us.html"> Contact us </a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
            <!-- Row End -->
        </div>
    </div>

    <!-- Header end -->

    <!-- Revolution slider start -->
    <div class="tp-banner-container sliderWraper">
        <div class="tp-banner" >
            <ul>
                <li data-slotamount="7" data-transition="incude" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="<?=$cdn_domaine?>/images/dummy.png" data-lazyload="<?=$cdn_domaine?>/images/banner1.jpg">
                    <div class="caption lft large-title tp-resizeme slidertext1" data-x="left" data-y="210" data-speed="600" data-start="2200"><span>Your Dream House</span></div>
                    <div class="caption lfb large-title tp-resizeme slidertext2" data-x="left" data-y="310" data-speed="600" data-start="2800">Lorem Ipsum is simply dummy text of the printing and typesetting<br>
                        industry industry's standard dummy text.</div>
                    <div class="caption lfl large-title tp-resizeme slidertext3" data-x="left" data-y="350" data-speed="600" data-start="3500"><a href="#">Contact Us</a></div>
                </li>
                <li data-slotamount="7" data-transition="3dcurtain-vertical" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="<?=$cdn_domaine?>/images/dummy.png" data-lazyload="<?=$cdn_domaine?>/images/banner2.jpg">
                    <div class="caption lfl large-title tp-resizeme slidertext1 slidertext5" data-x="center" data-y="210" data-speed="600" data-start="2200"><span>Construction</span></div>
                    <div class="caption lfb large-title tp-resizeme slidertext4 slidertext6" data-x="center" data-y="310" data-speed="600" data-start="2800">Lorem Ipsum is simply dummy text of the printing and typesetting<br>
                        industry industry's standard dummy text.</div>
                    <div class="caption lfl large-title tp-resizeme slidertext3 slidertext7" data-x="center" data-y="350" data-speed="600" data-start="3500"><a href="#">Contact Us</a></div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Revolution slider end -->

    <!--Quote Start-->
    <div class="quote-wrap">
        <div class="container">
            <!--Row Start-->
            <div class="row">
                <div class="col-lg-9">
                    <h2>Looking for a quality constructor for your next project?</h2>
                </div>
                <div class="col-lg-3">
                    <div class="quote-btn"><a href="qoute.html">get a Quote</a></div>
                </div>
            </div>
            <!--Row End-->
        </div>
    </div>
    <!--Quote End-->

    <!--About start-->
    <div class="about-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>About <span>Our Company</span></h1>
                    <div class="aboutTxt">Curabitur congue egestas dapibus.</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non libero consectetur, blandit mauris eget, imperdiet nisl. Etiam commodo ex nec erat tempor varius. Nunc rutrum pretium nunc in malesuada. Curabitur mollis urna ac sapien vulputate, ut congue sapien vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam et suscipit dui. Maecenas velit quam, mollis id erat eget, scelerisque elementum odio. Maecenas ac sagittis erat. Quisque hendrerit dapibus diam, a venenatis dui efficitur nec. Aenean tincidunt ullamcorper fermentum.</p>
                    <ul class="about-service">
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                        <li>Ut sit amet nisl sed ante vulputate</li>
                        <li>Ut sit amet nisl sed ante vulputate</li>
                    </ul>

                    <div class="readmore"><a href="#">Read More</a></div>
                </div>
                <div class="col-lg-5">
                    <div class="about-image"><img src="<?=$cdn_domaine?>/images/about-jhoss.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <!--About start-->

    <!--service start-->
    <div class="service-wrap">
        <div class="container">
            <h1>Our <span>Service</span></h1>
            <ul class="row serviceList">
                <li class="col-lg-4 col-md-6">
                    <div class="service-image"><img src="<?=$cdn_domaine?>/images/feature-image-1.jpg" alt="">
                        <div class="hoverlink">
                            <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="service-details">
                        <h3><a href="#">Donec justo sapien</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu faucibus magna. Fusce et odio nec tellus egestas volutpat.</p>
                        <div class="readmore"><a href="#">Read More</a></div>
                    </div>
                </li>
                <li class="col-lg-4 col-md-6">
                    <div class="service-image"><img src="<?=$cdn_domaine?>/images/feature-image-2.jpg" alt="">
                        <div class="hoverlink">
                            <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="service-details">
                        <h3><a href="#">Donec justo sapien</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu faucibus magna. Fusce et odio nec tellus egestas volutpat.</p>
                        <div class="readmore"><a href="#">Read More</a></div>
                    </div>
                </li>
                <li class="col-lg-4 col-md-6">
                    <div class="service-image"><img src="<?=$cdn_domaine?>/images/feature-image-3.jpg" alt="">
                        <div class="hoverlink">
                            <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="service-details">
                        <h3><a href="#">Donec justo sapien</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu faucibus magna. Fusce et odio nec tellus egestas volutpat.</p>
                        <div class="readmore"><a href="#">Read More</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--service end-->

    <!--porfolio start-->
    <div class="porfolio-wrap">
        <div class="container">
            <h1>Latest <span>Project</span></h1>
            <ul class="row portfolio-service">
                <li class="col-lg-3 col-md-6">
                    <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Interior Design</a></h3>
                                <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6">
                    <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio2.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Home</a></h3>
                                <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6">
                    <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio3.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Green House</a></h3>
                                <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6">
                    <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio4.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Home</a></h3>
                                <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6">
                    <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio5.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Interior Design</a></h3>
                                <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6">
                    <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio6.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Home</a></h3>
                                <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6">
                    <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio7.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Home</a></h3>
                                <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6">
                    <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio8.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Home</a></h3>
                                <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6">
                    <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio9.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Home</a></h3>
                                <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6">
                    <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio10.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Interior Design</a></h3>
                                <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6">
                    <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio11.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Home</a></h3>
                                <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6">
                    <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio12.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Home</a></h3>
                                <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--porfolio end-->

    <!--Testimonials start-->
    <div class="testimonials-wrap">
        <div class="container">
            <div class="heading-wrap">
                <h1>Testimonials</h1>
            </div>
            <ul class="owl-carousel testimonials">
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at egestas diam. Phasellus eget tortor tellus. Aliquam erat volutpat. Nunc sed arcu malesuada, viverra justo bibendum, sagittis ipsum. Quisque in ornare dui, id scelerisque eros. </p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?=$cdn_domaine?>/images/client.jpg" alt=""></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at egestas diam. Phasellus eget tortor tellus. Aliquam erat volutpat. Nunc sed arcu malesuada, viverra justo bibendum, sagittis ipsum. Quisque in ornare dui, id scelerisque eros. </p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?=$cdn_domaine?>/images/client2.jpg" alt=""></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at egestas diam. Phasellus eget tortor tellus. Aliquam erat volutpat. Nunc sed arcu malesuada, viverra justo bibendum, sagittis ipsum. Quisque in ornare dui, id scelerisque eros. </p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?=$cdn_domaine?>/images/client.jpg" alt=""></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at egestas diam. Phasellus eget tortor tellus. Aliquam erat volutpat. Nunc sed arcu malesuada, viverra justo bibendum, sagittis ipsum. Quisque in ornare dui, id scelerisque eros. </p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?=$cdn_domaine?>/images/client2.jpg" alt=""></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at egestas diam. Phasellus eget tortor tellus. Aliquam erat volutpat. Nunc sed arcu malesuada, viverra justo bibendum, sagittis ipsum. Quisque in ornare dui, id scelerisque eros. </p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?=$cdn_domaine?>/images/client.jpg" alt=""></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at egestas diam. Phasellus eget tortor tellus. Aliquam erat volutpat. Nunc sed arcu malesuada, viverra justo bibendum, sagittis ipsum. Quisque in ornare dui, id scelerisque eros. </p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?=$cdn_domaine?>/images/client2.jpg" alt=""></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--Testimonials end-->

    <!--Team Start-->
    <div class="team_wrap">
        <div class="container">
            <h1>OUR <span>EXPERTS</span></h1>
            <p>Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec <br>
                tetuer adipis elit, aliquam eget nibh etlibura.</p>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team">
                        <div class="team-image"> <img src="<?=$cdn_domaine?>/images/team01.png" alt="">
                            <div class="team-info">
                                <h5><a href="#">STEVE JOBS</a></h5>
                                <span>Supervisor</span>
                                <ul class="experts">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team">
                        <div class="team-image"> <img src="<?=$cdn_domaine?>/images/team02.png" alt="">
                            <div class="team-info">
                                <h5><a href="#">Alex Cameron</a></h5>
                                <span>Supervisor</span>
                                <ul class="experts">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team">
                        <div class="team-image"> <img src="<?=$cdn_domaine?>/images/team03.png" alt="">
                            <div class="team-info">
                                <h5><a href="#">Jack Peterson</a></h5>
                                <span>Supervisor</span>
                                <ul class="experts">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team">
                        <div class="team-image"> <img src="<?=$cdn_domaine?>/images/team04.png" alt="">
                            <div class="team-info">
                                <h5><a href="#">Adam Lewis</a></h5>
                                <span>Supervisor</span>
                                <ul class="experts">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Team end-->

    <!--Newsletter start-->
    <div class="ct_newsletter_wrap">
        <div class="container">
            <div class="newletter_des">
                <h5>Subscribe Our Weekly Newsletter</h5>
                <form action="http://malikhassan.com/html/construction/register.html">
                    <label class="far fa-envelope"></label>
                    <input type="text" placeholder="Enter Your Email" class="form-control">
                    <button>Signup</button>
                </form>
            </div>
        </div>
    </div>
    <!--Newsletter end-->

    <!--Footer start-->
    <div class="footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="footer-logo"><a href="index-2.html"><img src="<?=$cdn_domaine?>/images/footer-logo.png" alt=""></a></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquam neque eget ipsum porta, sed convallis odio convallis... <a href="#">Read More</a> </p>
                    <div class="social"> <a href="#." target="_blank"> <i class="fab fa-facebook-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fab fa-twitter-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fab fa-google-plus-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fab fa-linkedin"></i></a> <a href="#." target="_blank"><i class="fab fa-youtube-square" aria-hidden="true"></i></a> </div>
                </div>
                <div class="col-lg-2 col-md-4 col-xs-12">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li> <a href="#"> Home </a></li>
                        <li> <a href="#"> About us</a></li>
                        <li> <a href="#"> Service</a></li>
                        <li> <a href="#"> Projects </a></li>
                        <li> <a href="#"> Blog </a></li>
                        <li> <a href="#"> Contact us </a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Project Management</a></li>
                        <li><a href="#">Material Sourcing</a></li>
                        <li><a href="#">Space Optimization</a></li>
                        <li><a href="#">Construction &amp; installation </a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <h3>Contact Info</h3>
                    <div class="footer-address">1234 Lorem Road, ISpum A Kennesaw, GA 1234</div>
                    <div class="call-us"> <a href="#">(777) 123-4567</a></div>
                    <div class="fax"> <a href="#">(777) 132-4567</a></div>
                </div>
            </div>
            <div class="footerWrp">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright">© 2020 company name here | All Rights Reserved</div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <ul class="foot footer-links">
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-scroll scrollToTop"><a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>
    <script src="<?=$cdn_domaine?>/js/jquery-2.1.4.min.js"></script>
    <script src="<?=$cdn_domaine?>/js/bootstrap.bundle.min.js"></script>
    <script src="rs-plugin/<?=$cdn_domaine?>/js/jquery.themepunch.tools.min.js"></script>
    <script src="rs-plugin/<?=$cdn_domaine?>/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?=$cdn_domaine?>/js/owl.carousel.js"></script>
    <script src="<?=$cdn_domaine?>/js/script.js"></script>
    </body>
    </html>



































<?php
require_once $layout.'/footer.php';
?>