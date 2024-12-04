<form action="">
    <div class="row">
        <div class="text-start mb-3">
            <label for="fullName" class="form-label fw-bold" data-aos="fade-right">Full Name</label>
            <div class="position-relative">
                <input type="text" class="form-control ps-3" name="fullName" id="fullName" placeholder="Enter your full name" data-aos="fade-up" data-aos-delay="200">
                <img src="images/svg/user.svg" alt="" class="me-3 position-absolute top-50 end-0 translate-middle-y" data-aos="zoom-in" data-aos-delay="300">
            </div>
        </div>

        <div class="text-start mb-3">
            <label for="email" class="form-label fw-bold" data-aos="fade-right">Email address</label>
            <div class="position-relative">
                <input type="email" class="form-control ps-3" name="email" id="email" placeholder="Enter Email Address" data-aos="fade-up" data-aos-delay="200">
                <img src="images/svg/mail.svg" alt="" class="me-3 position-absolute top-50 end-0 translate-middle-y" data-aos="zoom-in" data-aos-delay="300">
            </div>
        </div>

        <div class="text-start mb-3">
            <label for="subject" class="form-label fw-bold" data-aos="fade-right">Your Subject</label>
            <div class="position-relative">
                <input type="text" class="form-control ps-3" name="subject" id="subject" placeholder="Enter a subject" data-aos="fade-up" data-aos-delay="200">
                <img src="images/svg/chat.svg" alt="" class="me-3 position-absolute top-50 end-0 translate-middle-y" data-aos="zoom-in" data-aos-delay="300">
            </div>
        </div>

        <div class="text-start mb-3">
            <label for="message" class="form-label fw-bold" data-aos="fade-right">Your Message</label>
            <div class="position-relative">
                <textarea name="message" id="message" rows="5" placeholder="Your Message" class="form-control" data-aos="fade-up" data-aos-delay="200"></textarea>
                <img src="images/svg/chat.svg" alt="" class="me-3 mt-3 position-absolute top-0 end-0" data-aos="zoom-in" data-aos-delay="300">
            </div>
        </div>

        <div class="form-btn mt-3" data-aos="fade-up" data-aos-delay="400">
            <button type="submit" class="btn btn-accent px-5 p-3">
                Send Message 
                <div class="d-inline-block">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0477 3.05293C18.8697 0.707361 2.48648 6.4532 2.50001 8.551C2.51535 10.9299 8.89809 11.6617 10.6672 12.1581C11.7311 12.4565 12.016 12.7625 12.2613 13.8781C13.3723 18.9305 13.9301 21.4435 15.2014 21.4996C17.2278 21.5892 23.1733 5.342 21.0477 3.05293Z" stroke="white" stroke-width="1.5"/>
                        <path d="M11.5 12.5L15 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </button>
        </div>
</form>