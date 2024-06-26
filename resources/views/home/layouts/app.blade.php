
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset("public-assets/lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset("public-assets/css/style.css") }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="{{ url('/faq') }}">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="{{ url('/help') }}">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="{{ url('/support') }}">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="www.facebook.com">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="www.twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="www.linkedin.com">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="www.instagram.com">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="www.youtube.com">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="{{ url('/') }}" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="{{ url('/search') }}" method="get">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                               <button type="submit"><i class="fa fa-search"></i></button> 
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="{{ route('wishlistshow') }}" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    
                    <span class="badge">@isset($wlistcount)
                        {{ $wlistcount }}
                    @endisset</span>
                </a>
                <a href="{{ route('cartshow') }}" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                

                    
                    <span class="badge">@isset($cartcount)
                        {{ $cartcount }}
                    @endisset</span>
                    
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

@yield('navbar')

@yield('topnavbar')
@yield('section')



    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p> Learn more about our store, including our customer care, gift cards, and careers.<br>
                    Access our customer service resources, including our FAQ, return policy, and shipping information.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>eshopper@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="{{ url('/') }}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="{{ url('/faq') }}"><i class="fa fa-angle-right mr-2"></i>Frequently Asked Questions</a>
                            <a class="text-dark mb-2" href="{{ route('showorder') }}"><i class="fa fa-angle-right mr-2"></i>Order Detail</a>
                            <a class="text-dark mb-2" href="{{ route('cartshow') }}"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="{{ url('/support') }}"><i class="fa fa-angle-right mr-2"></i>Support</a>
                            <a class="text-dark" href="{{ route('home.contact') }}"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Follow US ON</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="www.instagram.com"><i class="fa fa-angle-right mr-2"></i>Instagram</a>
                            <a class="text-dark mb-2" href="www.facebook.com"><i class="fa fa-angle-right mr-2"></i>Facebook</a>
                            <a class="text-dark mb-2" href="www.twitter.com"><i class="fa fa-angle-right mr-2"></i>Twitter</a>
                            <a class="text-dark mb-2" href="www.twitter.com"><i class="fa fa-angle-right mr-2"></i>LinkedIn</a>
                            <a class="text-dark mb-2" href="www.youtube.com"><i class="fa fa-angle-right mr-2"></i>YouTube</a>
                            
                        </div>
                    </div>


                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">E-Shopper</a>. All Rights Reserved.
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset("public-assets/lib/easing/easing.min.js") }}"></script>
    <script src="{{ asset("public-assets/lib/owlcarousel/owl.carousel.min.js") }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset("public-assets/mail/jqBootstrapValidation.min.js") }}"></script>
    <script src="{{ asset("public-assets/mail/contact.js") }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset("public-assets/js/main.js") }}"></script>
</body>

</html>
