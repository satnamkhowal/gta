<?php
/**
 * Groot Academy - Courses Page
 * SEO-optimized IT Courses in Jaipur
 *
 * Shared layout:
 *   head.php    -> SEO/meta/head assets
 *   header.php  -> site header/navigation
 *   footer.php  -> site footer/scripts
 */
require_once __DIR__ . '/includes/site-paths.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>IT Courses in Jaipur | Groot Academy</title>
    <meta name="description" content="Explore programming, full stack development, data analytics, AI, cloud, security and digital marketing courses at Groot Academy Jaipur.">
    <link rel="canonical" href="https://grootacademy.com/courses.php">
    <base href="<?= htmlspecialchars(ga_url(), ENT_QUOTES, 'UTF-8') ?>">
    <?php include __DIR__ . '/head.php'; ?>
    <link rel="stylesheet" href="<?= htmlspecialchars(ga_asset('css/groot-course-migration.css'), ENT_QUOTES, 'UTF-8') ?>">
</head>
<body class="defult-home">
<?php include __DIR__ . '/header.php'; ?>

<!-- =========================================================
     GROOT ACADEMY COURSES PAGE
     Based on the supplied Courses Grid template.
     Existing major sections are retained and customized.
     ========================================================= -->

<main class="main-content">
<div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">IT Courses in Jaipur</h1>
                    <ul>
                        <li>
                            <a class="active" href="https://grootacademy.com/">Home</a>
                        </li>
                        <li>Courses</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            
            <!-- SEO Course Introduction Start -->
            <section class="rs-about style1 pt-80 pb-50 md-pt-60 md-pb-30">
                <div class="container">
                    <div class="sec-title text-center mb-40">
                        <div class="sub-title orange-color">Groot Academy Jaipur</div>
                        <h2 class="title">Best IT Courses &amp; Computer Training in Jaipur</h2>
                        <p class="desc mt-20">
                            Explore career-focused IT courses in Jaipur at Groot Academy. Learn programming,
                            full stack web development, data analytics, artificial intelligence, machine learning,
                            Java, Python, React, Node.js and other in-demand technologies through practical,
                            project-based training.
                        </p>
                        <p class="desc mt-15">
                            Choose a course based on your career goal and build practical skills with structured
                            learning, projects and industry-oriented guidance. Visit our
                            <a href="https://grootacademy.com/">Groot Academy Jaipur IT training institute</a>
                            homepage or explore the
                            <a href="<?= htmlspecialchars(ga_url('courses.php'), ENT_QUOTES, 'UTF-8') ?>">complete course catalogue</a>.
                        </p>
                    </div>
                </div>
            </section>
            <!-- SEO Course Introduction End -->

<!-- Popular Courses Section Start -->
            <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="gridFilter text-center mb-50">
                        <button class="active" data-filter="*">ALL</button>
                        <button id="programming-courses" data-filter=".filter1">PROGRAMMING</button>
                        <button id="web-app-development" data-filter=".filter2">WEB &amp; APP DEVELOPMENT</button>
                        <button id="data-ai" data-filter=".filter3">DATA &amp; AI</button>
                        <button id="professional-courses" data-filter=".filter4">PROFESSIONAL</button>
                    </div>
                    <div class="row grid ga-catalogue">
                        <?php include __DIR__ . '/includes/course-cards.php'; ?>
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End -->

            <!-- Newsletter section start -->
            <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div class="row y-middle">
                            <div class="col-lg-6 col-md-12 md-mb-30">
                               <div class="content-part">
                                   <div class="sec-title">
                                       <div class="title-icon md-mb-15">
                                           <img src="assets/images/newsletter.png" alt="images">
                                       </div>
                                       <h2 class="title mb-0 white-color">Get Course Updates & Career Tips</h2>
                                   </div>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <form class="newsletter-form">
                                    <input type="email" name="email" placeholder="Enter Your Email" required="">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter section end -->
        </div>
</main>

<?php include __DIR__ . '/footer.php'; ?>

</body>
</html>
