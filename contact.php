<html>
    <head>
        <?php
            $pageTitle = "Kunbis - Contact Us";
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

         <!--Contact Page Start-->
        <section class="contact-page">
            <div class="px-md-5">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-page__left">
                            <ul class="contact-page__list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Any Questions? Call us</span>
                                        <p><a href="tel:+2348034007778">+234 803 400 7778</a></p>
                                        <p><a href="tel:+2348102827281">+234 810 282 7281</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <span>Any Questions? Email us</span>
                                        <p><a href="mailto:info@kunbisunique.com">info@kunbisunique.com</a></p>
                                        <p><a href="mailto:support@kunbisunique.com">support@kunbisunique.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <span>Office Address</span>
                                        <p>Suite 35, Mojoyinola House, Caterpillar Bus Stop, Monatan, Ibadan</p>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="contact-page__ratting-title">Customer Ratings</h3>
                            <div class="contact-page__ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="contact-page__rate">4.8 / 5.0</h3>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="contact-page__right">

                            <div class="contact-title">
                                <span class="contact_tagline">Need Any Help?</span>
                                <h2 class="contact_title">Get in Touch With Us</h2>
                            </div>

                            <div class="contact-form-area p-0 " data-aos="fade-left">
                                <?php include './includes/contact-form.php'?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Google Map Start-->
        <section class="google-map-two">
            <div class="section-shape-1" style="background-image: url(assets/images/shapes/section-shape-1.html);"></div>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.5616138947292!2d3.9514351493720254!3d7.410569259585813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10399328b23fffff%3A0xc1755a835cc9421f!2sMojoyinola%20House!5e0!3m2!1sen!2sng!4v1730781305330!5m2!1sen!2sng" 
                class="google-map__two" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!--Google Map End-->


        <!-- Start Newsletter Section -->
        <?php include './includes/newsletter.php'?>
        <!-- End Newsletter Section -->

        <!-- Start Footer Section -->
        <?php include './includes/footer.php'?>
        <!-- End Footer Section -->     
          
    </body>
</html>