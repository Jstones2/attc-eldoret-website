<?php
require_once 'data/schools-data.php';
require_once 'data/courses-data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="All academic schools at Africa Technical Training College (ATTC), Eldoret — browse every school and the programs offered under it.">
    <title>All Schools | ATTC Eldoret</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Page-specific stylesheet: just the banner count badge + grid spacing
         tweaks that don't belong in the global stylesheet -->
    <link rel="stylesheet" href="assets/css/all-schools.css">
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
            <span>All Schools</span>
        </p>

        <h1>All Academic Schools</h1>

        <p class="page-banner-lede">
            <?php echo count($schools); ?> schools, <?php echo count($courses); ?> programs —
            browse every school at ATTC and explore what's taught under it.
        </p>

    </div>

</section>


<!-- =========================================================
     ALL SCHOOLS GRID
========================================================== -->

<section class="schools-section py-5">

    <div class="container">

        <div class="row g-4 mt-1">

            <?php foreach ($schools as $s): ?>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">

                <div class="school-card">

                    <div class="school-image">
                        <img src="<?php echo htmlspecialchars($s['image']); ?>"
                             alt="<?php echo htmlspecialchars($s['name']); ?> students"
                             class="img-fluid w-100 h-100 object-fit-cover">
                        <span class="school-card-icon"><i class="bi <?php echo htmlspecialchars($s['icon']); ?>"></i></span>
                    </div>

                    <div class="school-content">

                        <span class="school-number"><?php echo htmlspecialchars($s['number']); ?></span>

                        <h3><?php echo htmlspecialchars($s['name']); ?></h3>

                        <p><?php echo htmlspecialchars($s['card_desc']); ?></p>

                        <a href="school-details.php?school=<?php echo urlencode($s['slug']); ?>">
                            Explore School
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="assets/js/script.js"></script>

</body>

</html>