<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Rigved Uptown</title>
</head>
<style>
    #carouselExampleDark {
        position: relative;
    }

    #bookingBlock {
        position: absolute;
        bottom: 0;
    }

    #mobileForm {
        display: none;
    }

    .map {
        width: 95%;
        height: 400px;
    }

    .blur {
        filter: blur(2px);
        -webkit-filter: blur(2px);
    }

    .txtColor {
        color: #bb217b;
    }

    .themeColor {
        background-color: #bb217b;
        color: #ffffff;
    }

    .callback {
        background-color: #bb217b;
    }

    .visit {
        border: 2px solid #bb217b;
    }

    .fix {
        position: fixed;
        right: 0;
    }

    .site-footer {
        background-color: #26272b;
        padding: 45px 0 20px;
        font-size: 15px;
        line-height: 24px;
        color: #737373;
    }

    .site-footer hr {
        border-top-color: #bbb;
        opacity: 0.5
    }

    .site-footer hr.small {
        margin: 20px 0
    }

    .site-footer h6 {
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        margin-top: 5px;
        letter-spacing: 2px
    }

    .site-footer a {
        color: #737373;
    }

    .site-footer a:hover {
        color: #3366cc;
        text-decoration: none;
    }

    .footer-links {
        padding-left: 0;
        list-style: none
    }

    .footer-links li {
        display: block
    }

    .footer-links a {
        color: #737373
    }

    .footer-links a:active,
    .footer-links a:focus,
    .footer-links a:hover {
        color: #3366cc;
        text-decoration: none;
    }

    .footer-links.inline li {
        display: inline-block
    }

    .site-footer .social-icons {
        text-align: right
    }

    .site-footer .social-icons a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        margin-left: 6px;
        margin-right: 0;
        border-radius: 100%;
        background-color: #33353d
    }

    .copyright-text {
        margin: 0
    }

    @media (max-width:991px) {
        .site-footer [class^=col-] {
            margin-bottom: 30px
        }
    }

    @media (max-width:767px) {
        .site-footer {
            padding-bottom: 0
        }

        .site-footer .copyright-text,
        .site-footer .social-icons {
            text-align: center
        }
    }

    .social-icons {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .social-icons li {
        display: inline-block;
        margin-bottom: 4px
    }

    .social-icons li.title {
        margin-right: 15px;
        text-transform: uppercase;
        color: #96a2b2;
        font-weight: 700;
        font-size: 13px
    }

    .social-icons a {
        background-color: #eceeef;
        color: #818a91;
        font-size: 16px;
        display: inline-block;
        line-height: 44px;
        width: 44px;
        height: 44px;
        text-align: center;
        margin-right: 8px;
        border-radius: 100%;
        -webkit-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear
    }

    .social-icons a:active,
    .social-icons a:focus,
    .social-icons a:hover {
        color: #fff;
        background-color: #29aafe
    }

    .social-icons.size-sm a {
        line-height: 34px;
        height: 34px;
        width: 34px;
        font-size: 14px
    }

    .social-icons a.facebook:hover {
        background-color: #3b5998
    }

    .social-icons a.twitter:hover {
        background-color: #00aced
    }

    .social-icons a.linkedin:hover {
        background-color: #007bb6
    }

    .social-icons a.dribbble:hover {
        background-color: #ea4c89
    }

    @media (max-width:767px) {
        .social-icons li.title {
            display: block;
            margin-right: 0;
            font-weight: 600
        }

        #sideForm {
            display: none;
        }

        #mobileForm {
            display: block;
        }

        #bookingBlock {
            position: absolute;
            bottom: 0%;
        }

        .fix {
            position: relative;
        }

        .mtop {
            margin-top: 10px;
        }
    }
</style>

<body>
    <div class="">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#"><b>Pricing</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><b>Amenities</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><b>Specifications</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><b>Floor Plans</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><b>Gallery</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><b>Location</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><b>Virtual Site Tour</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><b>Brochure</b></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-md-3 bg-dark fix">
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <div class="col-md-8 mt-1 text-center">
                            <a class="callback px-2 py-1 text-white text-decoration-none" href="javascript:void();"> Request Call Back </a>
                        </div>
                        <div class="col-md-8 mt-3 text-center">
                            <a class="visit px-2 py-1 text-white text-decoration-none" href="javascript:void();">Schedule Site Visit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-5" id="mobileForm">
                <form class="row g-3 mx-3">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="name" placeholder="Full Name">
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="phone" placeholder="Phone">
                    </div>
                    <div class="col-md-12 text-center">
                        <a class="btn px-3 py-1 themeColor">Avail Pre-book Offer</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="row bg-light">
            <div class="col-md-9">
                <div class="col-md-12">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="img/slider1.jpg" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="img/slider2.jpg" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/slider3.jpg" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-2 bg-white" id="bookingBlock">
                        <img class="img-fluid" src="img/desktop-banner.jpg" alt="">
                        <!-- <p>BOOKING OPEN</p>
                        <p>Rigved Uptown</p>
                        <p>Sai Canary New Rd, Balewadi, Pune</p> -->
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <img class="img-fluid" src="img/img1.jpg" alt="">
                        </div>
                        <div class="col-md-6 text-center">
                            <h1 class="txtColor"> <b>Rigved Uptown</b></h1>

                            <h3>
                                <ul class="list-group h3">
                                    Sai Canary New Rd, Balewadi, Pune
                                </ul>
                            </h3>
                            <h5>
                                <p class="h6">This is where all the action is This is where you can feel the buzz of modern Puna Join in the hustle & bustle and make the most of what the city has to offer. Be in the midst of all the action. This lifestyle is right up your street!</p>
                            </h5>
                            <a class="btn themeColor mt-3">Get in Touch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="col-md-12 text-center">
                        <p class="h1 txtColor"><b>Pricing</b></p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <p>2 BHK</p>
                                    <p><img class="img-fluid" src="img/2bhk.jpg" alt=""></p>
                                    <p>Price: 69L* Onwards</p>
                                    <p>Built-up Area: 714 Sq.ft</p>

                                    <p><a class="btn themeColor">Price Breakup</a> <a href="mailto:sales@rigveduptown-balewadi.com""><i class=" fas fa-envelope"></i></a> <a href="tel:+918669546954"><i class="fas fa-phone-alt"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <p>&#149; Complete Costing Details &#149;</p>
                                    <p><img class="img-fluid" src="img/costing-detail.webp" alt=""></p>
                                    <p><a class="text-decoration-none" href="tel:+918669546954">Call at +91 8669546954</a></p>
                                    <p>Or</p>
                                    <p><a class="btn themeColor">Enquire Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="col-md-12 text-center">
                        <p class="h1 txtColor"><b>Amenities</b></p>
                    </div>
                    <div class="col-md-12 text-center">
                        <p>UPSTREAM TO HEALTHY & HOLISTIC LIVING</p>
                        <p>Just like a cherry on a cake. amenities around an abode act like accessories that add supplementary value quotient to our living. With Rigved Uptown's thoughtfully designed amenities that are designated for taking care of you and your family's overall development, open doors to a life full of adventure and ease.</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 ">
                            <div id="carouselExampleDark1" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <img src="img/am1.jpg" class="d-block w-100">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="img/am2.jpg" class="d-block w-100">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/am3.jpg" class="d-block w-100">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="col-md-12 text-center">
                        <p class="h1 txtColor"><b>Specifications</b></p>
                    </div>
                    <div class="row container mt-3">
                        <div class="col-md-6">
                            <p class="h5">STRUCTURE</p>
                            <ul class="list-group">
                                <li>RCC Structure Designed With Earthquake Resistant
                                    Frame.</li>
                            </ul>
                            <p class="h5">MASONRY</p>
                            <ul class="list-group">
                                <li>Fly Ash Bricks / AAC Blocks Masonry Work</li>
                            </ul>
                            <p class="h5">KITCHEN</p>
                            <ul class="list-group">
                                <li>Steel Grey Granite Kitchen Platform With SS Sink</li>
                                <li>Dado Up To 2' Height Provision For Washing Machine In
                                    Dry Balcony</li>
                            </ul>
                            <p class="h5">UTILITIES</p>
                            <ul class="list-group">
                                <li>Sewage Treatment Plant </li>
                                <li>Rainwater Harvesting</li>
                                <li> Underground And Overhead Tanks For Water Storage,
                                    Firefighting System</li>
                                <li>100% Power Backup For Common Areas & Lift</li>
                            </ul>
                            <p class="h5">SECURITY</p>
                            <ul class="list-group">
                                <li>CCTV Cameras For Security</li>
                                <li>Security Cabin</li>
                                <li>Boom Barriers</li>
                            </ul>
                            <p class="h5">WALL FINISH</p>
                            <ul class="list-group">
                                <li>Gypsum / POP Finish For Internal Wall & Side Sand
                                    Faced Plaster For Exterior Wall</li>
                                <li>OBD Paint</li>
                            </ul>
                            <p class="h5">BATHROOMS</p>
                            <ul class="list-group">
                                <li>Concealed Plumbing Of Premium ISI Mark</li>
                                <li>C.P. Fittings -Jaguar Or Equivalent</li>
                                <li>Premium Sanitary Fittings - Floor / Wall Mounted -
                                    Jaquar Or Equivalent</li>
                                <li>Designer Dado Wall Tiles Upto Lintel Leve</li>
                                <li>Provision For Electric Geyser Point</li>
                                <li>Provision For Exhaust Fan Point</li>
                            </ul>
                        </div>
                        <div class="col-md-6 ">
                            <p class="h5">FLOORING</p>
                            <ul class="list-group">
                                <li>24" X 48” Vitrified Tiles Across The Apartment</li>
                                <li>Anti-skid Ceramic Tiles For Bathroom & Dry Balcony</li>
                            </ul>
                            <p class="h5">BALCONY RAILING</p>
                            <ul class="list-group">
                                <li>MS Railing As Per The Requirement</li>
                            </ul>
                            <p class="h5">ELEVATORS</p>
                            <ul class="list-group">
                                <li>6 Passenger Lifts - Kone Or Equivalent</li>
                            </ul>
                            <p class="h5">ELECTRIFICATION</p>
                            <ul class="list-group">
                                <li>Concealed Internal Electrical Wiring - Finolex / Polycab / Havells
                                    Or Equivalent</li>
                                <li>Modular Switches - Legrand Or Equivalent</li>
                                <li>Switch Gears - Legrand / ABB Or Equivalent</li>
                                <li>Power Points For Refrigerator / Microwave & Other Gadgets In
                                    Kitchen</li>
                                <li>Power Point For Washing Machine In Dry Balcony</li>
                                <li>Geyser Points In All Toilets</li>
                                <li>Provision For TV Points In Living & Master Bedroom</li>
                                <li>Provision For AC Point In Both Bedrooms</li>
                            </ul>
                            <p class="h5">DOORS & WINDOWS</p>
                            <ul class="list-group">
                                <li>Main Door - Modular Laminated Wooden Door Frames And Woode
                                    Shutter With Europa Or Equivalent Safety Locks
                                </li>
                                <li>Internal Room Doors - Flush Doors With Laminate And Wooden
                                    Frames
                                </li>
                                <li>Bathroom Doors - Flush Doors With Laminate And Granite Frames</li>
                                <li>Two Track Powder Coated Aluminium Sliding Windows With
                                    Mosquito Nets</li>
                                <li>MS Grills For Safety And Security</li>
                                <li>Natural Stone Window Sill</li>
                                <li>Door Hardware - Cylindrical Lock Of Europa Or Equivalent</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="col-md-12 text-center">
                        <p class="h1 txtColor"><b>Gallery</b></p>
                    </div>
                    <div class="col-md-12 mt-5">
                        <div class="row mx-1">
                            <div class="col-md-3 mtop">
                                <img class="img-fluid" src="img/i1.jpg" alt="">
                            </div>
                            <div class="col-md-3 mtop">
                                <img class="img-fluid" src="img/i2.jpg" alt="">
                            </div>
                            <div class="col-md-3 mtop">
                                <img class="img-fluid" src="img/i3.jpg" alt="">
                            </div>
                            <div class="col-md-3 mtop">
                                <img class="img-fluid" src="img/i4.jpg" alt="">
                            </div>
                        </div>
                        <div class="row mt-3 mx-1 justify-content-center">
                            <div class="col-md-3 mtop">
                                <img class="img-fluid" src="img/i5.jpeg" alt="">
                            </div>
                            <div class="col-md-3 mtop">
                                <img class="img-fluid" src="img/i6.jpeg" alt="">
                            </div>
                            <div class="col-md-3 mtop">
                                <img class="img-fluid" src="img/i7.jpeg" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="col-md-12 text-center">
                        <p class="h1 txtColor"><b>Site and floor plan</b></p>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 text-center">
                            <img class="img-fluid" src="img/site.jpg" alt="">
                            <p class="h4">Site Plan</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <img class="img-fluid blur" src="img/floor.jpg" alt="">
                            <p class="h4">Floor Plan</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 mt-5">
                    <div class="col-md-12 text-center">
                        <p class="h1 txtColor"><b>Location</b></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <img class="img-fluid" src="img/location.jpg" alt="">
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.7996510679704!2d73.77006531489369!3d18.583069087372603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9df0d37974b%3A0x4cd33d9752ff9b80!2sRigved%20Uptown!5e0!3m2!1sen!2sin!4v1632035701717!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="col-md-12 text-center">
                        <p class="h1 txtColor"><b>Virual Tour</b></p>
                    </div>
                    <div class="col-md-12">

                    </div>
                </div>
                <footer class="site-footer mr-n2">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 ">
                                <div class="col-md-6 d-flex jstify-content-center">
                                    <p class=""><img class="img-fluid" src="img/Rera.png" alt=""></p>
                                </div>
                                <p>MahaRera Registration Number P52100028094
                                </p>
                                <!-- <p>Available on website: maharera.mahaonline.gov.in</p> -->
                            </div>

                            <div class="col-xs-6 col-md-5">
                                <h6>Categories</h6>
                                <ul class="footer-links">
                                    <li><a class="text-decoration-none" href="tel:+8669546954"><i class="fas  fa-phone-alt h4"></i> +91 8669546954</a></li>
                                    <li><a class="text-decoration-none" href="mailto:sales@rigveduptown-balewadi.com"><i class="fas fa-envelope h4"></i> sales@rigveduptown-balewadi.com</a></li>
                                    <li><a class="text-decoration-none" href=""><i class="fas fa-map-marked-alt h4"></i> Balewadi, Pune</a></li>
                                </ul>
                            </div>

                            <div class="col-xs-6 col-md-3">
                                <h6>Quick Links</h6>
                                <ul class="footer-links">
                                    <li><a class="text-decoration-none" href="">Pricing</a></li>
                                    <li><a class="text-decoration-none" href="">Amenities</a></li>
                                    <li><a class="text-decoration-none" href="">Specifications</a></li>
                                    <li><a class="text-decoration-none" href="">Floor Plans</a></li>
                                    <li><a class="text-decoration-none" href="">Gallery</a></li>
                                    <li><a class="text-decoration-none" href="">Location</a></li>
                                    <li><a class="text-decoration-none" href="">Virtual Site Tour</a></li>
                                    <li><a class="text-decoration-none" href="">Brochure</a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="copyright-text " style="font-size: 10px;">This website is meant only for information purposes. It should not be considered/ claimed as an official site.
                            This website belongs to authorized channel partner.</p>
                        <hr>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <p class="copyright-text">Copyright &copy; <?= date('Y') ?> All Rights Reserved
                                </p>

                            </div>

                            <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                                <ul class="social-icons">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
            <div class="col-md-3 pt-md-4 fix" id="sideForm">
                <div class="row bg-white">
                    <div class="col-md-12">
                        <p class="text-dark h5 mt-3">Pre-Booking here for Best Offers</p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="name" placeholder="Full Name">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="phone" placeholder="Phone">
                            </div>
                            <div class="col-md-12">
                                <a class="btn px-3 py-1 themeColor">Avail Pre-book Offer</a>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="col-md-12 mt-3 text-center">
                        <p><a class="text-decoration-none" href=""><i class="fab fa-whatsapp h3"></i> +91 8669546954</a></p>
                        <p><a class="text-decoration-none" href="tel:+918669546954"><i class="fas fa-phone-alt h3"></i>+91 8669546954</a></p>
                        <p><a class="text-decoration-none" href="mailto:sales@rigveduptown-balewadi.com"><i class="fas fa-envelope h3"></i>sales@rigveduptown-balewadi.com</a></p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            var myCarousel = document.querySelector('#carouselExampleDark');
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 2000
            });
            var myCarousel1 = document.querySelector('#carouselExampleDark1');
            var carousel1 = new bootstrap.Carousel(myCarousel1, {
                interval: 2000
            });

        });
    </script>
</body>

</html>