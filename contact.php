<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Get in touch with Africa Technical Training College (ATTC), Eldoret. Visit us, call, or send a message — plus answers to common questions.">
    <title>Contact Us | ATTC Eldoret</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Page-specific stylesheet: contact-card grid, map frame and FAQ
         accordion only exist on this page, so they're kept out of style.css -->
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="icon" href="assets/images/attc-logo.png">

</head>

<body>

<?php include 'includes/navbar.php'; ?>

<!-- =========================================================
     PAGE BANNER
========================================================== -->

<section class="page-banner">

    <div class="container">

        <p class="page-breadcrumb">
            <a href="index.php">Home</a>
            <i class="bi bi-chevron-right"></i>
            <span>Contact</span>
        </p>

        <h1>Get In Touch</h1>

        <p class="page-banner-lede">
            Questions about a program, fees, or the application process?
            Send us a message or reach out directly — our team typically
            replies within one business day.
        </p>

    </div>

</section>


<!-- =========================================================
     QUICK CONTACT CARDS
========================================================== -->

<section class="contact-cards-section">

    <div class="container">

        <div class="row g-4">

            <div class="col-sm-6 col-lg-3" data-aos="fade-up">
                <div class="contact-info-card">
                    <div class="cic-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <h4>Visit Us</h4>
                    <p>Sirgoi Building, 3rd/4th Floor,<br>Eldoret, Kenya</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info-card">
                    <div class="cic-icon"><i class="bi bi-telephone-fill"></i></div>
                    <h4>Call Us</h4>
                    <p><a href="tel:+254725833869">0725 833 869</a><br>
                       <a href="tel:+254722384167">0722 384 167</a></p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-info-card">
                    <div class="cic-icon"><i class="bi bi-envelope-fill"></i></div>
                    <h4>Email Us</h4>
                    <p><a href="mailto:info@college.ac.ke">info@college.ac.ke</a></p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-info-card">
                    <div class="cic-icon"><i class="bi bi-clock-fill"></i></div>
                    <h4>Office Hours</h4>
                    <p>Mon&ndash;Fri: 8:00 AM&ndash;5:00 PM<br>Sat: 9:00 AM&ndash;1:00 PM</p>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CONTACT FORM + SIDEBAR
========================================================== -->

<section class="contact-form-section py-5">

    <div class="container">

        <div class="row g-4 g-lg-5">

            <!-- FORM + SUCCESS PANEL -->
            <div class="col-lg-7" data-aos="fade-right">

                <div class="admission-panel-wrap">

                    <!-- FORM PANEL -->
                    <div class="admission-card" id="contactFormCard">

                        <h2>Send Us a Message</h2>
                        <p class="admission-card-sub">
                            Fields marked <span class="req">*</span> are required.
                        </p>

                        <form id="contactForm" class="apply-form needs-validation" novalidate>

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label for="cName" class="form-label">Full Name <span class="req">*</span></label>
                                    <input type="text" class="form-control" id="cName" name="name" required>
                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="cEmail" class="form-label">Email Address <span class="req">*</span></label>
                                    <input type="email" class="form-control" id="cEmail" name="email" required>
                                    <div class="invalid-feedback">Please enter a valid email address.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="cPhone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="cPhone" name="phone" placeholder="07XX XXX XXX">
                                </div>

                                <div class="col-md-6">
                                    <label for="cSubject" class="form-label">Subject <span class="req">*</span></label>
                                    <select class="form-select" id="cSubject" name="subject" required>
                                        <option value="" selected disabled>Select a topic</option>
                                        <option>Admissions &amp; Courses</option>
                                        <option>Fees &amp; Payment</option>
                                        <option>Partnerships &amp; Industry</option>
                                        <option>Media &amp; Press</option>
                                        <option>General Inquiry</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a subject.</div>
                                </div>

                                <div class="col-12">
                                    <label for="cMessage" class="form-label">Message <span class="req">*</span></label>
                                    <textarea class="form-control" id="cMessage" name="message" rows="5"
                                              placeholder="How can we help?" required></textarea>
                                    <div class="invalid-feedback">Please enter a message.</div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-accent btn-lg w-100" id="contactSubmitBtn">
                                        <span class="btn-label">
                                            Send Message
                                            <i class="bi bi-send-fill"></i>
                                        </span>
                                        <span class="btn-spinner d-none">
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Sending...
                                        </span>
                                    </button>
                                </div>

                            </div>

                        </form>

                    </div>

                    <!-- SUCCESS PANEL (hidden until submit) -->
                    <div class="success-panel d-none" id="contactSuccessPanel">

                        <div class="success-icon">
                            <i class="bi bi-check-lg"></i>
                        </div>

                        <h2>Message Sent!</h2>

                        <p class="success-text">
                            Thanks, <span id="contactSuccessName">there</span> — we've received your
                            message and will get back to you at
                            <strong id="contactSuccessEmail">your email</strong> within
                            <strong>1 business day</strong>.
                        </p>

                        <div class="success-actions">
                            <a href="index.php" class="btn btn-outline-light">
                                <i class="bi bi-house"></i> Back to Home
                            </a>
                            <button type="button" class="btn btn-accent" id="contactAgainBtn">
                                Send Another Message
                            </button>
                        </div>

                    </div>

                </div>

            </div>

            <!-- SIDEBAR -->
            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="150">

                <div class="admission-side-card">

                    <h3>Follow ATTC</h3>

                    <div class="contact-social-list">
                        <a href="#"><i class="bi bi-facebook"></i> Facebook</a>
                        <a href="#"><i class="bi bi-instagram"></i> Instagram</a>
                        <a href="#"><i class="bi bi-tiktok"></i> TikTok</a>
                        <a href="#"><i class="bi bi-youtube"></i> YouTube</a>
                    </div>

                </div>

                <div class="admission-side-card">

                    <h3>Find Us</h3>

                    <div class="map-frame">
                        <iframe
                            src="https://www.openstreetmap.org/export/embed.html?bbox=35.2598%2C0.5043%2C35.2798%2C0.5243&layer=mapnik&marker=0.5143%2C35.2698"
                            title="ATTC Eldoret location map"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <p class="map-note">
                        <i class="bi bi-info-circle"></i>
                        Approximate location — pin will be refined to the exact
                        Sirgoi Building coordinates.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FAQ
========================================================== -->

<section class="faq-section py-5">

    <div class="container">

        <div class="section-heading text-center" data-aos="fade-up">
            <span class="section-label">FAQ</span>
            <h2>Frequently Asked Questions</h2>
            <p>Can't find what you're looking for? Send us a message above.</p>
        </div>

        <div class="accordion faq-accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="100">

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What are the entry requirements for certificate and diploma courses?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Requirements vary by program and level, but most certificate courses
                        accept KCPE or KCSE leavers, while diploma programs generally require
                        a minimum KCSE grade. Some professional and short courses have no
                        formal academic prerequisite. Check the specific course on the
                        <a href="courses.php">Courses &amp; Fee Structure</a> page or ask our
                        admissions team for your program of interest.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        How many intakes does ATTC have per year?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        ATTC runs three intakes annually — January, May and September.
                        You can select your preferred intake directly on the
                        <a href="admissions.php">application form</a>.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Is ATTC recognised and accredited?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes. ATTC operates within Kenya's technical and vocational education
                        framework under TVETA and the Ministry of Education, and our programs
                        are examined by recognised bodies including CDACC, KNEC, KASNEB, ICM,
                        ABMA, IATA and NITA depending on the course.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        How do I apply?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Fill out the <a href="admissions.php">online application form</a> with
                        your details and program of interest. Our admissions team reviews
                        applications and reaches out with your offer letter and fee structure
                        — you can also start from the <a href="courses.php">course catalogue</a>
                        and apply directly from any listing.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        What payment options are available for fees?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Fees are payable per term and can typically be settled via bank
                        deposit, mobile money, or in person at the campus finance office.
                        Confirmed payment details are shared with your admission letter —
                        reach out via the form above if you need them sooner.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Does ATTC offer industrial attachment or job placement support?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes — ATTC collaborates with tech companies, engineering firms and
                        NGOs to place students in internships and industrial attachments
                        aligned with their program, alongside career mentorship throughout
                        their studies.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        I still have a question — how quickly will I get a reply?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Messages sent through the form on this page are typically answered
                        within one business day. For anything urgent, calling
                        <a href="tel:+254725833869">0725 833 869</a> is fastest.
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>


<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/contact.js"></script>

</body>

</html>