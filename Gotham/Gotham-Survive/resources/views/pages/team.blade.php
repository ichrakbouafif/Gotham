<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Builderz - Construction Company Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <link href="{{ asset('assets/img/favicon.ico') }}"  rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/lib/flaticon/font/flaticon.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/slick/slick-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/slick/slick-theme.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">

                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Opening Hour</h3>
                                            <p>24H/24 7D/7 </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>+216 21 xxx xxx</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p>info@example.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.html" class="nav-item nav-link">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Service</a>
                                <a href="team.html" class="nav-item nav-link active">Team</a>
                                <a href="profile.html" class="nav-item nav-link">Profile</a>

                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="#">LogIn</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Our Team</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Our Team</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


  <!-- Team Start -->
  <div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Our teams</p>
            <h2>Meet Our Savers</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img  src="{{ asset('assets/img/S1.jpg') }}"alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Civil Protection <br>Team </h2>
                        <p>198</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fas fa-phone"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/S2.jpg') }}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Tunisian Red Crescent</h2>
                        <p>71 560 184 </p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fas fa-phone"></i></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/S4.jpg') }}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Environmental policing</h2>
                        <p>71 344 171</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-phone"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/S3.jpg') }}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Forest firefighting team</h2>
                        <p>71 190 100</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/S5.jpg') }}"alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2> National Guard ground units</h2>
                        <p>193</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-phone"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/S6.jpg') }}"alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>National Guard naval units</h2>
                        <p>194</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-phone"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/S7.jpg') }}"alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Medical <br>ambulance</h2>
                        <p>190</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-phone"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/S8.avif') }}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Rescue<br> police</h2>
                        <p>197</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-phone"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
<!-- Team End -->

           
             <!-- Footer Start -->
             <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Pont Sud du Lac, R54Q+PM6, lac 0 de, Tunis</p>
                                <p><i class="fa fa-phone-alt"></i>+216 21 xxx xxx</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="service.html">Train</a>
                                <a href="service.html">Educate</a>
                                <a href="service.html">Volunteer</a>
                                <a href="service.html">Donate</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="about.html">About Us</a>
                                <a href="contact.html">Contact Us</a>
                                <a href="team.html">Our Team</a>
                              
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">Survive</a>, All Right Reserved.</p>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/slick/slick.min.js') }}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
