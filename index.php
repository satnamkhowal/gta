<?php
require_once __DIR__ . '/includes/course-catalog.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>IT Training Institute in Jaipur | Groot Academy</title>
    <meta name="description" content="Explore practical IT training in Jaipur at Groot Academy with courses in programming, full stack development, data analytics, data science, AI, cloud and digital marketing.">
    <link rel="canonical" href="https://grootacademy.com/">

    <?php include("head.php") ?>
</head>

<body class="defult-home">

<?php include("header.php") ?>

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Banner Section Start -->
        <div id="rs-banner" class="rs-banner style10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pl-60 order-last">
                        <div class="img-part">
                            <img class="up-down-new" src="assets/images/banner/home12/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-0">
                        <div class="banner-content">
                            <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms"
                                data-wow-duration="2000ms">Practical IT Training in Jaipur</div>
                            <h1 class="sl-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms">Build Practical Tech Skills at Groot Academy Jaipur</h1>
                            <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="2000ms">
                                <a class="readon green-banner" href="courses.php">Explore Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-intro-box">
                <div class="shape-img">
                    <img class="up-down-new" src="assets/images/banner/home12/dotted-shape.png" alt="">
                </div>
                <div class="intro-img">
                    <img class="spine2" src="assets/images/banner/home12/intro-box.png" alt="">
                </div>
            </div>
        </div>
        <!-- Banner Section End -->


        <!-- Services Section Start -->
        <div id="rs-services" class="rs-services home12-style">
            <div class="container">
                <div class="sec-title4 text-center mb-50">
                    <div class="sub-title">Choose Your Learning Path</div>
                    <h2 class="title purple-color">Explore IT Course Families</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 md-mb-30">
                        <div class="services-item"><div class="services-image"><div class="services-icons">
                            <img src="assets/images/services/home12/1.png" alt="Programming courses at Groot Academy">
                        </div><div class="services-text"><div class="services-title">
                            <h2 class="title"><a href="courses.php#programming-courses">Programming &amp; Coding</a></h2>
                        </div><p class="text">Build programming foundations with paths such as Python and Java, then progress into practical software-development work.</p></div></div></div>
                    </div>
                    <div class="col-lg-4 md-mb-30">
                        <div class="services-item"><div class="services-image"><div class="services-icons">
                            <img src="assets/images/services/home12/2.png" alt="Web and app development courses at Groot Academy">
                        </div><div class="services-text"><div class="services-title">
                            <h2 class="title"><a href="courses.php#web-app-development">Web &amp; App Development</a></h2>
                        </div><p class="text">Learn how interfaces, backend services, APIs and databases work together through Full Stack, MERN and app-development paths.</p></div></div></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-item"><div class="services-image"><div class="services-icons">
                            <img src="assets/images/services/home12/3.png" alt="Data and AI courses at Groot Academy">
                        </div><div class="services-text"><div class="services-title">
                            <h2 class="title"><a href="courses.php#data-ai">Data &amp; AI</a></h2>
                        </div><p class="text">Explore Data Analytics, Data Science, Machine Learning, Power BI and Generative AI with clear, differentiated learning paths.</p></div></div></div>
                    </div>
                </div>
                <div class="col-lg-12 text-center pt-45">
                    <a class="readon green-btn" href="courses.php">View All Courses</a>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Categories Section Start -->
        <div id="rs-popular-courses" class="rs-popular-courses main-home home12-style pt-90 pb-100 md-pt-0 md-pb-0">
            <div class="container">
                <div class="sec-title4 text-center mb-45">
                    <div class="sub-title">Career-Focused Training</div>
                    <h2 class="title black-color">Popular IT Courses in Jaipur</h2>
                </div>
                <div class="row">
                <?php
                $homeCourseSlugs = [
                    'full-stack-web-development-course-in-jaipur',
                    'mern-stack-course-jaipur',
                    'python-programming-course-jaipur',
                    'java-programming-course-jaipur',
                    'data-science-machine-learning-course-jaipur',
                    'data-analytics-course-jaipur',
                ];
                foreach ($homeCourseSlugs as $homeSlug):
                    $homeCourse = ga_courses()[$homeSlug] ?? null;
                    if ($homeCourse === null) { continue; }
                    $homeUrl = ga_url(ga_course_path($homeCourse));
                    $homeImage = ga_course_image($homeCourse);
                ?>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="courses-item"><div class="courses-grid">
                            <div class="img-part"><a href="<?= htmlspecialchars($homeUrl, ENT_QUOTES, 'UTF-8') ?>">
                                <?php if ($homeImage !== ''): ?><img loading="lazy" src="<?= htmlspecialchars($homeImage, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($homeCourse['name'], ENT_QUOTES, 'UTF-8') ?> course at Groot Academy Jaipur"><?php endif; ?>
                            </a></div>
                            <div class="content-part">
                                <div class="info-meta"><ul><li><i class="fa fa-laptop"></i> Practical Learning</li></ul></div>
                                <h3 class="title"><a href="<?= htmlspecialchars($homeUrl, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($homeCourse['name'], ENT_QUOTES, 'UTF-8') ?> Course in Jaipur</a></h3>
                                <ul class="meta-part">
                                    <li class="user"><i class="fa fa-folder-open"></i> <?= htmlspecialchars($homeCourse['category'], ENT_QUOTES, 'UTF-8') ?></li>
                                    <li class="user"><i class="fa fa-cubes"></i> Project Practice</li>
                                </ul>
                            </div>
                        </div></div>
                    </div>
                <?php endforeach; ?>
                </div>
                <div class="text-center pt-20"><a class="readon green-btn" href="courses.php">Explore Complete Course Catalogue</a></div>
            </div>
        </div>
        <!-- Categories Section End -->

        <!-- Choose Section Start -->
        <div class="why-choose-us style3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 js-tilt md-mb-40">
                        <div class="img-part">
                            <img src="assets/images/choose/home12/1.png" alt="">

                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="sec-title3 mb-30">
                            <h2 class=" title new-title margin-0 pb-15">Why Learn at Groot Academy</h2>
                            <div class="new-desc">Build skills through structured learning, regular practice and project-oriented course work. Course details vary by selected batch, so confirm the current syllabus before enrolling.</div>
                        </div>
                        <div class="services-part mb-20">
                            <div class="services-icon">
                                <img src="assets/images/choose/home12/icon/1.png" alt="">
                            </div>
                            <div class="services-text">
                                <h2 class="title"> Practical Learning</h2>
                                <p class="services-txt"> Learn concepts through exercises, guided practice and course-specific project ideas instead of relying only on theory.</p>
                            </div>
                        </div>
                        <div class="services-part mb-20">
                            <div class="services-icon">
                                <img src="assets/images/choose/home12/icon/2.png" alt="">
                            </div>
                            <div class="services-text">
                                <h2 class="title"> Structured Learning Paths</h2>
                                <p class="services-txt"> Follow a clear progression from foundations to applied topics, with separate paths for programming, web development, data, AI and professional skills.</p>
                            </div>
                        </div>
                        <div class="services-part">
                            <div class="services-icon">
                                <img src="assets/images/choose/home12/icon/3.png" alt="">
                            </div>
                            <div class="services-text">
                                <h2 class="title"> Course Team Guidance</h2>
                                <p class="services-txt"> Ask the course team about syllabus, batch timings, fees, duration and available learning modes before choosing a program.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Choose Section End -->


        <!-- Faq Section Start -->
        <div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container"><div class="row">
                <div class="col-lg-6 padding-0 col-md-12 md-mb-40">
                    <div class="main-part new-style"><div class="title mb-20">
                        <h2 class="text-part">Frequently Asked Questions</h2>
                    </div><div class="faq-content"><div id="accordion" class="accordion">
                        <div class="card"><div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">How do I choose the right IT course?</a>
                        </div><div id="collapseOne" class="collapse show" data-parent="#accordion"><div class="card-body">
                            Start with the role or skill you want to build, then compare the curriculum and projects on the relevant course pages. You can also contact the course team for current batch guidance.
                        </div></div></div>
                        <div class="card"><div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">Are Groot Academy courses practical?</a>
                        </div><div id="collapseTwo" class="collapse" data-parent="#accordion"><div class="card-body">
                            The current course pages are structured around practical learning, exercises and project practice. Exact assignments and tools depend on the course and selected batch.
                        </div></div></div>
                        <div class="card"><div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">How can I confirm fees, duration and batch timings?</a>
                        </div><div id="collapseThree" class="collapse" data-parent="#accordion"><div class="card-body">
                            Contact Groot Academy for the latest fees, duration, batch timings and available learning modes before enrolling.
                        </div></div></div>
                    </div></div></div>
                </div>
                <div class="col-lg-6 padding-0 col-md-12">
                    <div class="rs-free-contact"><div class="sec-title3">
                        <h2 class="title white-color">Talk to the Course Team</h2>
                    </div>
                    <p class="white-color">Ask about the current syllabus, batch schedule, fees, duration and learning mode for the course you are considering.</p>
                    <p><a class="readon submit-requset" href="tel:+918233266276">Call +91 8233266276</a></p>
                    <p><a class="white-color" href="mailto:info@grootacademy.com">info@grootacademy.com</a></p>
                    <p><a class="white-color" href="contact.html">View Contact Details</a></p>
                    </div>
                </div>
            </div></div>
        </div>
        <!-- Faq Section End -->


        <!-- Learning Modes Section Start -->
        <div class="rs-download-app pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container"><div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="sec-title3 mb-30 text-center">
                        <div class="sub-title green-color">Plan Your Learning</div>
                        <h2 class="title new-title">Choose a Course, Then Confirm the Current Batch Format</h2>
                        <div class="new-desc">Explore the curriculum and project focus online, then speak with the course team to confirm current classroom or online availability, fees, duration and timings for your selected batch.</div>
                    </div>
                    <div class="text-center">
                        <a class="readon green-btn mr-15" href="courses.php">Explore Courses</a>
                        <a class="readon green-btn" href="contact.html">Contact Groot Academy</a>
                    </div>
                </div>
            </div></div>
        </div>
        <!-- Learning Modes Section End -->


        <!-- Blog Section Start -->
        <div id="rs-blog" class="rs-blog main-home modify1 pb-100 pt-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title4 text-center mb-50">
                    <div class="sub-title"> News Update</div>
                    <h2 class="title">Latest News & Article's</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                    data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                    data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false"
                    data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                    data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="blog-item">
                        <div class="image-part">
                            <img src="assets/images/blog/style9/1.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> September 24, 2020</span>
                                <span class="admin"><i class="fa fa-user"></i> admin</span>
                            </div>
                            <h3 class="title"><a href="blog-single.html">How universities can nurture for the world
                                    climate crisis</a></h3>
                            <div class="btn-btm">
                                <div class="cat-list">
                                    <ul class="post-categories">
                                        <li><a href="index12.html#">College</a></li>
                                    </ul>
                                </div>
                                <div class="rs-view-btn">
                                    <a href="index12.html#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="image-part">
                            <img src="assets/images/blog/style9/2.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> September 24, 2020</span>
                                <span class="admin"><i class="fa fa-user"></i> admin</span>
                            </div>
                            <h3 class="title"><a href="blog-single.html">Oxford vaccine trial resumes in UK after being
                                    halted</a></h3>
                            <div class="btn-btm">
                                <div class="cat-list">
                                    <ul class="post-categories">
                                        <li><a href="index12.html#">College</a></li>
                                    </ul>
                                </div>
                                <div class="rs-view-btn">
                                    <a href="index12.html#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="image-part">
                            <img src="assets/images/blog/style9/3.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> September 24, 2020</span>
                                <span class="admin"><i class="fa fa-user"></i> admin</span>
                            </div>
                            <h3 class="title"><a href="blog-single.html">University class starting soon while the lovely
                                    valley team work </a></h3>
                            <div class="btn-btm">
                                <div class="cat-list">
                                    <ul class="post-categories">
                                        <li><a href="index12.html#">College</a></li>
                                    </ul>
                                </div>
                                <div class="rs-view-btn">
                                    <a href="index12.html#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="image-part">
                            <img src="assets/images/blog/style9/4.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> September 24, 2020</span>
                                <span class="admin"><i class="fa fa-user"></i> admin</span>
                            </div>
                            <h3 class="title"><a href="blog-single.html">High school program starting soon 2021 for
                                    covid-19 situation</a></h3>
                            <div class="btn-btm">
                                <div class="cat-list">
                                    <ul class="post-categories">
                                        <li><a href="index12.html#">College</a></li>
                                    </ul>
                                </div>
                                <div class="rs-view-btn">
                                    <a href="index12.html#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="image-part">
                            <img src="assets/images/blog/style9/5.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> September 24, 2020</span>
                                <span class="admin"><i class="fa fa-user"></i> admin</span>
                            </div>
                            <h3 class="title"><a href="blog-single.html">Majority of students dissatisfied for world
                                    coronavirus support</a></h3>
                            <div class="btn-btm">
                                <div class="cat-list">
                                    <ul class="post-categories">
                                        <li><a href="index12.html#">College</a></li>
                                    </ul>
                                </div>
                                <div class="rs-view-btn">
                                    <a href="index12.html#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="image-part">
                            <img src="assets/images/blog/style9/6.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> September 24, 2020</span>
                                <span class="admin"><i class="fa fa-user"></i> admin</span>
                            </div>
                            <h3 class="title"><a href="blog-single.html">Combating discrimination against most
                                    international students</a></h3>
                            <div class="btn-btm">
                                <div class="cat-list">
                                    <ul class="post-categories">
                                        <li><a href="index12.html#">College</a></li>
                                    </ul>
                                </div>
                                <div class="rs-view-btn">
                                    <a href="index12.html#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

        <!-- Newsletter section start -->
        <div class="rs-newsletter style1 green-color mb--90 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                            <div class="content-part">
                                <div class="sec-title">
                                    <div class="title-icon md-mb-15">
                                        <img src="assets/images/white-newsletter3.png" alt="images">
                                    </div>
                                    <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <form class="newsletter-form">
                                <input type="email" name="email" placeholder="Enter Your Email" required="">
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter section end -->
    </div>
    <!-- Main content End -->
        <?php include("footer.php") ?>
</body>

</html>