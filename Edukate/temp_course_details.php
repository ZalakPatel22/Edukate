<?php
session_start();
require_once __DIR__ . '/courses-data.php';

$courseKey = $_GET['course'] ?? 'web-development';
if (!isset($courses[$courseKey])) {
    $courseKey = 'web-development';
}
$course = $courses[$courseKey];
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="img/fav.png" />
    <meta name="author" content="colorlib" />
    <meta name="description" content="<?= htmlspecialchars($course['description']) ?>" />
    <meta name="keywords" content="<?= htmlspecialchars($course['title']) ?>, Edukate, course" />
    <meta charset="UTF-8" />
    <title>Edukate - <?= htmlspecialchars($course['title']) ?></title>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
    <link rel="stylesheet" href="css/linearicons.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/hexagons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
    <link rel="stylesheet" href="css/main.css" />
    <style>
        .course-detail-header { padding: 70px 0; background: #f9f9ff; }
        .course-detail-header h1 { font-size: 42px; margin-bottom: 20px; }
        .course-detail-header p { max-width: 680px; color: #666; margin-bottom: 25px; }
        .course-meta p { margin: 8px 0; font-size: 16px; }
        .course-meta strong { display: inline-block; width: 140px; color: #333; }
        .course-image img { width: 100%; height: auto; border-radius: 18px; box-shadow: 0 20px 50px rgba(0,0,0,0.08); }
        .course-section { margin-bottom: 40px; }
        .course-section h2 { margin-bottom: 20px; font-size: 30px; color: #212121; }
        .course-section ul { list-style: disc inside; color: #555; line-height: 1.8; }
        .course-section li { margin-bottom: 10px; }
        .course-cta .btn { background: linear-gradient(135deg, #932cbf, #9286a1); border: none; color: #fff; padding: 14px 35px; border-radius: 50px; font-size: 16px; }
        .course-card-small { padding: 25px; border-radius: 20px; background: #fff; box-shadow: 0 18px 45px rgba(0,0,0,0.06); }
        .course-card-small h4 { margin-bottom: 16px; font-size: 22px; }
        .course-card-small h5 { margin-bottom: 8px; font-size: 18px; }
        .course-card-small a { color: #932cbf; font-weight: 600; }
        @media (max-width: 992px) { .course-detail-header .row { flex-direction: column-reverse; } .course-detail-header h1 { font-size: 34px; } }
    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <section class="banner-area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 banner-right">
                    <h1 class="text-white">Course Details</h1>
                    <p class="mx-auto text-white mt-20 mb-40">Explore details for the selected course and enroll today.</p>
                    <div class="link-nav">
                        <span class="box">
                            <a href="index.php">Home</a>
                            <i class="lnr lnr-arrow-right"></i>
                            <a href="courses.php">Courses</a>
                            <i class="lnr lnr-arrow-right"></i>
                            <a href="course-details.php?course=<?= urlencode($courseKey) ?>"><?= htmlspecialchars($course['title']) ?></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-detail-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1><?= htmlspecialchars($course['title']) ?></h1>
                    <p><?= htmlspecialchars($course['description']) ?></p>
                    <div class="course-meta">
                        <p><strong>Duration:</strong> <?= htmlspecialchars($course['duration']) ?></p>
                        <p><strong>Faculty:</strong> <?= htmlspecialchars($course['faculty']) ?></p>
                        <p><strong>Fee:</strong> <?= htmlspecialchars($course['fee']) ?></p>
                        <p><strong>Class Timing:</strong> <?= htmlspecialchars($course['timing']) ?></p>
                        <p><strong>Seats:</strong> <?= htmlspecialchars($course['seats']) ?></p>
                    </div>
                    <div class="course-cta">
                        <a href="payment.php" class="btn">Enroll Now</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="course-image">
                        <img src="<?= htmlspecialchars($course['image']) ?>" alt="<?= htmlspecialchars($course['title']) ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-info py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-section">
                        <h2>Requirements</h2>
                        <ul>
                            <?php foreach ($course['requirements'] as $requirement): ?>
                                <li><?= htmlspecialchars($requirement) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="course-section">
                        <h2>Benefits</h2>
                        <ul>
                            <?php foreach ($course['benefits'] as $benefit): ?>
                                <li><?= htmlspecialchars($benefit) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="course-section">
                        <h2>Syllabus</h2>
                        <ul>
                            <?php foreach ($course['syllabus'] as $item): ?>
                                <li><?= htmlspecialchars($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course-card-small">
                        <h4>Other Courses</h4>
                        <?php foreach ($courses as $key => $details): ?>
                            <?php if ($key === $courseKey) continue; ?>
                            <div style="margin-bottom:18px;">
                                <h5><?= htmlspecialchars($details['title']) ?></h5>
                                <a href="course-details.php?course=<?= urlencode($key) ?>">View Details</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/hexagons.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
