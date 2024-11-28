<html>
    <head>
        <?php include './includes/header.php'?>
    </head>
    <body class="">
       
        <!-- Start Navbar  -->
        <?php include './includes/nav.php'?>
        <!-- End Navbar -->

        <!-- Start Banner -->
        <section class="banner py-5 position-relative">
            <div class="shape-1 ms-lg-5 position-absolute top-50 start-0 translate-middle-y" data-aos="fade-right">
                <img src="img/svg/shape_1.png" alt="img" data-aos="zoom-in">
            </div>
            <div class="shape-2 me-lg-5 position-absolute top-50 end-0 translate-middle-y" data-aos="fade-left">
                <img src="img/svg/shape_5.png" alt="img" data-aos="zoom-in">
            </div>
            <div class="container position-absolute top-50 start-50 translate-middle">
                <div class="d-flex justify-content-center align-items-center gap-2">
                    <img src="img/svg/shape_1.png" class="d-md-none" alt="img" data-aos="zoom-in" style="height: 70px; width: auto;">
                    <img src="img/svg/shape_5.png" class="d-md-none" alt="img" data-aos="zoom-in" style="height: 70px; width: auto;">
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="text-center col-md-9 col-lg-8">
                        <div class="d-flex justify-content-center align-items-center typed-text-container">
                            <h1 class="banner-header display-1 my-3 px-1">The best place to get your <span id="typed-text"></span></h1>
                        </div>
                        <p class="mb-3 px-3">Discover top-quality services across Travel & Tours, Estate Management, and Automobile solutions. We provide everything you need in one place, ensuring convenience and satisfaction.</p>
                        <a href="#" class="btn btn-accent px-5 py-3" data-aos="flip-up">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner -->


        <!-- Start Division Section -->
        <?php include './includes/division.php'?>
        <!-- End Division Section -->

        <!-- Our services -->
        <section class="services">
            <div class="col-12 text-center mb-5 px-3 ">
                <h2 class="title mb-3" data-aos="fade-down" data-aos-delay="100">Our Services</h2>
                <p class="col-md-9 mx-auto" data-aos="fade-down" data-aos-delay="200">At Kunbis Unique Ventures, we offer a diverse range of services tailored to meet the needs of our clients. With over 15 years of experience in the industry, our expertise spans across various sectors, ensuring you receive the best service possible.</p>
            </div>
            
            <div class="swiper mySwiper" data-aos="zoom-in" data-aos-delay="300">
                
                <div class="swiper-wrapper" style="height: auto;">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/visa.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">VISA APPLICATIONS</h5>
                              <p class="card-text my-2">We help with your visa applications for a smooth travel experience.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/flight.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">FLIGHT RESERVATION</h5>
                              <p class="card-text my-2">Book your flights effortlessly with our flight reservation services.</p>
                              <a href="/travel/flight-itinerary.html" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/hotel.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">HOTEL RESERVATION</h5>
                              <p class="card-text my-2">We help you find the best hotel deals and make reservations.</p>
                              <a href="/travel/hotel-reservation.html" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/realestate.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">REAL ESTATE MANAGEMENT</h5>
                              <p class="card-text my-2">Comprehensive management services for your real estate needs.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/tour.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">TOUR PACKAGE</h5>
                              <p class="card-text my-2">Explore new places with our customized tour packages.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/insurance.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">TRAVEL INSURANCE</h5>
                              <p class="card-text my-2">Protect your travels with our travel insurance packages.</p>
                              <a href="/travel/travel-insurance.html" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/land.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">LAND SALES</h5>
                              <p class="card-text my-2">We facilitate land sales and ensure a smooth transaction.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/passport.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">PASSPORT APPLICATION</h5>
                              <p class="card-text my-2">Get assistance with your passport applications to travel hassle-free.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/funds.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">PROOF OF FUNDS</h5>
                              <p class="card-text my-2">We assist in providing proof of funds for your travel and residency needs.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/documents.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">SUPPORTING DOCUMENT</h5>
                              <p class="card-text my-2">We provide assistance in obtaining necessary supporting documents.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/local-used-car.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">LOCAL USED CAR SALES</h5>
                              <p class="card-text my-2">Find affordable local used cars in great condition to suit your budget.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/imported-used-car.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">IMPORTED USED CAR SALES</h5>
                              <p class="card-text my-2">Get the best deals on imported used cars with top-notch quality and performance.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>


                </div>
                
            </div>

           

        </section>
        <!-- End our services -->


        <!-- WHY Kunbis Unique Venture -->
        <section class="why">
            <div class="container px-3 px-md-0">
                <div class="col-12 text-center">
                    <h2 class="title mb-5" data-aos="fade-down" data-aos-delay="100">Why choose Kunbis Unique Venture?</h2>
                </div>

                <div class="row mt-4 mt-md-5 row-cols row-cols-md-2 row-cols-lg-3 row-gap-4">
                    <!-- Card 1 -->
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fa fa-plane" data-aos="zoom-in" data-aos-delay="300"></i>
                                <p class="card-title mb-2" data-aos="fade-up" data-aos-delay="400">Expert Travel Packages</p>
                                <p data-aos="fade-up" data-aos-delay="500">Enjoy customized travel packages with seamless bookings, luxury accommodations, and exclusive tours that cater to your needs.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fa fa-home" data-aos="zoom-in" data-aos-delay="400"></i>
                                <p class="card-title mb-2" data-aos="fade-up" data-aos-delay="500">Real Estate Services</p>
                                <p data-aos="fade-up" data-aos-delay="600">Discover prime properties and professional estate management with tailored solutions for buying, renting, or investment opportunities.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="400">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fa fa-car" data-aos="zoom-in" data-aos-delay="500"></i>
                                <p class="card-title mb-2" data-aos="fade-up" data-aos-delay="600">Reliable Automobile Solutions</p>
                                <p data-aos="fade-up" data-aos-delay="700">Access quality car sales, rentals, and maintenance services to ensure your vehicle needs are met with trust and expertise.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fa fa-globe" data-aos="zoom-in" data-aos-delay="600"></i>
                                <p class="card-title mb-2" data-aos="fade-up" data-aos-delay="700">Global Reach</p>
                                <p data-aos="fade-up" data-aos-delay="800">With a presence in multiple regions, we offer services that cater to both local and international clients across all our sectors.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="600">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fa fa-star" data-aos="zoom-in" data-aos-delay="700"></i>
                                <p class="card-title mb-2" data-aos="fade-up" data-aos-delay="800">Customer-Centric Approach</p>
                                <p data-aos="fade-up" data-aos-delay="900">We prioritize customer satisfaction with personalized support, tailored solutions, and a commitment to meeting your needs.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="700">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fa fa-calendar-check" data-aos="zoom-in" data-aos-delay="800"></i>
                                <p class="card-title mb-2" data-aos="fade-up" data-aos-delay="900">Tailored Guidance</p>
                                <p data-aos="fade-up" data-aos-delay="1000">Receive expert advice and support from our dedicated team to help you make informed decisions in travel, real estate, and automobile services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- WHY Kunbis Unique Venture ends -->

        <!-- Start About us -->
        <section class="company section" id="about">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Section Title -->
                    <div class="col-12 text-center">
                        <h2 class="title mb-5" data-aos="fade-down" data-aos-delay="100">Our History</h2>
                    </div>

                    <!-- Content Section -->
                    <div class="col-lg-6 px-3">
                        <div class="content" data-aos="fade-right" data-aos-delay="200">

                            <p class="mb-3" data-aos="fade-up" data-aos-delay="400">
                                With over 15 years of experience, Kunbis Unique Ventures has been delivering outstanding
                                services in Travel and Tours, Estate Management, and Automobile. Our dedication goes beyond just meeting industry standards; we aim to elevate your business and lifestyle through tailored solutions.
                            </p>

                            <ul class="list-unstyled ms-2">
                                <li data-aos="fade-up" data-aos-delay="500">Registered with the Nigerian government and committed to quality service.</li>
                                <li data-aos="fade-up" data-aos-delay="600">A long-standing reputation built over 15+ years in business.</li>
                                <li data-aos="fade-up" data-aos-delay="700">Professional expertise across our subdivisions: Travel & Tours, Estate Management, and Automobile.</li>
                                <li data-aos="fade-up" data-aos-delay="800">We offer free initial consultation and personalized support to meet your unique needs.</li>
                                <li data-aos="fade-up" data-aos-delay="900">Our services are trusted by some of the most successful businesses and clients.</li>
                                <li data-aos="fade-up" data-aos-delay="1000">A dedicated team of professionals committed to driving growth and delivering results.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Image Section -->
                    <div class="col-lg-6">
                        <div class="img d-flex position-relative">
                            <div class="imgone" data-aos="fade-down" data-aos-delay="600">
                                <div class="simpleParallax" style="overflow: hidden;">
                                    <img class="thumparallax-down" src="img/about-two-img-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="imgtwo" data-aos="fade-up" data-aos-delay="800">
                                <div class="simpleParallax" style="overflow: hidden;">
                                    <img class="thumparallax" src="img/about-two-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About us -->
        
        
        <!-- Start FAQ -->
        <?php include './includes/faq.php'?>
        <!-- Ends FAQ -->

        <!-- Start Our Staff -->        
        <?php include './includes/team.php'?>
        <!-- End Our Staff -->

        
        <!-- Start Contact us -->
        <section class="contact overflow-hidden" data-aos="fade-up">
            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <div class="p-lg-0">
                            <div class="title-area pe-xl-5">
                                <span class="sub-title text-white" data-aos="fade-down">Get in touch</span>
                                <h2 class="sec-title text-white display-4 my-2" data-aos="fade-up">Say hello to us</h2>
                                <p class="contact-text text-white" data-aos="fade-up" data-aos-delay="100">We’d love to hear from you. Our friendly team is always here to chat.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-form-area p-4 py-5" data-aos="fade-left">
                            <?php include './includes/contact-form.php'?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact us -->

        <!-- Start Newsletter Section -->
        <?php include './includes/newsletter.php'?>
        <!-- End Newsletter Section -->

        <!-- Start Footer Section -->
        <?php include './includes/footer.php'?>
        <!-- End Footer Section -->
       

        <!-- Include Typed.js script -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
         <script>
            var typed = new Typed("#typed-text", {
              strings: [
                "affordable travel packages.",
                "luxury vacation deals.",
                "tailored tour experiences.",
                "prime property listings.",
                "quality car sales.",
                "trusted automobile solutions."
              ],
              typeSpeed: 50,
              backSpeed: 30,
              loop: true
            });
        </script>
          
    </body>
</html>