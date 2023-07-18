<html>

    <head>
        <title>Pondok Mesin</title>
        <link rel="stylesheet" href="style.css">
        <link href=" <?php echo e(asset('assets_image/Logo-4.png')); ?>" rel="icon" ">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
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

    <!-- Banner -->

    <section class="banner" style="background-image: url(<?php echo e(asset('assets_image/factory.jpg')); ?>);">
        <div class="banner-overlay"></div>
        <div class="container">
            <div class="banner-content">

                <h1>YOUR BUSINESS ENGINE  CENTER</h1>
                <h2>Provide coconut processing machines, agriculture, fisheries, plantations, and livestock</h2>

                <a href="#page-1">
                    <span class="banner-button-red">
                        <span class="button-text">
                            SEE MORE
                        </span>
                    </span>
                </a>

            </div>
        </div>
    </section>


    <!-- Main Content 1-->

    <div class="main-content-1" id="page-1">
        <div class="container">

            <!-- Main Title 1-->

            <div class="main-title-1">
                <h1>OUR FEATURED</h1>
            </div>

            <div class="body-content-1">

                <div class="icon-content">
                    <span class="icon" id="bulat-1" onmouseover="ubahBulat1()" onmouseout="ubahBulatLagi1()">
                        <i class="fas fa-search-dollar"></i>
                    </span>
                    <h1>Harga Bersaing</h1>
                </div>

                <div class="icon-content">
                    <span class="icon" id="bulat-2" onmouseover="ubahBulat2()" onmouseout="ubahBulatLagi2()">
                        <i class="fa fa-shopping-bag"></i>
                    </span>
                    <h1>Kualitas Teruji</h1>
                </div>

                <div class="icon-content">
                    <span class="icon" id="bulat-3" onmouseover="ubahBulat3()" onmouseout="ubahBulatLagi3()">
                        <i class="fas fa-reply-all"></i>
                    </span>
                    <h1>CS Fast Respon</h1>
                </div>

                <div class="icon-content">
                    <span class="icon" id="bulat-4" onmouseover="ubahBulat4()" onmouseout="ubahBulatLagi4()">
                        <i class="fas fa-truck"></i>
                    </span>
                    <h1>Pengiriman Aman</h1>
                </div>

            </div>

            <div class="body-content-2">
                <div class="img-content-1">
                    <img src="<?php echo e(asset('assets_image/Truck.jpg')); ?>">
                </div>
                <div class="text-content-1">
                    <h1>Harga yang kami tawarkan bersaing, Setiap pembelian mesin kami selalu mengujicoba dan memberikan training sebelum dibawa pulang, Layanan maksimal dari customer service kami yang ramah, Dengan packaging yang maksimal, mesin yang Anda pesan akan aman sampai diterima.</h1>
                </div>
            </div>

        </div>
    </div>





    <!-- Main Content 2 -->

    <div class="main-content-2"  id="page-2">
        <div class="container">

            <!-- Main Title 2 -->

            <div class="main-title-2">
                <h1>OUR PRODUCTS</h1>
            </div>

            <div class="img-content-2">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="img-2">
                    <img src="/image/<?php echo e($product->image); ?>">
                    <h1><?php echo e($product->name); ?></h1>
                    <h2><?php echo e($product->price); ?></h2>

                    <div class="overlay-2">
                        <h3><?php echo e($product->name); ?></h3>
                        <h4 style="word-break: break-all;"><?php echo $product->detail; ?></h4>
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </div>





<!-- Main content 3 -->

<div class="main-content-3" id="page-3">
    <div class="container">

    <!-- Main Title 3 -->

    <div class="main-title-3">
        <h1>OUR TESTIMONIAL</h1>
    </div>

        <div class="body-content-3">

            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <!-- Img 1 -->
            <div class="img-content-3">
                <img src="/image/<?php echo e($testimonial->image); ?>" width="80px" height="80px" style="border-radius: 80px;">
                <div class="icon-content-3">
                    <h1><?php echo e($testimonial->name); ?></h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fal fa-star"></i>
                </div>
                <div class="text-content-3">
                    <p style="overflow-wrap: anywhere;"><?php echo $testimonial->review; ?></p>
                </div>
                <hr class="line-content-3">
                <div class= "profesi">
                    <h1><?php echo e($testimonial->business); ?></h1>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>




    </div>
</div>


    <!-- Main Content 4 -->

    <div class="main-content-4"  id="page-4">
        <div class="container">

            <div class="main-title-4">
                <h1>OUR ARTICLE</h1>
            </div>

            <div class="blog-content-4">

                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="img-blog-4">
                        <img src="/image/<?php echo e($article->image); ?>">
                    </div>

                    <div class="text-blog-4">
                        <h1><?php echo e($article->title); ?></h1>
                        <p style="word-break:break-all;"><?php echo $article->content; ?></p>
                        <a href="#our-featured">
                            <span class="banner-button-red">
                                <span class="button-text">
                                    READ MORE
                                </span>
                            </span>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <!-- Main Title 4 -->

            <div class="main-title-4">
                <h1 class="customer-title">OUR COSTUMERS</h1>
            </div>

            <div class="body-content-4">
                <?php $__currentLoopData = $costumers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $costumer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="content-img">
                        <img src="/image/<?php echo e($costumer->image); ?>">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

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
<?php /**PATH /home/abdmalik1207/Documents/Tugas-Belajar/Laravel/Landing-Page/resources/views/landing_page/home.blade.php ENDPATH**/ ?>