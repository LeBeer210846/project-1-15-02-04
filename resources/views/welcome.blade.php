<!DOCTYPE html>
<html lang="en">

<head>
    <title>RACEWEAR - Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('Frontend/assets/img/apple-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Frontend/assets/img/favicon white.png') }}">
   

    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/fontawesome.min.css') }}">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                <img src="{{ asset('Frontend/assets/img/logo.png' )}}" alt="RACEWEAR logo" height="40">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                       
                        
                        
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <!-- Banner 1 -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{ asset('Frontend/assets/img/banner_3.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success">RACEWEAR</h1>
                                <h3 class="h2">The matter of raw materials</h3>
                                <p>
                                    Screen paint is like spray paint on a car.
                                    Parrot paint for Benz cars, sports cars, Bee badge paint also spray taxis.
                                    RACEWEAR shop uses quality paint similar to parrot paint. But even more excellent, we use flamingo color.
                                    Our shirts are worn continuously, wash, do not crack, do not peel,
                                    the quality is equal to that of leading streetwear brands, shiny and durable.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner 2 -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{ asset('Frontend/assets/img/banner_4.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success">NEW RELEASE !</h1>
                                <h3 class="h2">Dragon V8 ver 1.1 Hoodie</h3>
                                <p>
                                    A new hoodie from <b>12 Chinese Zodiac</b> collection is out now with <b>limited amount of 8</b> only!
                                    So hurry up if you don't want to miss one of these dragon. And do not forget it's cocept, <b>don't take life serious, enjoy it.</b> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner 3 -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{ asset('Frontend/./assets/img/banner_5.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success">Best Seller !</h1>
                                <h3 class="h2">TOPSTAR | RW ORIGINAL</h3>
                                <p>
                                    An <b>OVERSIZE</b> shirt with <b>Discharge</b> screen paint has surprisingly reach over hundred customers!
                                    For those who loves <b>Cotton 100%</b> shirt, you better buy one before it's run out of stock!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Latest Collection -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">12 Chinese Zodiac</h1>
                <p>
                    A brand new collection released in this year 2023
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('Frontend/assets/img/LatestCollection_1.jpg') }}" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Rabbit</h5>
                <p class="text-center"><a class="btn btn-success">990 THB</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('Frontend/assets/img/LatestCollection_2.jpg') }}" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Dragon V8 ver 1</h2>
                <p class="text-center"><a class="btn btn-success">490 THB</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('Frontend/assets/img/LatestCollection_3.jpg') }}" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Dragon V8 ver 2</h2>
                <p class="text-center"><a class="btn btn-success">990 THB</a></p>
            </div>
        </div>
    </section>
    <!-- End Latest Collection -->


    <!-- Start Feature -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">RW ORIGINAL</h1>
                    <p>
                        The hottest product of those shirts that are not include in any collection
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="##">
                            <img src="{{ asset('Frontend/assets/img/feature_1.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">990 THB</li>
                            </ul>
                            <a href="##" class="h2 text-decoration-none text-dark">TOPSTAR</a>
                            <p class="card-text">
                                OVERSIZE M L XL <br> Discharged screen paint <br> Cotton 100% <br> Comb 32
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="##">
                            <img src="{{ asset('Frontend/assets/img/feature_2.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">490 THB</li>
                            </ul>
                            <a href="##" class="h2 text-decoration-none text-dark">The Conquest</a>
                            <p class="card-text">
                                L XL 2XL 3XL 4XL <br> Cotton 70/30 <br> Comb 30
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="##">
                            <img src="{{ asset('Frontend/assets/img/feature_3.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">790 THB</li>
                            </ul>
                            <a href="##" class="h2 text-decoration-none text-dark">The Conquest</a>
                            <p class="card-text">
                                M L XL 2XL 3XL 4XL 5XL <br> Cotton 100% <br> Comb 20
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">
                        <img src="assets/img/logo.png" alt="RACEWEAR logo" height="22">
                    </h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            23/12 Soi Nima, Moo 4,<br>
                            &emsp;&ensp;Tambon Lahan, Amphoe Bungbuathong,<br>
                            &emsp;&ensp;Nonthaburi 11110, Thailand
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:092-546-5464">092-546-5464</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:racewearbkkofficial@gmail.com">racewearbkkofficial@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Our Shirt Collection</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-muted text-decoration-none">RW ORIGINAL (N/A)</a></li>
                        <li><a class="text-muted text-decoration-none">12 Chinese Zodiac (N/A)</a></li>
                        <li><a class="text-muted text-decoration-none">J-MODE (N/A)</a></li>
                        <li><a class="text-muted text-decoration-none">90's Style (N/A)</a></li>
                        <li><a class="text-muted text-decoration-none">TUNE UP (N/A)</a></li>
                        <li><a class="text-decoration-none" href="shop.html">JDM</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Additional Information</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Dashboard</a></li>
                        <li><a class="text-decoration-none" href="about.html">About Us</a></li>
                        <li><a class="text-decoration-none" target="_blank" href="https://maps.app.goo.gl/x5WzUmvU8TvwadBe8">Shop Location</a></li>
                        <li><a class="text-muted text-decoration-none">Event (N/A)</a></li>
                        <li><a class="text-muted text-decoration-none">FAQs (N/A)</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a rel="nofollow" class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/RACEWEARCOMPANY"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/racewear.official"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.youtube.com/channel/UCPLP5qHuXyujDxArXfaVd8A"><i class="fab fa-youtube fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://line.me/ti/p/~@RACEWEAR"><i class="fab fa-line fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.tiktok.com/@bunggaracewear"><i class="fab fa-tiktok fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 RACEWEAR CO., LTD. 
                            | Designed by <a rel="sponsored" href="https://templatemo.com/page/1" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="{{ asset('Frontend/assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/templatemo.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/custom.js') }}"></script>
    <!-- End Script -->
</body>

</html>