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
        <?php include './includes/about.php'?>  
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