<html>

    <head>
        <title>Pondok Mesin</title>
        <link rel="stylesheet" href="style.css">
        <link href="<?php echo e(asset('assets_image/Logo-4.png')); ?>" rel="icon">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('css/about_us.css')); ?>">
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body>

    <!--Navbar-->

        <div class="navbar">

            <div class="container">

                <div class="body-navbar">

                    <div class="menu-1">
                        <img src="<?php echo e(asset('assets_image/Logo-3.png')); ?>">
                    </div>

                    <div class="menu-2">
                    <input type="text" placeholder="Search" style="font-family:Arial, FontAwesome" />
                    </div>

                    <div class="menu-3">
                    <ul>
                        <li><a href="<?php echo e(url('home')); ?>">Home</a></li>
                        <li><a href="<?php echo e(url('about_us')); ?>">About Us</a></li>
                        <li><a href="<?php echo e(url('contact_us')); ?>">Contact Us</a></li>
                        <li>
                            <a class="" href="<?php echo e(route('logout')); ?>" style="text-decoration: none; color: white;">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </li>
                    </ul>
                     </div>

                </div>
            </div>
        </div>


    <!-- Banner 1-->

        <section class="banner" style="background-image: url(<?php echo e(asset('assets_image/BuildingMockUp.jpg')); ?>);">
            <div class="banner-overlay"></div>
            <div class="container">
                <div class="banner-content">
                    <div class="main-1">
                        <p>ABOUT US</p>
                    </div>

                    <div class="main-2">
                        <p>We Are Here To Help Meet Your Business Productions Needs</p>
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



    <!-- Main Content 1 -->

    <div class="main-content-1" id="page-1">
        <div class="container">

            <div class="main-title-1">
                <h1>OUR STORY</h1>
            </div>

            <div class="body-content-1">
                <?php $__currentLoopData = $stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="main-img-1">
                        <img src="/image/<?php echo e($story->image); ?>">
                    </div>
                    <div class="main-text-1">
                        <h1 style="word-break: break-all;"><?php echo $story->story; ?></h1>
                        <div class="main-watermark-1">
                        <i class="fas fa-user"></i> &nbsp;
                        <h1>FOUNDER OF PONDOK MESIN</h1>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>


    <!-- Main Content 2 -->

    <div class="main-content-2" id="page-2">
        <div class="container">
        <!-- Main Title 2 -->

            <div class="main-title-2">
                <h1>OUR OFFICE TEAM</h1>
            </div>

            <div class="body-content">

                <?php $__currentLoopData = $officers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $officer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="image-container">
                        <div class="content-img-2">
                        <img src="/image/<?php echo e($officer->image); ?>">
                            <div class="overlay-2"></div>
                        </div>
                        <div class="content-text-2">
                            <div class="paragraph-1">
                                <h1><?php echo e($officer->name); ?></h1>
                                <h2><?php echo e($officer->position); ?></h2>
                            </div>
                            <div class="paragraph-2">
                                <p style="word-break: break-all;"><?php echo $officer->biography; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>


    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=pondok%20informatika&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://putlocker-is.org">putlocker</a><br><a href="https://www.embedgooglemap.net">how to embed google maps</a>
        </div>
    </div>


    <!--Footer-->

    <footer class="main-footer">

    <div class="container">
        <div class="footer-body">

            <!--Content 1-->
            <div class="footer-content-1">
                <span class="footer-img-1">
                    <img src="<?php echo e(asset('assets_image/Logo-2.jpg')); ?>">
                </span>
            </div>

            <!--Content 2-->
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

            <!--Content 3-->
            <div class="footer-content-3">
                <span class="footer-img-3">
                    <div class="support">
                        <h1>Didukung Oleh</h1>
                        <img src="<?php echo e(asset('assets_image/logo-bumn (1).jpg')); ?>">
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
<?php /**PATH /home/abdmalik/Laravel/landing_page/resources/views/landing_page/about_us.blade.php ENDPATH**/ ?>