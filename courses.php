<?php require_once 'data/courses-data.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Search all courses offered at Africa Technical Training College (ATTC), Eldoret, with program duration, exam body and fee structure.">
    <title>Courses &amp; Fee Structure | ATTC Eldoret</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Page-specific stylesheet: kept separate since this table/filter UI
         is only used on this page and there's no reason to load it globally -->
    <link rel="stylesheet" href="assets/css/courses.css">
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
            <span>Courses &amp; Fee Structure</span>
        </p>

        <h1>Find Your Course</h1>

        <p class="page-banner-lede">
            Search across all <?php echo count($courses); ?> programs offered at ATTC —
            filter by school, level or exam body to compare duration and fees.
        </p>

    </div>

</section>


<!-- =========================================================
     COURSE FINDER
========================================================== -->

<section class="course-finder py-5">

    <div class="container">

        <!-- SEARCH & FILTER TOOLBAR -->
        <div class="finder-toolbar" data-aos="fade-up">

            <div class="finder-search">
                <i class="bi bi-search"></i>
                <input type="text"
                       id="courseSearch"
                       placeholder="Search by course or school name...">
            </div>

            <div class="finder-filters">

                <select id="filterSchool" class="form-select">
                    <option value="">All Schools</option>
                    <?php
                        $uniqueSchools = array_values(array_unique(array_column($courses, 'school')));
                        sort($uniqueSchools);
                        foreach ($uniqueSchools as $school):
                    ?>
                        <option value="<?php echo htmlspecialchars($school); ?>">
                            <?php echo htmlspecialchars($school); ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <select id="filterLevel" class="form-select">
                    <option value="">All Levels</option>
                    <option value="Certificate">Certificate</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Short Course">Short Course</option>
                </select>

                <select id="filterExam" class="form-select">
                    <option value="">All Exam Bodies</option>
                    <?php
                        $uniqueExams = array_values(array_unique(array_column($courses, 'exam')));
                        sort($uniqueExams);
                        foreach ($uniqueExams as $exam):
                    ?>
                        <option value="<?php echo htmlspecialchars($exam); ?>">
                            <?php echo htmlspecialchars($exam); ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <button type="button" id="clearFilters" class="btn btn-link-reset">
                    <i class="bi bi-x-circle"></i> Clear
                </button>

            </div>

        </div>


        <!-- RESULTS COUNT -->
        <div class="finder-meta">
            <span id="resultsCount"><?php echo count($courses); ?></span> of
            <?php echo count($courses); ?> courses shown
        </div>


        <!-- COURSE TABLE -->
        <div class="course-table-wrap" data-aos="fade-up" data-aos-delay="100">

            <table class="course-table" id="courseTable">

                <thead>
                    <tr>
                        <th>Course</th>
                        <th>School</th>
                        <th>Level</th>
                        <th>Duration</th>
                        <th>Exam Body</th>
                        <th>Fee / Term</th>
                        <th>Total Fee</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($courses as $c):

                        $searchBlob = strtolower($c['name'] . ' ' . $c['school']);
                        $levelClass = strtolower(str_replace(' ', '-', $c['level']));
                    ?>

                    <tr class="course-row"
                        data-search="<?php echo htmlspecialchars($searchBlob); ?>"
                        data-school="<?php echo htmlspecialchars($c['school']); ?>"
                        data-level="<?php echo htmlspecialchars($c['level']); ?>"
                        data-exam="<?php echo htmlspecialchars($c['exam']); ?>">

                        <td class="course-name"><?php echo htmlspecialchars($c['name']); ?></td>
                        <td class="course-school"><?php echo htmlspecialchars($c['school']); ?></td>
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
                               href="admissions.php?school=<?php echo urlencode($c['school']); ?>&amp;program=<?php echo urlencode($c['name']); ?>">
                                Apply <i class="bi bi-arrow-right"></i>
                            </a>
                        </td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

            <!-- EMPTY STATE -->
            <div class="finder-empty d-none" id="finderEmpty">
                <i class="bi bi-search"></i>
                <h4>No courses match your search</h4>
                <p>Try a different keyword or clear your filters.</p>
                <button type="button" class="btn btn-accent" id="emptyClearBtn">Clear Filters</button>
            </div>

        </div>

        <p class="fee-disclaimer">
            <i class="bi bi-info-circle"></i>
            Fees shown are indicative per academic term and may vary by intake —
            confirm final figures with the <a href="admissions.php">admissions office</a>.
        </p>

    </div>

</section>


<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/courses.js"></script>

</body>

</html>