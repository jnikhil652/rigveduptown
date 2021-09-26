<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <meta name="google-site-verification" content="WCntsjhDIt0Q4Lw-Vw6yDRKIybzy4zZuUEJgcZlve5k">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/favicon.png" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Global site tag (gtag.js) - Google Ads: 627427595 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-627427595"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-627427595');
    </script>
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

    #bookingWhatsapp {
        position: absolute !important;
        top: -13px;
        right: 30%;
        color: green;
        font-size: 45px;
    }

    #bookingCall {
        position: absolute !important;
        top: -14px;
        left: 30%;
        font-size: 45px;
    }

    .tour {
        width: 100%;
    }

    @media (max-width:767px) {
        .social-icons li.title {
            display: block;
            margin-right: 0;
            font-weight: 600
        }

        .tour {
            width: 100%;
        }

        #sideForm {
            display: none;
        }

        #mobileForm {
            display: block;
        }



        #bookingBlock {
            position: absolute !important;
            bottom: -50px;
            width: 180px;
            right: 0;
        }

        #bookingCall {
            position: absolute !important;
            top: -15px;
            right: 4%;
            font-size: 30px;
        }

        #bookingWhatsapp {
            position: absolute !important;
            bottom: -15px;
            left: 4%;
            color: green;
            font-size: 30px;
        }

        .fix {
            position: relative;
        }

        .mtop {
            margin-top: 10px;
        }

        .smalli {
            font-size: 10px;
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
                                            <a class="nav-link active" href="#Pricing"><b>Pricing</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Amenities"><b>Amenities</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Specifications"><b>Specifications</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Floor"><b>Floor Plans</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Gallery"><b>Gallery</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Location"><b>Location</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Virtual"><b>Virtual Site Tour</b></a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="#Brochure"><b>Brochure</b></a>
                                        </li> -->
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
                            <a href="https://wa.me/+918669546954/?text=Hi i would like to have more information about Rigved Uptown Balewadi" target="_blank" class="callback px-2 py-1 text-white text-decoration-none" href="javascript:void(0);"> Request Call Back </a>
                        </div>
                        <div class="col-md-8 mt-3 text-center">
                            <a class="visit px-2 py-1 text-white text-decoration-none" href="javascript:void(0);" onclick="popup();">Schedule Site Visit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-3" id="mobileForm">
                <form class="row g-3 mx-3" id="mobSide">
                    <div class="col-md-12  mt-2">
                        <input type="text" class="form-control animate__animated animate__bounce" id="nameMob" placeholder="Full Name">
                        <small id="nameMobTxt" class="form-text text-danger"></small>
                    </div>
                    <div class="col-md-12 mt-2">
                        <input type="text" class="form-control animate__animated animate__bounce" id="emailMob" placeholder="Email">
                        <small id="emailMobTxt" class="form-text text-danger"></small>
                    </div>
                    <div class="col-md-12 mt-2">
                        <input type="text" class="form-control animate__animated animate__bounce" id="phoneMob" placeholder="Phone">
                        <small id="phoneMobTxt" class="form-text text-danger "></small>
                    </div>
                    <div class="col-md-12 mt-3 text-center">
                        <a href="javascript:void(0);" onclick="formSubmit(2);" class="btn px-3 py-1 themeColor animate__animated animate__bounce animate__slower animate__infinite">Avail Pre-book Offer</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="row bg-light">
            <div class="col-md-9">
                <div class="col-md-12" data-aos="zoom-in">
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
                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button> -->
                    </div>
                </div>
                <div class="col-md-12" data-aos="zoom-in">
                    <div class="col-md-3 col-4 text-center" id="bookingBlock">
                        <a id="bookingWhatsapp" href="https://wa.me/+918669546954/?text=Hi i would like to have more information about Rigved Uptown Balewadi" class="h2"><i class="fab fa-whatsapp-square"></i></a>
                        <a class="h4" id="bookingCall" href="tel:+8669546954"><i class="fas  fa-phone-alt"></i></a>
                        <img class="img-fluid" id="bookingImg" src="img/desktop-banner.jpg" alt="">

                    </div>
                </div>
                <div class="col-md-12 mt-5" data-aos="zoom-in">
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
                            <a href="https://wa.me/+918669546954/?text=Hi i would like to have more information about Rigved Uptown Balewadi" class="btn themeColor mt-3">Get in Touch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5" data-aos="zoom-in" id="Pricing">
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

                                    <p><a href="javascript:void(0);" onclick="popup();" class="btn themeColor">Price Breakup</a> <a href="mailto:sales@rigveduptown-balewadi.com""><i class=" fas fa-envelope"></i></a> <a href="tel:+918669546954"><i class="fas fa-phone-alt"></i></a></p>
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
                                    <p><a href="javascript:void(0);" class="btn themeColor" onclick="popup();">Enquire Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3" data-aos="zoom-in" id="Amenities">
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
                                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3 card shadow-lg" style="border:2px solid #bb217b" data-aos="zoom-in" id="Specifications">
                    <div class="col-md-12 mt-2 mb-n2">
                        <p class="h1 txtColor"><b>Specifications</b></p>
                    </div>
                    <div class="row px-4 pb-3">
                        <div class="col-md-6" data-aos="zoom-in">

                            <p class="h5 mt-3">STRUCTURE</p>
                            <ul class="list-group mt-n2 smalli">
                                <li>RCC Structure Designed With Earthquake Resistant
                                    Frame.</li>
                            </ul>


                            <p class="h5 mt-3">MASONRY</p>
                            <ul class="list-group mt-n2 smalli">
                                <li>Fly Ash Bricks / AAC Blocks Masonry Work</li>
                            </ul>

                            <p class="h5 mt-3">KITCHEN</p>
                            <ul class="list-group mt-n2 smalli">
                                <li>Steel Grey Granite Kitchen Platform With SS Sink</li>
                                <li>Dado Up To 2' Height Provision For Washing Machine In
                                    Dry Balcony</li>
                            </ul>
                            <p class="h5 mt-3">UTILITIES</p>
                            <ul class="list-group mt-n2 smalli">
                                <li>Sewage Treatment Plant </li>
                                <li>Rainwater Harvesting</li>
                                <li> Underground And Overhead Tanks For Water Storage,
                                    Firefighting System</li>
                                <li>100% Power Backup For Common Areas & Lift</li>
                            </ul>
                            <p class="h5 mt-3">SECURITY</p>
                            <ul class="list-group mt-n2 smalli">
                                <li>CCTV Cameras For Security</li>
                                <li>Security Cabin</li>
                                <li>Boom Barriers</li>
                            </ul>
                            <p class="h5 mt-3">WALL FINISH</p>
                            <ul class="list-group mt-n2 smalli">
                                <li>Gypsum / POP Finish For Internal Wall & Side Sand
                                    Faced Plaster For Exterior Wall</li>
                                <li>OBD Paint</li>
                            </ul>
                            <p class="h5 mt-3">BATHROOMS</p>
                            <ul class="list-group mt-n2 smalli">
                                <li>Concealed Plumbing Of Premium ISI Mark</li>
                                <li>C.P. Fittings -Jaguar Or Equivalent</li>
                                <li>Premium Sanitary Fittings - Floor / Wall Mounted -
                                    Jaquar Or Equivalent</li>
                                <li>Designer Dado Wall Tiles Upto Lintel Leve</li>
                                <li>Provision For Electric Geyser Point</li>
                                <li>Provision For Exhaust Fan Point</li>
                            </ul>
                        </div>
                        <div class="col-md-6 " data-aos="zoom-in">
                            <p class="h5 mt-3">FLOORING</p>
                            <ul class="list-group mt-n2 smalli">
                                <li>24" X 48” Vitrified Tiles Across The Apartment</li>
                                <li>Anti-skid Ceramic Tiles For Bathroom & Dry Balcony</li>
                            </ul>
                            <p class="h5 mt-3">BALCONY RAILING</p>
                            <ul class="list-group mt-n2 smalli">
                                <li>MS Railing As Per The Requirement</li>
                            </ul>
                            <p class="h5 mt-3">ELEVATORS</p>
                            <ul class="list-group mt-n2 smalli">
                                <li>6 Passenger Lifts - Kone Or Equivalent</li>
                            </ul>
                            <p class="h5 mt-3">ELECTRIFICATION</p>
                            <ul class="list-group mt-n2 smalli">
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
                            <p class="h5 mt-3">DOORS & WINDOWS</p>
                            <ul class="list-group mt-n2 smalli">
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
                <div class="col-md-12 mt-3" data-aos="zoom-in" id="Gallery">
                    <div class="col-md-12 text-center">
                        <p class="h1 txtColor"><b>Gallery</b></p>
                    </div>
                    <div class="col-md-12 mt-5">
                        <div class="row mx-1">
                            <div class="col-md-3 mtop" data-aos="zoom-out">
                                <img class="img-fluid" src="img/i1.jpg" alt="">
                            </div>
                            <div class="col-md-3 mtop" data-aos="zoom-out">
                                <img class="img-fluid" src="img/i2.jpg" alt="">
                            </div>
                            <div class="col-md-3 mtop" data-aos="zoom-out">
                                <img class="img-fluid" src="img/i3.jpg" alt="">
                            </div>
                            <div class="col-md-3 mtop" data-aos="zoom-out">
                                <img class="img-fluid" src="img/i4.jpg" alt="">
                            </div>
                        </div>
                        <div class="row mt-3 mx-1 justify-content-center">
                            <div class="col-md-3 mtop" data-aos="zoom-out">
                                <img class="img-fluid" src="img/i5.jpeg" alt="">
                            </div>
                            <div class="col-md-3 mtop" data-aos="zoom-out">
                                <img class="img-fluid" src="img/i6.jpeg" alt="">
                            </div>
                            <div class="col-md-3 mtop" data-aos="zoom-out">
                                <img class="img-fluid" src="img/i7.jpeg" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 mt-5" data-aos="zoom-in" id="Floor">
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
                <div class="col-md-12 mt-5" data-aos="zoom-in" id="Location">
                    <div class="col-md-12 text-center">
                        <p class="h1 txtColor"><b>Location</b></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12" data-aos="zoom-in">
                            <img class="img-fluid" src="img/location.jpg" alt="">
                        </div>
                        <div class="col-md-12 d-flex justify-content-center" data-aos="zoom-in">
                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.7996510679704!2d73.77006531489369!3d18.583069087372603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9df0d37974b%3A0x4cd33d9752ff9b80!2sRigved%20Uptown!5e0!3m2!1sen!2sin!4v1632035701717!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3" data-aos="zoom-in" id="Virual">
                    <div class="col-md-12 text-center">
                        <p class="h1 txtColor"><b>Virual Tour</b></p>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center my-3" data-aos="zoom-in">
                        <video class="tour" controls>
                            <source src="vid/tour.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <footer class="site-footer mr-n2">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 " data-aos="zoom-in">
                                <div class="col-md-6 d-flex jstify-content-center">
                                    <p class=""><img class="img-fluid" src="img/Rera.png" alt=""></p>
                                </div>
                                <p>MahaRera Registration Number P52100028094
                                </p>
                                <!-- <p>Available on website: maharera.mahaonline.gov.in</p> -->
                            </div>

                            <div class="col-xs-6 col-md-5" data-aos="zoom-in">
                                <h6>Categories</h6>
                                <ul class="footer-links">
                                    <li><a class="text-decoration-none" href="tel:+8669546954"><i class="fas  fa-phone-alt h4"></i> +91 8669546954</a></li>
                                    <li><a class="text-decoration-none" href="mailto:sales@rigveduptown-balewadi.com"><i class="fas fa-envelope h4"></i> sales@rigveduptown-balewadi.com</a></li>
                                    <li><a class="text-decoration-none" href=""><i class="fas fa-map-marked-alt h4"></i> Balewadi, Pune</a></li>
                                </ul>
                            </div>

                            <div class="col-xs-6 col-md-3" data-aos="zoom-in">
                                <h6>Quick Links</h6>
                                <ul class="footer-links">
                                    <li><a class="text-decoration-none" href="#Pricing">Pricing</a></li>
                                    <li><a class="text-decoration-none" href="#Amenities">Amenities</a></li>
                                    <li><a class="text-decoration-none" href="#Specifications">Specifications</a></li>
                                    <li><a class="text-decoration-none" href="#Floor">Floor Plans</a></li>
                                    <li><a class="text-decoration-none" href="#Gallery">Gallery</a></li>
                                    <li><a class="text-decoration-none" href="#Location">Location</a></li>
                                    <li><a class="text-decoration-none" href="#Virtual">Virtual Site Tour</a></li>
                                    <!-- <li><a class="text-decoration-none" href="">Brochure</a></li> -->
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
                        <form class="row g-3" id="formSide">
                            <div class="col-md-12 mt-3">
                                <input type="text" class="form-control" name="name" id="nameSide" placeholder="Full Name">
                                <small id="nameSideTxt" class="form-text text-danger"></small>
                            </div>
                            <div class="col-md-12 mt-3">
                                <input type="text" class="form-control" name="email" id="emailSide" placeholder="Email">
                                <small id="emailSideTxt" class="form-text text-danger"></small>
                            </div>
                            <div class="col-md-12 mt-3">
                                <input type="text" class="form-control" name="phone" id="phoneSide" placeholder="Phone">
                                <small id="phoneSideTxt" class="form-text text-danger"></small>
                            </div>
                            <div class="col-md-12 mt-4">
                                <a href="javascript:void(0);" onclick="formSubmit(1);" class="btn px-3 py-1 themeColor">Avail Pre-book Offer</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 px-3">
                        <img class="img-fluid" src="img/sideImg.png" alt="">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
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

        function formSubmit(elem) {
            var name, email, phone;
            var data = {};
            var errors = new Array();
            if (elem == 1) {
                name = $('#nameSide').val();
                email = $('#emailSide').val();
                phone = $('#phoneSide').val();
            } else if (elem === 2) {
                name = $('#nameMob').val();
                email = $('#emailMob').val();
                phone = $('#phoneMob').val();
            } else {
                name = $('#namePopup').val();
                email = $('#emailPopup').val();
                phone = $('#phonePopup').val();
            }
            data = {
                "name": name,
                "email": email,
                "phone": phone
            };
            if (name === "") {
                errors.push("Name is empty");
                switch (elem) {
                    case 1:
                        $('#nameSideTxt').text('Please enter your Name');
                        break;
                    case 2:
                        $('#nameMobTxt').text('Please enter your Name');
                        break;

                    default:
                        $('#namePopupTxt').text('Please enter your Name');
                        break;
                }


            }
            if (email === "") {
                switch (elem) {
                    case 1:
                        $('#emailSideTxt').text('Please enter your Email');
                        break;
                    case 2:
                        $('#emailMobTxt').text('Please enter your Email');
                        break;

                    default:
                        $('#emailPopupTxt').text('Please enter your Email');
                        break;
                }
                errors.push("Email is empty");


            }
            if (phone === "") {
                switch (elem) {
                    case 1:
                        $('#phoneSideTxt').text('Please enter your Phone no.');
                        break;
                    case 2:
                        $('#phoneMobTxt').text('Please enter your Phone no.');
                        break;

                    default:
                        $('#phonePopupTxt').text('Please enter your Phone no.');
                        break;
                }
                errors.push("Phone is empty");


            }
            if (errors.length > 0) {
                // bootbox.alert({
                //     message: errors.join("<br>"),
                //     centerVertical: true,
                //     closeButton: false
                // });
                return false;
            }
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: data,
                success: function(response) {
                    bootbox.alert({
                        // message: response.message,
                        message: "Thank you! Your request has been successfully submitted. We will get back to you shortly.",
                        closeButton: false
                    });
                },
            });
        }

        function popup() {
            var html = '<form class="row g-3" id="formSide">' +
                '<div class="col-md-12 mt-3">' +
                '<input type="text" class="form-control" name="name" id="namePopup" placeholder="Full Name">' +
                '<small id="namePopupTxt" class="form-text text-danger"></small>' +
                ' </div>' +
                '<div class="col-md-12 mt-3">' +
                '<input type="text" class="form-control" name="email" id="emailPopup" placeholder="Email">' +
                '<small id="emailPopupTxt" class="form-text text-danger"></small>' +
                '</div>' +
                '<div class="col-md-12 mt-3">' +
                '<input type="text" class="form-control" name="phone" id="phonePopup" placeholder="Phone">' +
                '<small id="phonePopupTxt" class="form-text text-danger"></small>' +
                '</div>' +
                '<div class="col-md-12 mt-4">' +
                '<a href="javascript:void(0);" onclick="formSubmit(3);" class="btn px-3 py-1 themeColor">Avail Pre-book Offer</a>' +
                '</div>' +
                '</form>';
            bootbox.dialog({
                message: html,

            });
        }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>