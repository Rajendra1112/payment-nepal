<!-- HEADER -->
<?php include("./includes/header.php"); ?>
<section class="cup-contact-section">
    <div class="container pt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item" aria-current="page">CONTACT US<i class="ri-arrow-right-s-line"></i>
                </li>
            </ol>
        </nav>
        <div class="row contact-row-1">
            <div class=" col-md-6 contact-text">
                <p class="section-heading text-center">Connect with us<span class="mt-2">We loved to hear
                        form
                        you</span>
                    <span class="social-media mt-2">
                        <a href="#"><i class="ri-facebook-circle-fill"></i></a>
                        <a href="#"><i class="ri-mail-fill"></i></a>
                        <a href="#"><i class="ri-twitter-x-fill"></i></a>
                    </span>
                </p>
            </div>
            <div class="col-md-6 contact-image">
                <figure><img src="./images/contact-image.png" alt=""></figure>
            </div>
        </div>
        <h1 class="section-title">Contact</h1>
        <div class="row contact-row-2 mt-3">
            <div class="col-lg-4 col-md-6 contact-detail text-center">
                <i class="ri-map-pin-2-fill"></i>
                <p class="mt-3">VISIT US</p>
                <span>Head office: Banasthali, Kathmandu</span>
                <span>Corporate Office: Baluwatar, Kathmandu</span>
            </div>

            <div class="col-lg-4 col-md-6 contact-detail text-center">
                <i class="ri-phone-fill"></i>
                <p class="mt-3">CALL US</p>
                <span>Toll free: 000000000</span>
                <span>Phone: 013432435 / 01 12345677</span>
            </div>

            <div class="col-lg-4 col-md-6 contact-detail text-center">
                <i class="ri-mail-fill"></i>
                <p class="mt-3">MESSAGE US</p>
                <span>info@example.com</span>
            </div>
        </div>
        <div class="map mt-5"><iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3532.4608059877987!2d85.33276412546724!3d27.70305527618506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199f75f08da5%3A0x641a4463533be28c!2sUltrabyte%20International%20Pvt.%20Ltd!5e0!3m2!1sen!2snp!4v1691653267907!5m2!1sen!2snp"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <h2 class="section-heading mt-5">Write to us</h2>
        <div class="row contact-row-3 mt-3 mb-5 px-3">
            <figure class="col-lg-6">
                <img src="./images/modern-communication.png" alt="">
            </figure>
            <form class="col-lg-6">
                <div class="mb-4">
                    <label for="name" class="form-label"><i class="ri-user-3-fill me-2"></i>Name:</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="mb-4">
                    <label for="address" class="form-label"><i class="ri-map-pin-2-fill me-2"></i>Address:</label>
                    <input type="text" class="form-control" id="address">
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label"><i class="ri-mail-fill me-2"></i>Email</label>
                    <input type="email" class="form-control" id="email">
                </div>

                <div class="mb-4">
                    <label for="contact" class="form-label"><i class="ri-smartphone-fill me-2"></i>Contact no.</label>
                    <input type="tel" class="form-control" id="contact">
                </div>

                <div class="mb-5">
                    <label for="message" class="form-label"><i class="ri-message-2-fill me-2"></i>Write a
                        message</label>
                    <textarea class="form-control" id="message" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn"><i class="ri-send-plane-fill me-2"></i>Send
                    Message</button>
            </form>
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php include("./includes/footer.php"); ?>