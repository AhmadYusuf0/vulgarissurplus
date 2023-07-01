<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Racing Technology</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/vulga_logo2.png') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/swiper.min.css') }}">
    <!--LINK JANGAN DIGUNAKAN< INI AKSES KE WEB ORI TEMPLATE -->
    <!-- <link rel="stylesheet" href="https://kit.fontawesome.com/42d5adcbca.js"> -->
    <!-- <link rel="stylesheet" href="https://reactheme.com/products/html/finbiz/assets/css/plugins/fontawesome-5.css"> -->
    <!-- <link rel="stylesheet" href="https://reactheme.com/products/html/finbiz/assets/css/style.css"> -->
    <link rel="stylesheet" href="{{ url('assets/css/plugins/fontawesome-5.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://admin.perpuskita.dev/assets/id_evn/icons.css">
    <style>
        @font-face {
            font-family: 'Lovecraft';
            src: url('assets/fonts/Lovecraft.ttf') format('truetype');
        }

        @font-face {
            font-family: 'CooperBlack Italic';
            src: url('assets/fonts/CooperBlack Italic.ttf') format('truetype');
        }

        .myfont {
            font-family: Lovecraft, sans-serif;
            font-size: 16px !important;
        }

        .myfont_sm {
            font-family: 'CooperBlack Italic', sans-serif;
            font-size: 14px !important;
        }

        .background-div {
            background-image: url('assets/images/footer_home.png');
            background-size: cover;
            height: 300px;
            width: 100%;
            /* border: 1px solid black; */
            /* Contoh tambahan untuk memperlihatkan dimensi elemen */
        }

        .back-slide {
            background-image: url('assets/images/banner/banner-01.jpg');
            /* Gambar latar belakang awal */
            background-size: cover;
            height: 450px;
            width: 100%;
            /* animation: slideAnimation 9s infinite; */
            /* animation: slideAnimation 4s infinite; */
            /* Efek transisi halus */
        }

        .input-group {
            display: flex;
            align-items: center;
        }

        .input {
            min-height: 50px;
            max-width: 150px;
            padding: 0 1rem;
            color: #000000;
            font-size: 15px;
            border: 1px solid #F1A339 !important;
            border-radius: 6px 0 0 6px;
            background-color: transparent;
        }

        .button--submit {
            min-height: 50px;
            padding: .5em 1em;
            border: none;
            border-radius: 0 6px 6px 0;
            background-color: #F1A339 !important;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
            transition: background-color .3s ease-in-out;
        }

        .button--submit:hover {
            background-color: #ffffff !important;
        }

        .input:focus,
        .input:focus-visible {
            border-color: #3898EC !important;
            outline: none !important;
        }
    </style>
    <script>
        var gambar = ['assets/images/banner/banner-02.jpg', 'assets/images/banner/banner-03.jpg', 'assets/images/banner/banner-01.jpg']; // Array dari gambar latar belakang

        function ubahLatarBelakang() {
            var body = document.querySelector('.back-slide');
            var indeksAcak = Math.floor(Math.random() * gambar.length); // Dapatkan indeks acak dari array gambar
            var gambarAcak = gambar[indeksAcak]; // Dapatkan URL gambar acak

            // console.log(gambarAcak);
            // return false;
            body.style.backgroundImage = 'url("' + gambarAcak + '")'; // Perbarui gambar latar belakang

            setTimeout(ubahLatarBelakang, 3000); // Ubah latar belakang setiap 5 detik (5000 milidetik)
        }

        // Mulai proses perubahan latar belakang setelah halaman dimuat
        window.addEventListener('load', function() {
            ubahLatarBelakang();
        });
    </script>

</head>

<body>

    <!-- start header area -->
    <!-- start header area -->
    <header class="header--sticky header-one " style="background-color: #000000;">
        <div class="header-top header-top-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 d-xl-block d-none">
                        <div class="left">
                            <div class="mail">
                                <!-- kode warna emas : F2921D  -->
                                <a class="myfont_sm" href="mailto:webmaster@example.com"><i class="fal fa-envelope"></i> SurplusVulgaris@gmail.com & Vulgarissurplus@gmail.com</a>
                            </div>
                            <div class="working-time">
                                <p class="myfont_sm"><i class="fal fa-clock"></i> Working: 8.00am - 5.00pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg d-xl-block d-none">
                        <div class="right">
                            <ul class="top-nav"></ul>
                            <!-- <li><a href="about-us.html">About</a></li>
                            <li><a href="blog-list.html">News</a></li>
                            <li><a href="contactus.html">Contact</a></li> -->
                            </ul>
                            <!-- <ul class="social-wrapper-one">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="mr--0" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-one bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="thumbnail">
                            <a href="index.html">
                                <img src="{{ url('assets/images/vulga_logo2.png') }}" alt="finbiz-logo" style="width:180px;">
                            </a>
                        </div>
                    </div>
                    <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="main-header">
                            <nav class="nav-main mainmenu-nav d-none d-xl-block">
                                <ul class="mainmenu">
                                    <li class="">
                                        <a class="myfont nav-link" href="#" style="color: #FFFFFF!important;">Home</a>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="myfont nav-link" href="#" style="color: #FFFFFF!important;">Men</a>
                                        <ul class="submenu">
                                            <li><a href="our-service.html">Our Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="myfont nav-link" href="#" style="color: #FFFFFF!important;">Women</a>
                                        <ul class="submenu menu-link">
                                            <li class="menu-item">
                                                <a class="tag" href="#">Pages</a>
                                                <ul>
                                                    <li><a href="appoinment.html">Appoinment</a></li>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="price-plan.html">Price Plans</a></li>
                                                    <li><a href="our-service.html">Our Services</a></li>
                                                    <li><a href="testimonial-style-1.html">Testimonial</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="tag" href="#">Portfolio</a>
                                                <ul>
                                                    <li><a href="project.html">Portfolio Style 1</a></li>
                                                    <li><a href="portfolio-style-2.html">Portfolio Style 2</a></li>
                                                    <li><a href="portfolio-style-3.html">Portfolio Style 3</a></li>
                                                    <li><a href="portfolio-style-4.html">Portfolio Style 4</a></li>
                                                    <li><a href="portfolio-style-5.html">Portfolio Style 5</a></li>
                                                    <li><a href="project-details.html">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="tag" href="#">Our Teams</a>
                                                <ul>
                                                    <li><a href="team.html">Team Style 1</a></li>
                                                    <li><a href="team-style-2.html">Team Style 2</a></li>
                                                    <li><a href="team-style-3.html">Team Style 3</a></li>
                                                    <li><a href="team-style-4.html">Team Style 4</a></li>
                                                    <li><a href="team-style-5.html">Team Style 5</a></li>
                                                    <li><a href="team-details.html">Team Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="myfont nav-link" href="#" style="color: #FFFFFF!important;">Marketplace</a>
                                        <ul class="submenu menu-link2">
                                            <li class="menu-item">
                                                <ul>
                                                    <li><a href="accordion.html">Accordion</a></li>
                                                    <li><a href="address-box.html">Address Box</a></li>
                                                    <li><a href="button.html">Button</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="blog-slider.html">Blog Slider</a></li>
                                                    <li><a href="blog-quote.html">Blog Quote</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <ul>
                                                    <li><a href="heading.html">Heading</a></li>
                                                    <li><a href="cta.html">Call To Action</a></li>
                                                    <li><a href="contact-form.html">Contact Form</a></li>
                                                    <li><a href="counter.html">Counter Up</a></li>
                                                    <li><a href="brand.html">Brand Logo</a></li>
                                                    <li><a href="video.html">Video Addon</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <ul>
                                                    <li><a href="pricing.html">Pricing Table</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="tab-addon.html">Tab Addon</a></li>
                                                    <li><a href="progress-bar.html">Progress Bar</a></li>
                                                    <li><a href="testimonial.html">Testimonial</a></li>
                                                    <li><a href="working-process.html">Working Process</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="myfont nav-item" href="contactus.html" style="color: #FFFFFF!important;">Contact Us</a></li>
                                    <li>
                                        <div class="input-group">
                                            <input type="text" class="input" id="cari" name="cari" placeholder="Search Anything Here" autocomplete="off">
                                            <input class="button--submit" value="Search" type="submit">
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <!-- <div class="button-area">
                                <button id="search" class="rts-btn btn-primary-alta"><i class="far fa-search"></i></button>
                                <div class="search-input-area">
                                    <div class="container">
                                        <div class="search-input-inner">
                                            <div class="input-div">
                                                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                                                <button><i class="far fa-search"></i></button>
                                            </div>
                                            <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Get Quote</a>
                                <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                    <img class="menu-dark" src="https://reactheme.com/products/html/finbiz/assets/images/icon/menu.png" alt="Menu-icon">
                                    <img class="menu-light" src="https://reactheme.com/products/html/finbiz/assets/images/icon/menu-light.png" alt="Menu-icon">
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header area -->

    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="index.html"><img class="logo" src="https://reactheme.com/products/html/finbiz/assets/images/logo/logo-1.svg" alt="finbiz_logo"></a>
            <a class="logo-2" href="index.html"><img class="logo" src="https://reactheme.com/products/html/finbiz/assets/images/logo/logo-4.svg" alt="finbiz_logo"></a>
            <a class="logo-3" href="index.html"><img class="logo" src="https://reactheme.com/products/html/finbiz/assets/images/logo/logo-3.svg" alt="finbiz_logo"></a>
            <a class="logo-4" href="index.html"><img class="logo" src="https://reactheme.com/products/html/finbiz/assets/images/logo/logo-5.svg" alt="finbiz_logo"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">+8801234566789</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="#">example@gmail.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="#">www.webexample.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">13/A, New Pro State, NYC</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <!-- <div class="social-wrapper-two menu">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a> </div> -->
                </div>
            </div>
            <div class="body-mobile d-block d-xl-none">
                <nav class="nav-main mainmenu-nav">
                    <ul class="mainmenu">
                        <li class="has-droupdown">
                            <a href="#">Home</a>
                            <ul class="submenu">
                                <li><a href="index.html">Main Home</a></li>
                                <li><a href="index-two.html">Consulting Home</a></li>
                                <li><a href="index-three.html">Corporate Home</a></li>
                                <li><a href="index-four.html">Insurance Home</a></li>
                                <li><a href="index-five.html">Marketing Home</a></li>
                                <li><a href="onepage-one.html">Main Home Onepage</a></li>
                                <li><a href="onepage-two.html">Consulting Home Onepage</a></li>
                                <li><a href="onepage-three.html">Corporate Home Onepage</a></li>
                                <li><a href="onepage-four.html">Insurance Home Onepage</a></li>
                                <li><a href="onepage-five.html">Marketing Home Onepage</a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li class="has-droupdown">
                            <a href="#">Services</a>
                            <ul class="submenu">
                                <li><a href="our-service.html">Our Service</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a href="#">Pages</a>
                            <ul class="submenu">
                                <li><a href="project.html">Project</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="appoinment.html">appoinment</a></li>
                                <li><a href="price-plan.html">Price Plan</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a href="#">Blog</a>
                            <ul class="submenu">
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contactus.html">Contact</a></li>
                    </ul>
                </nav>
                <!-- <div class="social-wrapper-two menu mobile-menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                <!-- </div>
                <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a> -->
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>

    <div id="anywhere-home"></div>
    <!-- ENd Header Area -->

    <!-- banner blank space area -->
    <!-- <div class="rts-banner-area rts-banner-one">
        <div class="swiper mySwiper banner-one">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="">
                        <br><br>
                        <center>
                            <img src="{{ url('assets/images/vulga_logo1.png') }}" alt="finbiz-logo" style="width:280px;">
                            <h4 class="text-white" style="margin: 2rem !important;">WELCOME TO VULGARIS SURPLUS</h4>
                            <br>
                            <h5 class="text-white">Give The Best For Your Clothing Needs</h5>
                        </center>
                        <br><br><br><br>
                        <br><br><br><br>
                    </div>
                </div>
                <div class="swiper-slide two">
                    <div class="text-start">
                        <br><br>
                        <center>
                            <img src="{{ url('assets/images/vulga_logo1.png') }}" alt="finbiz-logo" style="width:280px;">
                            <h4 class="text-white" style="margin: 2rem !important;">WELCOME TO VULGARIS SURPLUS</h4>
                            <br>
                            <h5 class="text-white">Give The Best For Your Clothing Needs</h5>
                        </center>
                        <br><br><br><br>
                        <br><br><br><br>
                    </div>
                </div>
                <div class="swiper-slide three">
                    <div class="text-start">
                        <br><br>
                        <center>
                            <img src="{{ url('assets/images/vulga_logo1.png') }}" alt="finbiz-logo" style="width:280px;">
                            <h4 class="text-white" style="margin: 2rem !important;">WELCOME TO VULGARIS SURPLUS</h4>
                            <br>
                            <h5 class="text-white">Give The Best For Your Clothing Needs</h5>
                        </center>
                        <br><br><br><br>
                        <br><br><br><br>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination">
            </div>
        </div>
    </div> -->
    <div class="back-slide">
        <div class="text-start">
            <br><br>
            <center>
                <img src="{{ url('assets/images/vulga_logo1.png') }}" alt="finbiz-logo" style="width:280px;">
                <h4 class="text-white" style="margin: 2rem !important;">WELCOME TO VULGARIS SURPLUS</h4>
                <br>
                <h5 class="text-white">Give The Best For Your Clothing Needs</h5>
            </center>
            <br><br><br><br>
            <br><br><br><br>
        </div>
    </div>
    <div class="background-div row">
        <div class="col-4"></div>
        <div class="col-4">
            <br><br><br><br>
            <h5>
                Gambar jenis objek vector diubah dalam bentuk
                ukuran tanpa harus menurunkan grafis.
                Hasil grafis vector bisa diprint dengan kualitas
                terbaik dari printer

            </h5>
        </div>
        <div class="col-4"></div>
    </div>
    <!-- banner blank space area end -->

    <!-- rts about us section start -->

    <div class="rts-about-area rts-section-gap bg-about-sm-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <p class="pre-title">
                            VULGARIS SURPLUS
                        </p>
                        <h2 class="title">Profile</h2>
                    </div>
                    <div class="about-inner">
                        <h6>
                            Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit, Sed Diam Nonummy Nibh Euismod Tincidunt Ut
                            Laoreet Dolore Magna Aliquam Erat Volutpat. Ut Wisi Enim Ad Minim Veniam, Quis Nostrud Exerci
                            Ullamcorper Suscipit Nisl Ut Aliquip Ex Ea Commodo Consequat. Duis Autem Vel Eum Iriure Dolor
                            In Hendrerit In Vulputate Velit Esse Consequat, Vel Illum Dolore Eu Feugiat Nulla Facilisis At Vero
                            Eros Et Accumsan Et Iusto Odio Dignissim Qui Blandit Praesent Luptatum Zzril Delenit Augue Duis Dolore Te
                            Feugait Nulla Facilisi.
                            Lorem Ipsum Dolor Sit Amet, Cons Ectetuer Adipiscing Elit, Sed Diam Nonummy Nibh Euismod Tincidunt Ut
                            Laoreet Dolore Magna Aliquam Erat Volutpat. Ut Wisi Enim Ad Minim Veniam, Quis Nostrud Exerci
                            Ullamcorper Suscipit Nisl Ut Aliquip Ex Ea Commodo Consequat.
                            Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit, Sed Diam Nonummy Nibh Euismod Tincidunt Ut
                        </h6>


                        <div class="row about-founder-wrapper align-items-center mt--40">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="author-inner">
                                    <!-- <a class="thumbnail" href="#"><img src="https://reactheme.com/products/html/finbiz/assets/images/about/sm-01.png" alt="finbiz_founder"></a> -->
                                    <a class="thumbnail" href="#"><img src="{{ url('assets/images/produk/produk_2.jpg') }}" alt="finbiz_founder" style="width: 50px;"></a>
                                    <div class="founder-details">
                                        <a href="team-details.html">
                                            <h6 class="title">Coum Bree</h6>
                                        </a>
                                        <span>CEO & Founder</span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_sm--20">
                                <div class="author-call-option">
                                    <img class="authore-call" src="https://reactheme.com/products/html/finbiz/assets/images/about/call.svg" alt="call_founder">
                                    <div class="call-details">
                                        <span>Call us anytime</span>
                                        <a href="tel:+18475555555">
                                            <h6 class="title">+256 21458.2146</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-sm-1 order-1">
                    <div class="about-one-thumbnail">
                        <img src="{{ url('assets/images/produk/produk_2.jpg') }}" style="width:500px" alt="about-finbiz">
                        <img class="small-img" src="{{ url('assets/images/produk/produk_4.png') }}" style="width:300px" alt="finbiz-small">
                        <!-- <div class="experience"> -->
                        <!-- <div class="left single">
                                <h2 class="title">25+</h2>
                                <p class="time">Years</p>
                            </div>
                            <div class="right single">
                                <p class="disc">
                                    Of experience
                                    in consulting
                                    service
                                </p>
                            </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="rts-counter-up-area rts-section-gap counter-bg">

        <div class="container">
            <div class="rts-title-area">
                <p class="pre-title">
                    OUR PRODUCTS
                </p>
                <h2 class="title">MENS</h2>
            </div>
        </div>
        <div class="container-2">
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <div class="counter-details">
                            <h4 class="title"><span class="counter animated fadeInDownBig">858</span></h4>
                            <p class="title">JACKET</p>
                        </div>
                        <img src="{{ url('assets/images/produk/produk_5.jpg') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <div class="counter-details">
                            <h4 class="title"><span class="counter animated fadeInDownBig">858</span></h4>
                            <p class="title">HOODIE</p>
                        </div>
                        <img src="{{ url('assets/images/produk/produk_6.jpg') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <div class="counter-details">
                            <h4 class="title"><span class="counter animated fadeInDownBig">858</span></h4>
                            <p class="title">TOOTBAG</p>
                        </div>
                        <img src="{{ url('assets/images/produk/produk_4.png') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <div class="counter-details">
                            <h4 class="title"><span class="counter animated fadeInDownBig">858</span></h4>
                            <p class="title">JERSEY</p>
                        </div>
                        <img src="{{ url('assets/images/produk/produk_8.jpg') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <div class="counter-details">
                            <h4 class="title"><span class="counter animated fadeInDownBig">85</span></h4>
                            <p class="title">PANTS</p>
                        </div>
                        <img src="{{ url('assets/images/produk/produk_9.jpg') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <div class="counter-details">
                            <h4 class="title"><span class="counter animated fadeInDownBig">58</span></h4>
                            <p class="title">SHORT</p>
                        </div>
                        <img src="{{ url('assets/images/produk/produk.jpg') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <center>
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-counter">
                            <div class="counter-details">
                                <h4 class="title"><span class="counter animated fadeInDownBig">85</span></h4>
                                <p class="title">T-SHIRT</p>
                            </div>
                            <img src="{{ url('assets/images/produk/produk_3.jpg') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <div class="rts-counter-up-area rts-section-gap counter-bg2">

        <div class="business-goal-right">
            <div class="rts-title-area business text-start pl--30">
                <p class="pre-title">
                    OUR PRODUCTS
                </p>
                <h2 class="title">WOMEN</h2>
            </div>
            <div class="container-2">
                <div class="row">
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-counter">
                            <div class="counter-details">
                                <h4 class="title"><span class="counter animated fadeInDownBig">858</span></h4>
                                <p class="title">JACKET</p>
                            </div>
                            <img src="{{ url('assets/images/produk/produk_5.jpg') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-counter">
                            <div class="counter-details">
                                <h4 class="title"><span class="counter animated fadeInDownBig">858</span></h4>
                                <p class="title">HOODIE</p>
                            </div>
                            <img src="{{ url('assets/images/produk/produk_6.jpg') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-counter">
                            <div class="counter-details">
                                <h4 class="title"><span class="counter animated fadeInDownBig">858</span></h4>
                                <p class="title">TOOTBAG</p>
                            </div>
                            <img src="{{ url('assets/images/produk/produk_4.png') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-counter">
                            <div class="counter-details">
                                <h4 class="title"><span class="counter animated fadeInDownBig">858</span></h4>
                                <p class="title">JERSEY</p>
                            </div>
                            <img src="{{ url('assets/images/produk/produk_8.jpg') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-counter">
                            <div class="counter-details">
                                <h4 class="title"><span class="counter animated fadeInDownBig">85</span></h4>
                                <p class="title">PANTS</p>
                            </div>
                            <img src="{{ url('assets/images/produk/produk_9.jpg') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-counter">
                            <div class="counter-details">
                                <h4 class="title"><span class="counter animated fadeInDownBig">58</span></h4>
                                <p class="title">SHORT</p>
                            </div>
                            <img src="{{ url('assets/images/produk/produk.jpg') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <center>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-counter">
                                <div class="counter-details">
                                    <h4 class="title"><span class="counter animated fadeInDownBig">85</span></h4>
                                    <p class="title">T-SHIRT</p>
                                </div>
                                <img src="{{ url('assets/images/produk/produk_3.jpg') }}" alt="Business_counter" style="border-radius:5%; width: 85%; height:30vh;">
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-business-goal mt--0 rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="business-goal-one">
                        <br><br><br>
                        <br><br><br>
                        <img src="{{ url('assets/images/banner/banner-03.jpg') }}" style="width:100%; border-radius:10px;  height:40vh;" alt="Business_Goal">
                        <!-- <img class="small" src="{{ url('assets/images/produk/produk_6.jpg') }}" style="width:350px;  border-radius:5%;" alt="Business_Goal"> -->
                    </div>
                </div>

                <div class="col-lg-6 mt--35 mt_md--70 mt_sm--70">
                    <div class="business-goal-right">
                        <div class="rts-title-area business text-start pl--30">
                            <p class="pre-title">
                                VULGARIS SURPLUS
                            </p>
                            <h2 class="title">FIVERR</h2>
                        </div>
                        <div class="rts-business-goal pl--30">
                            <!-- <div class="single-goal">
                                <img src="https://reactheme.com/products/html/finbiz/assets/images/business-goal/icon/02.svg" alt="business_Icone" class="thumb">
                                <div class="goal-wrapper">
                                    <h6 class="title">24/7 Customer Support</h6>
                                    <p class="disc">Fusce condimentum mattis placerat odio donec lacus porta torquent,
                                        mauris gravida rutrum</p>
                                </div>
                            </div> -->
                            <div class="single-goal">
                                <!-- <img src="https://reactheme.com/products/html/finbiz/assets/images/business-goal/icon/01.svg" alt="business_Icone" class="thumb"> -->
                                <div class="goal-wrapper">
                                    <h6 class="title">Kita adalah pekerja paruh waktu. jika kalian
                                        berminat untuk kustom gambar seperti idealis
                                        kami. Anda bisa pesan gambar kami di Fiverr</h6>
                                    <!-- <p class="disc">Fusce condimentum mattis placerat odio donec lacus porta torquent,
                                        mauris gravida rutrum</p> -->
                                </div>
                            </div>
                            <div class="goal-button-wrapper mt--70">
                                <a href="https://www.fiverr.com/s/8VZk3E" class="rts-btn btn-primary color-h-black">


                                    <img class="small" src="{{ url('assets/images/icon/icon_troly.png') }}" style="width:40px;  border-radius:5%;" alt="Fiverr">&ensp;SHOW ME ON FIVERR</a>
                                <!-- <div class="vedio-icone">
                                    <a id="play-video" class="video-play-button" href="#">
                                        <span></span>
                                        <span class="outer-text">Watch Video</span>
                                    </a>
                                    <div id="video-overlay" class="video-overlay">
                                        <a class="video-overlay-close">×</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
    <!-- rts about us section end -->

    <div class="rts-business-goal mt--0 rts-section-gapBottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 mt--35 mt_md--70 mt_sm--70">
                    <div class="business-goal-right">
                        <div class="rts-title-area business text-start pl--30">
                            <p class="pre-title">
                                VULGARIS SURPLUS
                            </p>
                            <h2 class="title">ARTSY</h2>
                        </div>
                        <div class="rts-business-goal pl--30">
                            <div class="single-goal">
                                <div class="goal-wrapper">
                                    <h6 class="title">Kita adalah pekerja paruh waktu. jika kalian
                                        berminat untuk kustom gambar seperti idealis
                                        kami. Anda bisa pesan gambar kami di Artsy</h6>
                                </div>
                            </div>
                            <div class="goal-button-wrapper mt--70">
                                <a href="https://www.fiverr.com/s/8VZk3E" class="rts-btn btn-primary color-h-black">
                                    <img class="small" src="{{ url('assets/images/icon/icon_troly.png') }}" style="width:40px;  border-radius:5%;" alt="Fiverr">&ensp;SHOW ME ON ARTSY</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="business-goal-one">
                        <br><br><br>
                        <br><br><br>
                        <img src="{{ url('assets/images/banner/banner-01.jpg') }}" style="width:100%; border-radius:10px;  height:40vh;" alt="Business_Goal">
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
    <!-- rts service post area  Start-->

    <!-- <div class="rts-service-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area service text-center">
                        <p class="pre-title">
                            Our Services
                        </p>
                        <h2 class="title">High Quality Services</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid service-main plr--120-service mt--50 plr_md--0 pl_sm--0 pr_sm--0">
            <div class="background-service row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner one">
                        <div class="thumbnail">
                            <img src="https://reactheme.com/products/html/finbiz/assets/images/service/icon/01.svg" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <a href="service-details.html">
                                <h5 class="title">Business Planning</h5>
                            </a>
                            <p class="disc">
                                Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                            </p>
                            <a class="rts-read-more btn-primary" href="service-details.html"><i class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner two">
                        <div class="thumbnail">
                            <img src="https://reactheme.com/products/html/finbiz/assets/images/service/icon/02.svg" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <a href="service-details.html">
                                <h5 class="title">Develop Process</h5>
                            </a>
                            <p class="disc">
                                Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                            </p>
                            <a class="rts-read-more btn-primary" href="service-details.html"><i class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner three">
                        <div class="thumbnail">
                            <img src="https://reactheme.com/products/html/finbiz/assets/images/service/icon/03.svg" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <a href="service-details.html">
                                <h5 class="title">Strategy & Planning</h5>
                            </a>
                            <p class="disc">
                                Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                            </p>
                            <a class="rts-read-more btn-primary" href="service-details.html"><i class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner four">
                        <div class="thumbnail">
                            <img src="https://reactheme.com/products/html/finbiz/assets/images/service/icon/04.svg" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <a href="service-details.html">
                                <h5 class="title">Business Support</h5>
                            </a>
                            <p class="disc">
                                Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                            </p>
                            <a class="rts-read-more btn-primary" href="service-details.html"><i class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner five">
                        <div class="thumbnail">
                            <img src="https://reactheme.com/products/html/finbiz/assets/images/service/icon/05.svg" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <a href="service-details.html">
                                <h5 class="title">Audit & Evaluation</h5>
                            </a>
                            <p class="disc">
                                Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                            </p>
                            <a class="rts-read-more btn-primary" href="service-details.html"><i class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner six">
                        <div class="thumbnail">
                            <img src="https://reactheme.com/products/html/finbiz/assets/images/service/icon/06.svg" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <a href="service-details.html">
                                <h5 class="title">Consultancy & Advice</h5>
                            </a>
                            <p class="disc">
                                Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                            </p>
                            <a class="rts-read-more btn-primary" href="service-details.html"><i class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cta-one-bg col-12">
                    <div class="cta-one-inner">
                        <div class="cta-left">
                            <h3 class="title">Let’s discuss about how we can help
                                make your business better</h3>
                        </div>
                        <div class="cta-right">
                            <a class="rts-btn btn-white" href="appoinment.html">Lets Work Together</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- rts service post area ENd -->


    <!-- start loader -->
    <!-- <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->
    <!-- End loader -->

    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- progress Back to top End -->


    <!-- scripts start form hear -->
    <script src="{{ url('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/jqueryui.js') }}"></script>
    <script src="{{ url('assets/js/vendor/waypoint.js') }}"></script>
    <script src="{{ url('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/swiper.js') }}"></script>
    <script src="{{ url('assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ url('assets/js/plugins/sal.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/contact.form.js') }}"></script>
    <!-- main Js -->
    <script src="{{ url('assets/js/main.js') }}"></script>
    <!-- href="{{ url('assets/css/style.css') }}" -->
    <!-- scripts end form hear -->
</body>

</html>