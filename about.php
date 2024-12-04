<html>
    <head>
        <?php
            $pageTitle = "Kunbis - About Us";
            include './includes/header.php';
        ?>
        <style>
            .newsletter {
                background-color: rgba(var(--pColor-rgb), .20);
            }
        </style>
    </head>
    <body>
        
        <!-- Start Navbar  -->
        <?php include './includes/nav.php'?>
        <!-- End Navbar -->

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
                                    <img class="thumparallax-down" src="images/about-two-img-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="imgtwo" data-aos="fade-up" data-aos-delay="800">
                                <div class="simpleParallax" style="overflow: hidden;">
                                    <img class="thumparallax" src="images/about-two-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About us -->

        <!-- Start Division Section -->
        <?php include './includes/division.php'?>
        <!-- End Division Section -->

        <!-- Our services -->
        <section class="services">
            <div class="col-12 text-center mb-5 px-3 ">
                <h2 class="title mb-3" data-aos="fade-down" data-aos-delay="100">Our Services</h2>
                <p class="col-md-9 mx-auto" data-aos="fade-down" data-aos-delay="200">At Kunbis Unique Ventures, we offer a diverse range of services tailored to meet the needs of our clients. With over 15 years of experience in the industry, our expertise spans across various sectors, ensuring you receive the best service possible.</p>
            </div>
            
            <!-- Our services -->
            <?php include './includes/additional-service.php'?>
            <!-- End our services -->
        </section>
        <!-- End our services -->

        <!-- Start FAQ -->
        <?php include './includes/faq.php'?>
        <!-- Ends FAQ -->

        <!-- Start Our Staff -->        
        <?php include './includes/team.php'?>
        <!-- End Our Staff -->

        <!-- Start Newsletter Section -->
        <?php include './includes/newsletter.php'?>
        <!-- End Newsletter Section -->

        <!-- Start Footer Section -->
        <?php include './includes/footer.php'?>
        <!-- End Footer Section -->     
         
        <script>
             $(document).ready(function () {
                $(".categorySlider").each(function () {
                    const translationFactor = 0.1,  // Controls the vertical translation effect
                          rotationFactor = 0.01;    // Controls the rotation effect

                    // Initialize Swiper
                    new Swiper(".categorySlider", {
                        slidesPerView: 4,
                        spaceBetween: 60,
                        centeredSlides: true,
                        loop: true,
                        grabCursor: true,
                        // autoplay: {
                        //     delay: 3000,  // Adjust autoplay speed (milliseconds)
                        //     disableOnInteraction: false,  // Keep autoplay active after user interaction
                        // },
                        breakpoints: {
                            300: { slidesPerView: 1, spaceBetween: 20 },
                            600: { slidesPerView: 2, spaceBetween: 30 },
                            768: { slidesPerView: 3, spaceBetween: 30 },
                            1024: { slidesPerView: 4, spaceBetween: 40 },
                            1280: { slidesPerView: 4, spaceBetween: 60 },
                        },
                        pagination: {
                          el: ".swiper-pagination",
                        },
                    });

                    // Animation function to adjust translation and rotation
                    (function animateCards() {
                        requestAnimationFrame(animateCards);  // Recursive call for smooth animation

                        document.querySelectorAll(".single").forEach((element) => {
                            const rect = element.getBoundingClientRect(),
                                  centerOffset = 0.5 * window.innerWidth - (rect.x + 0.5 * rect.width),
                                  verticalShift = Math.max(Math.abs(centerOffset) * translationFactor - rect.width * translationFactor, 0),
                                  originPoint = centerOffset < 0 ? "left top" : "right top";

                            // Apply transform styles for translation and rotation
                            element.style.transform = `translate(0, ${verticalShift}px) rotate(${centerOffset * -rotationFactor}deg)`;
                            element.style.transformOrigin = originPoint;
                        });
                    })();
                });
            });


        </script>
    </body>
</html>