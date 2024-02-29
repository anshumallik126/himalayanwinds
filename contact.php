<?php
$pageTitle = "Contact Us";
$pageName = 'contact';
?>

<?php include 'includes/header.php'?>
<?php include 'includes/breadcrumbs.php'?>
<section class="contact-section contact-map pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="section_heading text-center mb-5">
                    <span class="title-bg-style white-bg-before">Get In Touch</span>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-5 my-auto order-2 order-md-2 order-lg-1 contact-info-section">
                <div class="info-inner h-100">
                    <div class="text">
                        <h2 class="mb-2 text-primary f-25">
                            Contact Info
                        </h2>
                    </div>
                    <ul class="info-list clearfix">
                        <li>
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <h4>Address</h4>
                            <p>7927 Belair Road. Nottingham, <br>MD 21236
                            </p>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                            <h4>General Queries</h4>
                            <p><a href="tel:090-6551-6181">090-6551-6181</a>
                                <br>
                                <a href="mailto:saveculture1@yahoo.co.jp">saveculture1@yahoo.co.jp</a>
                            </p>
                        </li>
                        <li>
                            <div class="icon"><i class="far fa-clock"></i></div>
                            <h4>Opening Hours</h4>
                            <p class="text-dark mb-0">Sun - Thurs:
                                <span class="text-primary">12 PM - 10 PM</span>
                            </p>
                            <p class="text-dark mb-0">Fri- Sat:
                                <span class="text-primary">12 PM - 11 PM</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7  mb-30-sm col-md-12 order-1 order-md-1 order-lg-2">
                <div class="contact-form h-100">
                    <div class="content-title style2 mb-15">
                        <div class="section_heading mb-4">
                            <h4 class="mb-3 text-primary f-25 font-weight-bold"> Get In Touch</h4>
                        </div>
                    </div>
                    <div class="mt-3 contact-map">
                        <form class="ui form cs-validation" action="">
                            <div class="row">
                                <div class="form-group field col-md-12">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name *">
                                </div>
                                <div class="form-group field col-md-6">
                                    <input name="email" type="email" class="form-control" placeholder="Your Email *">
                                </div>
                                <div class="form-group field col-md-6">
                                    <input name="phone" type=" text" class="form-control" placeholder="Your Phone *">
                                </div>
                                <div class="form-group field col-md-12">
                                    <textarea rows="5" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="btn-wrapper px-4 text-center">
                                <button type="button" class="submit mt-3 btn theme-btn text-uppercase"><i
                                        class="fa fa-spinner fa-spin mr-2"></i> Send Message</button>
                            </div>
                            <div class="response-text text-center mt-3">
                                <span class="success-msg text-success d-block d-md-inline mt-2 mt-md-0">Your
                                    message has
                                    been sent successfully !</span>
                                <span class="err-msg text-danger d-block d-md-inline mt-2 mt-md-0 hidden">Sending
                                    has
                                    been
                                    failed !</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="section-gap reveal">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 col-lg-12 my-auto order-2 order-md-2 order-lg-12 mt-md-device">
                <div class="place-holder-img">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.27776837735!2d85.28493285665482!3d27.709030242049256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1708784386604!5m2!1sen!2snp"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/script.php'?>
<?php include 'includes/footer.php'?>