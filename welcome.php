<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wall's!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow py-1 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://www.peaconsulting.co.uk/wp-content/uploads/2018/04/walls-web.jpg" alt="" class="logo-medium">
                Wall's
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#landing">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pegawai.php">Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>

                </ul>
                <div class="social-links">
                            <a href="https://id-id.facebook.com/WallsIDN/"i class="ri-facebook-circle-fill"></i></a>
                            <a href="https://www.instagram.com/wallsidn/?hl=id"><i class="ri-instagram-fill"></i></a>
                            <a href="https://www.youtube.com/channel/UCXl9GX28SHfMMaD6Hlu3nsg"><i class="ri-youtube-fill"></i></a>
                            <a href="https://twitter.com/wallsidn"><i class="ri-twitter-fill"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Landing Page -->
    <div id="landing" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
        <div class="carousel-inner">

            <div class="carousel-item text-center bg-cover vh-100 active slide-1">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h4 data-aos="fade-up" data-aos-delay="300">Selamat datang di Website Wall's!</h4>
                            <h1 class="display-4 my-5 fw-bold" data-aos="fade-up" data-aos-delay="500">Pilihan Cemilan Es Krim Enak dan Praktis dari Wall's</h1>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <section class="section-about-vision py-main">
        <div class="container">
            <div class="row row-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://1.bp.blogspot.com/-L3n_KR_0GMc/UWbvp-6HicI/AAAAAAAAHno/0NrkoCeNM2o/s1600/Cornetto+Single+cone+chocolate.jpg" class="img-fluid img-general vp-fadeinleft mb-sm-down-3 visible animated fadeInLeft" alt="Image Vision">
                </div>
                <div class="col-md-6 content-center vp-fadeinup visible animated fadeInUp" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="title">Visi</h2>
                    <ul class="pl-3 subtitle">
                    <li>
                        <p class="mb-2">untuk membangun dunia yang lebih inklusif dan lebih bahagia, satu jalan pada saat bersamaan - dan dengan senjata paling ampuh yang bisa diimpikan oleh setiap orang.</p>
                    </li>
                    <li>
                        <p class="mb-2">Kami percaya bahwa kami memiliki peran besar dalam mendorong perubahan sosial yang positif dengan memanfaatkan bisnis dan es krim kami.</p>
                    </li>
                    <li>
                        <p class="mb-2">kami memiliki sesuatu untuk semua orang! Sama halnya kita tahu berbagai macam kru ini bisa mendorong kebahagiaan di antara semua kelompok usia dan memiliki kemampuan untuk meluluhkan penghalang di antara berbagai komunitas yang berbeda.</p>
                    </li>
                    <li>
                        <p class="mb-2">Untuk meraih rasa cinta dan penghargaan dari Indonesia dengan menyentuh kehidupan setiap orang Indonesia setiap harinya.</p>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-main section-about-mission bg-gray-20">
    <div class="container">
        <div class="row row-4">
            <div class="col-md-6 order-md-last" data-aos="fade-up" data-aos-delay="200">
                <img src="https://www.conveniencestore.co.uk/Pictures/620xAny/0/6/8/91068_Unilever-ice-cream-resized.jpg" class="img-fluid img-general vp-fadeinleft mb-sm-down-3 visible animated fadeInLeft">
            </div>
            <div class="col-md-6 order-md-first content-center vp-fadeinup visible animated fadeInUp" data-aos="fade-up" data-aos-delay="200">
                <h2 class="title">Misi</h2>
                <ul class="pl-3 subtitle">
                    <li>
                        <p class="mb-2">Kami bekerja untuk menciptakan masa depan yang lebih baik setiap hari.</p>
                    </li>
                    <li>
                        <p class="mb-2"> Kami membantu konsumen merasa nyaman, berpenampilan baik, dan lebih menikmati hidup melalui brand dan layanan yang baik bagi mereka dan orang lain.</p>
                    </li>
                    <li>
                        <p class="mb-2">Kami menginspirasi masyarakat untuk melakukan langkah kecil setiap harinya yang bila digabungkan bisa mewujudkan perubahan besar bagi dunia.</p>
                    </li>
                    <li>
                        <p class="mb-2">Kami senantiasa mengembangkan cara baru dalam berbisnis yang memungkinkan kami tumbuh dua kali lipat sambil mengurangi dampak terhadap lingkungan.</p>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
        </div>
    </div>

        <picture>
            <!-- Default to load - desktop (wall's)--> 
             <img src="https://assets.klikindomaret.com/products/promopage/Mini%20Banner%20Walls%20Ice%20cream.jpg" >
        </picture>

    <!-- Menu -->
    <section id="menu" class="bg-cover">
        <div class="container">
            <div class="row">
                <div class="col-12 intro-text">
                    <h3 class="menu-title" data-aos="fade-up">Selamat Datang Di Produk Wall's</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-breakfast-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-breakfast" type="button" role="tab" aria-controls="pills-breakfast"
                        aria-selected="true">Ice cream</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel"
                    aria-labelledby="pills-breakfast-tab" tabindex="0" data-aos="fade-up" data-aos-delay="600">
                    <div class="row gy-4">

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item shadow-on-hover rounded-4">
                                <img src="https://www.wallsicecream.com/content/dam/unilever/viennetta/indonesia/pack_shot/walls_viennetta_update-2028967-png.png" alt="">
                                <div class="menu-item-content p-4">
                                    <h5 class="mt-1 mb-4"><a href="#">Wall's viennetta</a></h5>
                                    <a href="#" class="btn-menu btn-menu-brand">Order Now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item shadow-on-hover rounded-4">
                                <img src="https://th.bing.com/th/id/OIP.aRUkL0iL4oDf2TbdFjiVRAHaHa?pid=ImgDet&rs=1" alt="">
                                <div class="menu-item-content p-4">
                                    <h5 class="mt-1 mb-4"><a href="#">Cornetto Classico</a></h5>
                                    <a href="#" class="btn-menu btn-menu-brand">Order Now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item shadow-on-hover rounded-4">
                                <img src="https://th.bing.com/th/id/OIP.HBd8w2TWT7zw8CsIvulvTQHaHa?pid=ImgDet&rs=1" alt="">
                                <div class="menu-item-content p-4">
                                    <h5 class="mt-1 mb-4"><a href="#">Populaire Strawberry</a></h5>
                                    <a href="#" class="btn-menu btn-menu-brand">Order Now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item shadow-on-hover rounded-4">
                                <img src="https://coldstorage-s3.dexecure.net/product/5002673.jpg" alt="">
                                <div class="menu-item-content p-4">
                                    <h5 class="mt-1 mb-4"><a href="#">Paddle Pop Rainbow</a></h5>
                                    <a href="#" class="btn-menu btn-menu-brand">Order Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Contacts -->
    <section id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-12 intro-text">
                    <h1 class="contacts-title" data-aos="fade-up">Let's connected with us </h1>
                    <p data-aos="fade-up" data-aos-delay="300">We will send you the latest information about walls.</p>
                </div>
            </div>
            <form action="#" class="row justify-content-center" data-aos="fade-up" data-aos-delay="600">
                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group text-center col-md-12">
                            <a href="#" class="btn btn-brand">Send</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- footer -->
    <footer class="">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5 justify-content-center">
                    <div class="col-lg-4 text-center">
                        <h4 class="text-center" data-aos="fade-up">Find Wall's on</h4>
                        <div class="social-links">
                            <a href="#link" data-aos="fade-up" data-aos-delay="300"><i class="ri-facebook-circle-fill"></i></a>
                            <a href="#link" data-aos="fade-up" data-aos-delay="600"><i class="ri-instagram-fill"></i></a>
                            <a href="#link" data-aos="fade-up" data-aos-delay="800"><i class="ri-youtube-fill"></i></a>
                            <a href="#link" data-aos="fade-up" data-aos-delay="1000"><i class="ri-twitter-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row gy-3 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Copyrights all rights reserved</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Designed By Suci dan Muthia</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>