<html>

    <head>
        <title>Pondok Mesin</title>
        <link rel="stylesheet" href="style.css">
        <link href=" {{ asset('assets_image/Logo-4.png') }}" rel="icon" ">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/contact_us.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>

    <!--Navbar-->

    <div class="navbar">

        <div class="container">

            <div class="body-navbar">

                <div class="menu-1">
                    <img src="{{ asset('assets_image/Logo-3.png') }}">
                </div>

                <div class="menu-2">
                <input type="text" placeholder="Search" style="font-family:Arial, FontAwesome" />
                </div>

                <div class="menu-3">
                <ul>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li><a href="{{ url('about_us') }}">About Us</a></li>
                    <li><a href="{{ url('contact_us') }}">Contact Us</a></li>
                    <li>
                        <a class="" href="{{ route('logout') }}" style="text-decoration: none; color: white;">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </a>
                    </li>
                </ul>
                 </div>

            </div>
        </div>
    </div>


    <!-- Banner 1-->

    <section class="banner" style="background-image: url({{asset('assets_image/1234.jpg')}});">
        <div class="banner-overlay"></div>
        <div class="container">
            <div class="banner-content">
                <div class="main-1">
                    <p>CONTACT US</p>
                </div>

                <div class="main-2">
                    <p>We Are Very Happy To Help You</p>
                </div>

                <a href="#page-1">
                    <span class="banner-button-red">
                        <span class="button-text">
                            SEE MORE
                        </span>
                    </span>
                </a>

        </div>
    </section>


    <!-- Main Title 1 -->


    <div class="main-content-1" id="page-1">
        <div class="container">

        <div class="main-title-1">
            <h1>OUR CONTACT</h1>
        </div>

            <div class="text-content-1">
                <h1>GET IN TOUCH</h1>
                <h2>Call us or go to our place We are ready to help you succeed in your business and make your dreams come true</h2>
                <h3>OUR SOCIAL MEDIA</h3>
                <span class="facebook">
                    <i class="fab fa-facebook-f"></i>
                </span>
                <span class="instagram">
                    <i class="fab fa-instagram"></i>
                </span>
                <span class="twitter">
                    <i class="fab fa-twitter"></i>
                </span>
                <span class="youtube">
                    <i class="fab fa-youtube"></i>
                </span>
                <h4>PONDOK MESIN</h4>
            </div>

            <div class="text-content-2">

                <div class="icon-content">
                    <h1>OUR ADDRESS</h1>
                    <div class="icon-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>1234 Address name.&nbsp;City Name</p>
                    </div>
                    <div class="icon-1">
                        <i class="fas fa-phone-alt"></i>
                        <p>(123)456-7890</p>
                    </div>
                    <div class="icon-1">
                        <i class="fas fa-envelope"></i>
                        <p>mailexample@gmail.com</p>
                    </div>
                </div>

                <div class="icon-content">
                    <h1>BUSINESS HOURS</h1>
                    <div class="icon-1">
                        <i class="far fa-clock"></i>
                        <p><span style="font-weight: bold">Mon. - Fri.</span>&nbsp; 8am to 5pm</p>
                    </div>
                    <div class="icon-1">
                        <i class="far fa-clock"></i>
                        <p><span style="font-weight: bold">Sat. -</span>&nbsp; 8am to 11pm</p>
                    </div>
                    <div class="icon-1">
                        <i class="far fa-clock"></i>
                        <p><span style="font-weight: bold">Sun. -</span>&nbsp; Closed</p>
                    </div>
                </div>

            </div>

            <div class="text-content-3">
                <div class="input">
                    <h1>DROP YOUR MESSAGE</h1>
                </div>
                <div class="input-1">
                    <input type="text" placeholder="Your Name">
                </div>
                <div class="input-2">
                    <input type="text" placeholder="Your Email">
                </div>
                <div class="input-3">
                    <input type="text" placeholder="Your Message">
                </div>
                <button>Send</button>
            </div>

        </div>
    </div>


    <!--Footer-->

    <footer class="main-footer">

        <div class="container">
            <div class="footer-body">

                <div class="footer-content-1">
                    <span class="footer-img-1">
                        <img src="{{ asset('assets_image/Logo-2.jpg') }}">
                    </span>
                </div>

                <div class="footer-content-2">
                    <span class="footer-img-2">
                        <div class="address">
                            <i class="fas fa-map-marker-alt"></i>
                            <h1>Jl. Raya Krapyak, RT.05, Karanganyar, Wedomartani, Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584</h1>
                        </div>
                        <div class="address">
                            <i class="far fa-envelope-open"></i>
                            <h1>pondokmesin@gmail.com</h1>
                        </div>
                        <div class="address">
                            <i class="fas fa-phone-alt"></i>
                            <h1>0812234567890</h1>
                        </div>
                    </span>
                </div>

                <div class="footer-content-3">
                    <span class="footer-img-3">
                        <div class="support">
                            <h1>Didukung Oleh</h1>
                            <img src="{{ asset('assets_image/logo-bumn (1).jpg') }}">
                        </div>
                    </span>
                </div>

            </div>
        </div>

            <div class="copyright">
                <div class="copyright-text">
                    <h1>&copy; Pondok Mesin, Inc. 2022 - 2022. All rights reserved. </h1>
                </div>
            </div>

    </footer>


</body>

</html>
