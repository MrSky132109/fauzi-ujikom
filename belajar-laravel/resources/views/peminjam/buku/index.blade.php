<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Perpustakaan Bogor</title>
    
    <!-- CSS FILES -->
    <link href="{{ asset('/') }}css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('/') }}css/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('/') }}css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

</head>

<body id="section_1">

   

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="images/logo.png" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    Perpustakaan Bogor
                    <small>Perpustakaan umum</small>
                </span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#top">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                   

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Volunteer</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="#section_5"
                        id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">News</a>
                        
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="news.html">News Listing</a></li>

                            <li><a class="dropdown-item" href="news-detail.html">News Detail</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_6">Contact</a>
                    </li>
                    
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="{{ url('/register') }}">Register</a>
                    </li>
                
                </ul>
            </div>
        </div>
    </nav>

    <main>
        
        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/slide/slide1.jpeg"
                                    class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end ">
                                            <h1>Strategis</h1>
                                                 
                                            
                                        <p>Tempat yang strategis dan mudah di jankau</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images/slide/slide2.jpg"
                                        class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Lengkap</h1>
                                            
                                        <p>Beragam jenis buku yang lengkap</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images/slide/slide3.jpg"
                                    class="carousel-image img-fluid" alt="...">
                                    
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Fasilitas Terbaik</h1>

                                        <p>Fasilitas lengkap dan terjaga</p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-padding">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Perpustakaan Bogor</h2>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <div class="d-block">
                                <img src="images/icons/hands.png" class="featured-block-image img-fluid" alt="">
                                
                                <p class="featured-block-text">Perbanyak <strong>Literasi</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <div class="d-block">
                                <img src="images/icons/heart.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Bersama Menjaga<strong> Bumi</strong> </p>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <div class="d-block">
                                <img src="images/icons/receive.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Buat<strong> Perubahan</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <div class="d-block">
                                <img src="images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">
                                
                                <p class="featured-block-text">Menjaga<strong> Fasilitas</strong></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        
        <section class="section-padding section-bg" id="section_2">
            <h1 class="text-center mb-2">Semua Buku</h1>
            <div class="container">
                <div class="row">
                    <div class="col-12 sm-8">
                <form action="" method="GET">
                    <select name="kategori" id="kategori" class="form-control">
                        <option value="#">Pilih Kategori</option>
                        @foreach ($kategoriList as $data)
                        <option value="{{ $data->id }}">{{ $data->kategori }}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="col-12 sm-8">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
                </div>
            </div>
        </form>
        
            <livewire:peminjam.buku></livewire:peminjam.buku>
        </section>


        

        

       

      
       

        <section class="testimonial-section section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="mb-lg-3">Happy customers</h2>

                        <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing
                                            kengan omeg kohm tokito charity theme</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Maria</span>,
                                            Boss</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor
                                            mauris quis metus tempor orci</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Thomas</span>,
                                            Partner</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing
                                            kengan omeg kohm tokito charity theme</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Jane</span>,
                                            Advisor</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor
                                            mauris quis metus tempor orci</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Bob</span>,
                                            Entreprenuer</small>
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                        <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                        <img src="images/avatar/portrait-young-redhead-bearded-male.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                        <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                        <img src="images/avatar/studio-portrait-emotional-happy-funny.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


      
    </main>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © 2036 <a href="#">Kind Heart</a> Charity Org.
                            Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a><br>Distribution:
                            <a href="https://themewagon.com">ThemeWagon</a>
                        </p>
                    </div>

                

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('/') }}js/jquery.min.js"></script>
    <script src="{{ asset('/') }}js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}js/jquery.sticky.js"></script>
    <script src="{{ asset('/') }}js/click-scroll.js"></script>
    <script src="{{ asset('/') }}js/counter.js"></script>
    <script src="{{ asset('/') }}js/custom.js"></script>

</body>

</html>