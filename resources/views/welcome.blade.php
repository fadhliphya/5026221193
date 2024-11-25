<!--
Nama       : Maureen Ghassani Fadhliphya
NRP        : 5026221193
Template   : https://themewagon.github.io/restoran/
Situs Asli : https://justusku.co.id/
!-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Justus - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon" type="image/x-icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ url('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">Our Brands</a>
                        <a href="/service" class="nav-item nav-link">News</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="/booking" class="dropdown-item">Book a Table</a>
                                <a href="/testimonial" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                    </div>
                    <a href="/booking" class="btn btn-primary py-2 px-4">Book a Table</a>
                    \
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">ELEVATING CULINARY<br>EXPERIENCES<br><span class="text-primary">SINCE 2005</span></h1>
                            <a href="/booking" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book a Table</a>
                            <a href="/tugas" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Go to Tugas</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Brand Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="display-5">LOOK OUT FOR <span class="text-primary">OUR BRANDS</span></h2>
        </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <img src="img/tempayan-bistro-image.jpg" alt="Tempayan Indonesian Bistro" class="img-fluid">
                    <div class="p-4">
                        <h5>Tempayan Indonesian Bistro</h5>
                        <a href="https://justusku.co.id/brands/22" class="btn btn-primary mt-2">See More</a>
                    </div>
                </div>
            </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                    <img src= "img/justus-steakhouse-image.jpg" alt="Justus Steak House" class="img-fluid">
                    <div class="p-4">
                        <h5>Justus Steak House Menu</h5>
                        <a href="https://justusku.co.id/brands/21" class="btn btn-primary mt-2">See More</a>
                                        </div>
                                    </div>
                                </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <img src="img/hawker-sei-image.jpg" alt="Hawker Sei" class="img-fluid">
                            <div class="p-4">
                                <h5>Hawker Sei Ragam Rasa Indonesia</h5>
                                <a href="https://justusku.co.id/brands/20" class="btn btn-primary mt-2">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <img src="img/justus-burger-image.jpg"alt="Justus Burger and Steak" class="img-fluid">
                            <div class="p-4">
                                <h5>Justus Burger and Steak</h5>
                                <a href="https://justusku.co.id/brands/19" class="btn btn-primary mt-2">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Description Section -->
        <div class="mt-5 text-center">
            <p>
                <strong>Justus Group</strong> is home to several restaurant brands, each offering the finest quality and specially curated dishes. From burgers and steaks to authentic Indonesian cuisine rich in distinctive flavors and a blend of traditional spices, Justus Group ensures an exceptional dining experience for all tastes.
            </p>
        </div>
            </div>
        </div>
        <!-- Service End -->


       <!-- Special Offer Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Promo Section -->
            <div class="col-lg-12">
                <h2 class="text-center mb-4">Special <span class="text-primary">Offer For You</span></h2>
                <div class="row g-4">
                    <!-- Offer Card 1 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="promo-item rounded pt-3">
                            <div class="promo-img-container">
                                <img class="img-fluid rounded w-100 promo-img" src="img/promo1-image.jpg" alt="Lunch Promo" onclick="openModal(this)">
                            </div>
                            <div class="p-4">
                                <h5>Lunch Promo</h5>
                                <p>Discount 20%</p>
                                <p>Periode: Weekday Only</p>
                            </div>
                        </div>
                    </div>
                    <!-- Offer Card 2 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="promo-item rounded pt-3">
                            <div class="promo-img-container">
                                <img class="img-fluid rounded w-100 promo-img" src="img/promo2-image.jpg" alt="Promo Makan Hemat" onclick="openModal(this)">
                            </div>
                            <div class="p-4">
                                <h5>Promo Makan Hemat</h5>
                                <p>Discount 20%</p>
                                <p>Periode: Weekday Only</p>
                            </div>
                        </div>
                    </div>
                    <!-- Offer Card 3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="promo-item rounded pt-3">
                            <div class="promo-img-container">
                                <img class="img-fluid rounded w-100 promo-img" src="img/promo3-image.jpg" alt="Paket Mager" onclick="openModal(this)">
                            </div>
                            <div class="p-4">
                                <h5>Paket Mager</h5>
                                <p>Gratis Ongkir Radius 2KM</p>
                                <p>Periode: All Day</p>
                            </div>
                        </div>
                    </div>
                    <!-- Offer Card 4 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="promo-item rounded pt-3">
                            <div class="promo-img-container">
                                <img class="img-fluid rounded w-100 promo-img" src="img/promo4-image.jpg" alt="Membership Lunch Promo" onclick="openModal(this)">
                            </div>
                            <div class="p-4">
                                <h5>Membership Lunch Promo</h5>
                                <p>Discount 20%</p>
                                <p>Periode: Weekday Only</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Special Offer Section End -->

<!-- Modal for Enlarging Images -->
<div id="promoModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImg">
    <div id="caption"></div>
</div>

        <!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <!-- First Image with hover effect and text -->
                    <div class="col-6 text-start">
                        <a href="https://justusku.co.id/page-news/13" class="image-link">
                            <img class="img-fluid rounded w-100 wow zoomIn hover-grow" data-wow-delay="0.1s" src="img/foto-igun.jpg" alt="Image 1">
                        </a>
                        <p class="image-caption text-center">24 April 2024</p>
                    </div>
                    <!-- Second Image with hover effect and text -->
                    <div class="col-6 text-start">
                        <a href="https://justusku.co.id/page-news/12" class="image-link">
                            <img class="img-fluid rounded w-75 wow zoomIn hover-grow" data-wow-delay="0.3s" src="img/justus-resto.jpeg" style="margin-top: 25%;" alt="Image 2">
                        </a>
                        <p class="image-caption text-center">1 Juni 2024</p>
                    </div>
                    <!-- Third Image with hover effect and text -->
                    <div class="col-6 text-end">
                        <a href="https://justusku.co.id/page-news/11" class="image-link">
                            <img class="img-fluid rounded w-75 wow zoomIn hover-grow" data-wow-delay="0.5s" src="img/foto-steak.jpg" alt="Image 3">
                        </a>
                        <p class="image-caption text-center">8 Juni 2024</p>
                    </div>
                    <!-- Fourth Image with hover effect and text -->
                    <div class="col-6 text-end">
                        <a href="https://justusku.co.id/page-news/10" class="image-link">
                            <img class="img-fluid rounded w-100 wow zoomIn hover-grow" data-wow-delay="0.7s" src="img/foto-anniv.jpg" alt="Image 4">
                        </a>
                        <p class="image-caption text-center">3 Juli 2024</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">News</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>JUSTUS</h1>
                <p class="mb-4">Justus Group is a restaurant industry company founded in 2005 headquartered in Bandung, Indonesia. With a strong commitment to quality and innovation, Justus Group, managed under the auspices of PT. Yuditama Mandiri, boasts 5 main brands: Justus Steak House, Asian Grill Express, Justus Burger & Steak, Hawker Ragam Masakan Indonesia, and Tempayan Indonesian Bistro.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">19</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="/service">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/lebSUwPAIGU" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                <h1 class="text-white mb-4">Book A Table Online</h1>
                <form id="reservationForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                <label for="datetime">Date & Time</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="select1">
                                    <option value="">Select People</option>
                                    <option value="1">People 1</option>
                                    <option value="2">People 2</option>
                                    <option value="3">People 3</option>
                                </select>
                                <label for="select1">No Of People</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                <label for="message">Special Request</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reservation End -->

<!-- JavaScript for Image Modal -->
<script>
    function openModal(element) {
        var modal = document.getElementById("promoModal");
        var modalImg = document.getElementById("modalImg");
        var captionText = document.getElementById("caption");

        modal.style.display = "block";
        modalImg.src = element.src;
        captionText.innerHTML = element.alt;
    }

    function closeModal() {
        var modal = document.getElementById("promoModal");
        modal.style.display = "none";
    }
</script>

<script>
    document.getElementById("reservationForm").onsubmit = function(event) {
        event.preventDefault(); // Mencegah form dari submit secara default

        // Mendapatkan nilai input
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var datetime = document.getElementById("datetime").value;
        var people = document.getElementById("select1").value;

        // Validasi apakah semua input telah diisi
        if (name === "" || email === "" || datetime === "" || people === "") {
            alert("Please fill the data!");
        } else {
            alert("Your reservation has been made, please wait for further notice");
        }
    };
</script>


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Customer Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>One of the best Justus steakhouse in Bandung. Nice place good ambience.The food was good, I chose australian 250gr grain fed. It's nice. The restaurant almost always full when dinner time. Parking lot not so much, you can valet your car. For the menu price, it was so various from 50k idr per item to hundreds k. Service was nice, friendly and fast response.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/photo_head.png" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Fakrhul Arifin</h5>
                                <small>Local Guide</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>They were used to small stall in mall, but now here they’re, one of the best steak house in Bandung.
                            This place is sure big, very big. The staffs are helpful and service is swift.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/photo_head.png" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Natio Jiwa Ksatria</h5>
                                <small>Local Guide</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>My first experience here was really good! The waiters are so kind and nice. The moment you stepped on the front door, they greet you warmly and assists you to your seat.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/photo_head.png" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Rininta Nariswari</h5>
                                <small>Local Guide</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>First time try Justus Steak House when I visit Bandung. We have lunch at Justus Dago. Place very big, good interior, there is outdoor too. Staffs have a good service and friendly. They can explain very well about the menu. We order steak and soup oxtail. Taste is good for both menu. Every detail food they well prepare. Dessert we choose Creme Brûlée, quite big portion we sharing</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/photo_head.png" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Juliwaty Gunawan</h5>
                                <small>Local Guide</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


         <!-- Footer Start -->
         <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="/about">About Us</a>
                        <a class="btn btn-link" href="/booking">Reservation</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Indonesia</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> (022) 20501994</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Sunday</h5>
                        <p>11AM - 10PM</p>


                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="https://justusku.co.id/">Justus Site</a>, All Right Reserved.

							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
