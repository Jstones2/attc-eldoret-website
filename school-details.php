<?php
require_once 'data/schools-data.php';
require_once 'data/courses-data.php';

// Find the requested school by slug (?school=<slug>, set by all_schools.php)
$slug = isset($_GET['school']) ? $_GET['school'] : '';
$school = null;

foreach ($schools as $s) {
    if ($s['slug'] === $slug) {
        $school = $s;
        break;
    }
}

// Programs offered under this school, pulled from the same data source
// courses.php uses — filtered by exact school name, no duplication.
$schoolCourses = [];
if ($school) {
    foreach ($courses as $c) {
        if ($c['school'] === $school['name']) {
            $schoolCourses[] = $c;
        }
    }
}

// A few other schools to surface at the bottom, so people keep browsing
$otherSchools = [];
if ($school) {
    $total = count($schools);
    $startIndex = array_search($school, $schools, true);
    for ($i = 1; $i <= 3 && $i < $total; $i++) {
        $otherSchools[] = $schools[($startIndex + $i) % $total];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="<?php echo $school
              ? htmlspecialchars($school['name']) . ' at Africa Technical Training College (ATTC), Eldoret — programs, duration and fee structure.'
              : 'School not found | ATTC Eldoret'; ?>">
    <title><?php echo $school ? htmlspecialchars($school['name']) . ' | ATTC Eldoret' : 'School Not Found | ATTC Eldoret'; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Reused rather than duplicated: the program table is the exact same
         component as courses.php, just pre-filtered to one school -->
    <link rel="stylesheet" href="assets/css/courses.css">
    <!-- Page-specific: the image hero banner, meta row and related-schools
         strip don't exist anywhere else -->
    <link rel="stylesheet" href="assets/css/school-details.css">
    <link rel="icon" href="assets/images/attc-logo.png">

</head>

<body>

<?php include 'includes/navbar.php'; ?>

<?php if (!$school): ?>

    <!-- =========================================================
         SCHOOL NOT FOUND
    ========================================================== -->

    <section class="page-banner">
        <div class="container">
            <p class="page-breadcrumb">
                <a href="index.php">Home</a>
                <i class="bi bi-chevron-right"></i>
                <span>School Not Found</span>
            </p>
            <h1>We Couldn't Find That School</h1>
            <p class="page-banner-lede">
                The school you're looking for may have moved or the link is incorrect.
            </p>
        </div>
    </section>

    <section class="not-found-section py-5">
        <div class="container text-center">
            <i class="bi bi-signpost-split"></i>
            <h2>Let's get you back on track</h2>
            <p>Browse the full list of academic schools instead.</p>
            <a href="all_schools.php" class="btn btn-accent btn-lg">
                <i class="bi bi-arrow-left"></i> View All Schools
            </a>
        </div>
    </section>

<?php else: ?>

    <!-- =========================================================
         SCHOOL HERO
    ========================================================== -->

    <section class="school-hero"
             style="background-image:url('<?php echo htmlspecialchars($school['image']); ?>')">

        <div class="school-hero-overlay"></div>

        <div class="container position-relative">

            <p class="page-breadcrumb">
                <a href="index.php">Home</a>
                <i class="bi bi-chevron-right"></i>
                <a href="all_schools.php">All Schools</a>
                <i class="bi bi-chevron-right"></i>
                <span><?php echo htmlspecialchars($school['name']); ?></span>
            </p>

            <div class="school-hero-icon">
                <i class="bi <?php echo htmlspecialchars($school['icon']); ?>"></i>
            </div>

            <h1><?php echo htmlspecialchars($school['name']); ?></h1>

            <p class="school-hero-lede"><?php echo htmlspecialchars($school['full_desc']); ?></p>

            <div class="school-hero-meta">
                <span><i class="bi bi-mortarboard-fill"></i> <?php echo count($schoolCourses); ?> Programs</span>
                <span><i class="bi bi-patch-check-fill"></i> TVETA Accredited</span>
            </div>

            <a href="admissions.php?school=<?php echo urlencode($school['name']); ?>" class="btn btn-accent btn-lg">
                Apply to This School <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </section>


    <!-- =========================================================
         PROGRAMS OFFERED
    ========================================================== -->

    <section class="school-programs py-5">

        <div class="container">

            <div class="section-heading" data-aos="fade-up">
                <div>
                    <span class="section-label">PROGRAMS</span>
                    <h2>What You Can Study Here</h2>
                </div>
                <a href="courses.php" class="btn btn-outline-primary">
                    Browse All Courses <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <?php if (count($schoolCourses) > 0): ?>

                <div class="course-table-wrap school-table-wrap" data-aos="fade-up" data-aos-delay="100">

                    <table class="course-table">

                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Level</th>
                                <th>Duration</th>
                                <th>Exam Body</th>
                                <th>Fee / Term</th>
                                <th>Total Fee</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php foreach ($schoolCourses as $c):
                                $levelClass = strtolower(str_replace(' ', '-', $c['level']));
                            ?>

                            <tr>
                                <td class="course-name"><?php echo htmlspecialchars($c['name']); ?></td>
                                <td>
                                    <span class="level-badge level-<?php echo $levelClass; ?>">
                                        <?php echo htmlspecialchars($c['level']); ?>
                                    </span>
                                </td>
                                <td><?php echo htmlspecialchars($c['duration']); ?></td>
                                <td><span class="exam-badge"><?php echo htmlspecialchars($c['exam']); ?></span></td>
                                <td>
                                    <?php if ($c['one_off']): ?>
                                        <span class="text-muted">&mdash;</span>
                                    <?php else: ?>
                                        KES <?php echo number_format($c['term_fee']); ?>
                                    <?php endif; ?>
                                </td>
                                <td class="fee-total">
                                    KES <?php echo number_format($c['total_fee']); ?>
                                    <?php if ($c['one_off']): ?>
                                        <span class="fee-note">one-off</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-end">
                                    <a class="apply-link"
                                       href="admissions.php?school=<?php echo urlencode($school['name']); ?>&amp;program=<?php echo urlencode($c['name']); ?>">
                                        Apply <i class="bi bi-arrow-right"></i>
                                    </a>
                                </td>
                            </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>

                <p class="fee-disclaimer">
                    <i class="bi bi-info-circle"></i>
                    Fees shown are indicative per academic term and may vary by intake —
                    confirm final figures with the <a href="admissions.php">admissions office</a>.
                </p>

            <?php else: ?>

                <div class="finder-empty">
                    <i class="bi bi-journal-x"></i>
                    <h4>No programs listed yet</h4>
                    <p>Check back soon, or browse the full course catalogue.</p>
                    <a href="courses.php" class="btn btn-accent">Browse All Courses</a>
                </div>

            <?php endif; ?>

        </div>

    </section>


    <?php if (!empty($otherSchools)): ?>

    <!-- =========================================================
         OTHER SCHOOLS
    ========================================================== -->

    <section class="other-schools py-5">

        <div class="container">

            <div class="section-heading text-center" data-aos="fade-up">
                <span class="section-label">KEEP BROWSING</span>
                <h2>Other Schools at ATTC</h2>
            </div>

            <div class="row g-4 mt-2">

                <?php foreach ($otherSchools as $os): ?>

                <div class="col-md-4" data-aos="fade-up">
                    <a href="school-details.php?school=<?php echo urlencode($os['slug']); ?>" class="other-school-card">
                        <i class="bi <?php echo htmlspecialchars($os['icon']); ?>"></i>
                        <h4><?php echo htmlspecialchars($os['name']); ?></h4>
                        <span>Explore School <i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

    <?php endif; ?>


    <!-- =========================================================
         CTA
    ========================================================== -->

    <section class="admission-cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span>TAKE THE NEXT STEP</span>
                    <h2>Ready to Join <?php echo htmlspecialchars($school['name']); ?>?</h2>
                    <p>Start your application today — our admissions team will guide you from there.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="admissions.php?school=<?php echo urlencode($school['name']); ?>" class="btn btn-light btn-lg">
                        Apply Now <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="assets/js/script.js"></script>

</body>

</html>