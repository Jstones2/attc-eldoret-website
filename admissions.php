<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Apply for admission to Africa Technical Training College (ATTC), Eldoret. TVETA-accredited technical and vocational programs.">
    <title>Admissions | ATTC Eldoret</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
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
            <span>Admissions</span>
        </p>

        <h1>Start Your Application</h1>

        <p class="page-banner-lede">
            Fill in the form below and our admissions team will reach out
            with next steps, fee structures and intake dates for your
            chosen program.
        </p>

    </div>

</section>


<!-- =========================================================
     ADMISSION FORM
========================================================== -->

<section class="admission-section py-5">

    <div class="container">

        <div class="row g-4 g-lg-5">

            <!-- FORM + SUCCESS PANEL -->
            <div class="col-lg-7" data-aos="fade-right">

                <div class="admission-panel-wrap">

                    <!-- FORM PANEL -->
                    <div class="admission-card" id="applyFormCard">

                        <h2>Application Form</h2>
                        <p class="admission-card-sub">
                            Fields marked <span class="req">*</span> are required.
                        </p>

                        <form id="admissionForm" class="apply-form needs-validation" novalidate>

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label for="fullName" class="form-label">Full Name <span class="req">*</span></label>
                                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                                    <div class="invalid-feedback">Please enter your full name.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender <span class="req">*</span></label>
                                    <select class="form-select" id="gender" name="gender" required>
                                        <option value="" selected disabled>Select</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Prefer not to say">Prefer not to say</option>
                                    </select>
                                    <div class="invalid-feedback">Please select an option.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address <span class="req">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">Please enter a valid email address.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number <span class="req">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                           placeholder="07XX XXX XXX" required>
                                    <div class="invalid-feedback">Please enter a valid phone number.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="school" class="form-label">School of Interest <span class="req">*</span></label>
                                    <select class="form-select" id="school" name="school" required>
                                        <option value="" selected disabled>Select a school</option>
                                        <option>Medical, Nursing &amp; Health Sciences</option>
                                        <option>Information Communication Technology</option>
                                        <option>Business</option>
                                        <option>Tourism &amp; Travel</option>
                                        <option>Hospitality</option>
                                        <option>Engineering</option>
                                        <option>Building Technology &amp; Interior Design</option>
                                        <option>Agriculture</option>
                                        <option>Security, Criminal Justice &amp; Forensic Studies</option>
                                        <option>Journalism &amp; Media Studies</option>
                                        <option>Fashion &amp; Design</option>
                                        <option>Social Sciences &amp; Beauty/Hairdressing</option>
                                        <option>Short Courses &amp; Computer Applications</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a school.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="intake" class="form-label">Preferred Intake <span class="req">*</span></label>
                                    <select class="form-select" id="intake" name="intake" required>
                                        <option value="" selected disabled>Select intake</option>
                                        <option>January</option>
                                        <option>May</option>
                                        <option>September</option>
                                    </select>
                                    <div class="invalid-feedback">Please select an intake.</div>
                                </div>

                                <div class="col-12">
                                    <label for="program" class="form-label">Course / Program</label>
                                    <input type="text" class="form-control" id="program" name="program"
                                           placeholder="e.g. Computer Science &amp; Cyber Security">
                                </div>

                                <div class="col-12">
                                    <label for="education" class="form-label">Highest Level of Education <span class="req">*</span></label>
                                    <select class="form-select" id="education" name="education" required>
                                        <option value="" selected disabled>Select</option>
                                        <option>KCPE</option>
                                        <option>KCSE</option>
                                        <option>Certificate</option>
                                        <option>Diploma</option>
                                        <option>Other</option>
                                    </select>
                                    <div class="invalid-feedback">Please select your education level.</div>
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">Additional Information</label>
                                    <textarea class="form-control" id="message" name="message" rows="4"
                                              placeholder="Anything you'd like the admissions team to know"></textarea>
                                </div>

                                <div class="col-12 form-check">
                                    <input type="checkbox" class="form-check-input" id="agree" required>
                                    <label class="form-check-label" for="agree">
                                        I confirm the information provided is accurate. <span class="req">*</span>
                                    </label>
                                    <div class="invalid-feedback">You must confirm before submitting.</div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-accent btn-lg w-100" id="submitBtn">
                                        <span class="btn-label">
                                            Submit Application
                                            <i class="bi bi-arrow-right"></i>
                                        </span>
                                        <span class="btn-spinner d-none">
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Submitting...
                                        </span>
                                    </button>
                                </div>

                            </div>

                        </form>

                    </div>

                    <!-- SUCCESS PANEL (hidden until submit) -->
                    <div class="success-panel d-none" id="successPanel">

                        <div class="success-icon">
                            <i class="bi bi-check-lg"></i>
                        </div>

                        <h2>Application Submitted!</h2>

                        <p class="success-text">
                            Thank you, <span id="successName">there</span> — we've received your application.
                            Our admissions team will contact you within
                            <strong>2 business days</strong> with next steps.
                        </p>

                        <div class="success-ref">
                            <span>Reference Number</span>
                            <strong id="successRef">ATTC-000000</strong>
                        </div>

                        <div class="success-actions">
                            <a href="index.php" class="btn btn-outline-light">
                                <i class="bi bi-house"></i> Back to Home
                            </a>
                            <button type="button" class="btn btn-accent" id="applyAgainBtn">
                                Submit Another Application
                            </button>
                        </div>

                    </div>

                </div>

            </div>

            <!-- SIDEBAR -->
            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="150">

                <div class="admission-side-card">

                    <h3>What Happens Next</h3>

                    <ul class="admission-steps">

                        <li>
                            <span class="step-num">1</span>
                            <div>
                                <strong>Submit your application</strong>
                                <p>Complete the form with your details and program of interest.</p>
                            </div>
                        </li>

                        <li>
                            <span class="step-num">2</span>
                            <div>
                                <strong>Admissions review</strong>
                                <p>Our team reviews your application and confirms your eligibility.</p>
                            </div>
                        </li>

                        <li>
                            <span class="step-num">3</span>
                            <div>
                                <strong>Get your offer</strong>
                                <p>Receive your admission letter and fee structure by email/phone.</p>
                            </div>
                        </li>

                        <li>
                            <span class="step-num">4</span>
                            <div>
                                <strong>Report for orientation</strong>
                                <p>Join your school's orientation ahead of the intake start date.</p>
                            </div>
                        </li>

                    </ul>

                </div>

                <div class="admission-side-card admission-contact-card">

                    <h3>Need Help Applying?</h3>

                    <p><i class="bi bi-telephone-fill"></i> 0725 833 869 / 0722 384 167</p>
                    <p><i class="bi bi-envelope-fill"></i> info@college.ac.ke</p>
                    <p><i class="bi bi-geo-alt-fill"></i> Sirgoi Building, 3rd/4th Floor, Eldoret, Kenya</p>

                </div>

            </div>

        </div>

    </div>

</section>


<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/admissions.js"></script>

</body>

</html>