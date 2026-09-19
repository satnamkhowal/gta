<?php
/**
 * Groot Academy course page preview 2.
 * Purpose: test the compact header and dark sticky course navigation before rollout.
 * Search engines are intentionally blocked from indexing this preview.
 */

$formStatus = "";
$formMessage = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["course_enquiry"])) {
    $honeypot = trim($_POST["website"] ?? "");

    if ($honeypot !== "") {
        $formStatus = "success";
        $formMessage = "Thank you. Your enquiry has been received.";
    } else {
        $name = trim(strip_tags($_POST["name"] ?? ""));
        $phone = preg_replace("/[^0-9+]/", "", $_POST["phone"] ?? "");
        $email = filter_var(trim($_POST["email"] ?? ""), FILTER_VALIDATE_EMAIL);
        $mode = trim(strip_tags($_POST["mode"] ?? ""));
        $message = trim(strip_tags($_POST["message"] ?? ""));
        $consent = isset($_POST["consent"]);

        $allowedModes = ["Classroom", "Online", "Not Sure"];
        if (!in_array($mode, $allowedModes, true)) {
            $mode = "Not Sure";
        }

        if (strlen($name) < 2 || strlen($phone) < 10 || !$consent) {
            $formStatus = "error";
            $formMessage = "Please enter your name, a valid mobile number and allow us to contact you.";
        } else {
            $to = "info@grootacademy.com";
            $subject = "Course Enquiry - Python Full Stack Course";
            $safeMessage = substr($message, 0, 1200);

            $body = "New course enquiry from Groot Academy website\n\n";
            $body .= "Course: Python Full Stack Course in Jaipur\n";
            $body .= "Name: " . $name . "\n";
            $body .= "Phone: " . $phone . "\n";
            $body .= "Email: " . ($email ?: "Not provided") . "\n";
            $body .= "Preferred Mode: " . $mode . "\n";
            $body .= "Message: " . ($safeMessage !== "" ? $safeMessage : "Not provided") . "\n";
            $body .= "Page: " . ($_SERVER["HTTP_HOST"] ?? "") . ($_SERVER["REQUEST_URI"] ?? "") . "\n";

            $headers = "From: Groot Academy Website <no-reply@grootacademy.com>\r\n";
            if ($email) {
                $headers .= "Reply-To: " . $email . "\r\n";
            }
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

            $sent = @mail($to, $subject, $body, $headers);

            if ($sent) {
                $formStatus = "success";
                $formMessage = "Thank you. Our team will contact you for course and batch details.";
            } else {
                $formStatus = "error";
                $formMessage = "The form could not send right now. Please call or WhatsApp us using the options below.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Course Page Design Preview 2 | Groot Academy Jaipur</title>
    <meta name="description" content="Second preview of the Groot Academy Python Full Stack course page with a compact header and dark sticky section navigation.">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/groot-course-page.css">
    <link rel="stylesheet" type="text/css" href="assets/css/groot-course-page-v2.css">
</head>

<body class="defult-home ga-course-page ga-course-page-v2">

<?php include("header.php"); ?>

<main class="main-content">

    <!-- Hero -->
    <section class="ga-course-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="ga-breadcrumb">
                        <a href="./">Home</a>
                        <span>/</span>
                        <a href="courses.php">Courses</a>
                        <span>/</span>
                        <span>Python Full Stack</span>
                    </div>

                    <div class="ga-kicker">Career-focused IT training in Jaipur</div>

                    <h1>Python Full Stack <span>Course in Jaipur</span></h1>

                    <p class="ga-hero-copy">
                        Learn how complete web applications are built from interface to database.
                        This sample course page combines frontend development, Python, Django,
                        SQL, REST APIs, Git and practical project workflows in a clean,
                        scroll-based learning journey.
                    </p>

                    <ul class="ga-hero-points">
                        <li><i class="fa fa-code"></i> Hands-on Coding</li>
                        <li><i class="fa fa-laptop"></i> Practical Projects</li>
                        <li><i class="fa fa-database"></i> Frontend + Backend + Database</li>
                        <li><i class="fa fa-briefcase"></i> Career Preparation</li>
                    </ul>

                    <a class="ga-btn" href="#enquiry">
                        Get Course Details <i class="fa fa-arrow-right"></i>
                    </a>
                    <a class="ga-btn-outline" href="#curriculum">
                        View Curriculum
                    </a>
                </div>

                <div class="col-lg-5">
                    <div class="ga-course-visual">
                        <img src="assets/images/courses/home12/2.jpg"
                             alt="Python Full Stack Course at Groot Academy Jaipur">

                        <div class="ga-course-visual-body">
                            <span class="ga-visual-label">Sample Course Card</span>
                            <h2>Python Full Stack Development</h2>

                            <div class="ga-course-facts">
                                <div class="ga-course-fact">
                                    <small>Level</small>
                                    <strong>Beginner to Career-Focused</strong>
                                </div>
                                <div class="ga-course-fact">
                                    <small>Learning Mode</small>
                                    <strong>Classroom / Guided</strong>
                                </div>
                                <div class="ga-course-fact">
                                    <small>Focus</small>
                                    <strong>Skills + Projects</strong>
                                </div>
                                <div class="ga-course-fact">
                                    <small>Location</small>
                                    <strong>Jaipur, Rajasthan</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust strip -->
    <section class="ga-trust-strip">
        <div class="container">
            <div class="ga-trust-wrap">
                <div class="ga-trust-item">
                    <i class="fa fa-code"></i>
                    <strong>Practical Learning</strong>
                    <span>Concepts followed by coding practice</span>
                </div>
                <div class="ga-trust-item">
                    <i class="fa fa-cubes"></i>
                    <strong>Project Workflow</strong>
                    <span>Build complete application components</span>
                </div>
                <div class="ga-trust-item">
                    <i class="fa fa-users"></i>
                    <strong>Guided Training</strong>
                    <span>Structured mentor-led learning</span>
                </div>
                <div class="ga-trust-item">
                    <i class="fa fa-briefcase"></i>
                    <strong>Career Preparation</strong>
                    <span>Portfolio and interview readiness</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll navigation, not tabs -->
    <nav class="ga-section-nav" aria-label="Course page sections">
        <div class="container">
            <a href="#overview">Overview</a>
            <a href="#skills">What You Learn</a>
            <a href="#curriculum">Curriculum</a>
            <a href="#projects">Projects</a>
            <a href="#career">Career</a>
            <a href="#faq">FAQs</a>
        </div>
    </nav>

    <section class="ga-course-main">
        <div class="container">
            <div class="row">

                <!-- Main content -->
                <div class="col-lg-8 ga-content-column">

                    <section id="overview" class="ga-section ga-anchor-target">
                        <div class="ga-section-heading">
                            <span class="eyebrow">Course Overview</span>
                            <h2>Learn the complete application workflow, not isolated technologies.</h2>
                            <p>
                                The Python Full Stack learning path is designed around how modern web applications
                                are actually built. You progress from responsive frontend development to Python
                                programming, databases, Django, APIs, authentication, Git and deployment concepts.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="ga-overview-card">
                                    <span class="ga-icon-box"><i class="fa fa-desktop"></i></span>
                                    <h3>Frontend Foundations</h3>
                                    <p>
                                        Build responsive interfaces with HTML, CSS and JavaScript before connecting
                                        them to dynamic backend functionality.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="ga-overview-card">
                                    <span class="ga-icon-box"><i class="fa fa-code"></i></span>
                                    <h3>Python Programming</h3>
                                    <p>
                                        Strengthen programming logic, functions, data structures, object-oriented
                                        concepts and reusable coding practices.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="ga-overview-card">
                                    <span class="ga-icon-box"><i class="fa fa-database"></i></span>
                                    <h3>Database & APIs</h3>
                                    <p>
                                        Understand SQL, application data flow, CRUD operations and REST API
                                        integration for real web applications.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="ga-overview-card">
                                    <span class="ga-icon-box"><i class="fa fa-cogs"></i></span>
                                    <h3>Django Development</h3>
                                    <p>
                                        Learn Django project structure, views, templates, models, ORM,
                                        authentication and application architecture.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="skills" class="ga-section ga-anchor-target ga-soft-section">
                        <div class="ga-section-heading">
                            <span class="eyebrow">What You Will Learn</span>
                            <h2>A practical skill stack for building complete web applications.</h2>
                            <p>
                                The course structure connects each technology to the next so the learning
                                path feels like one complete development workflow.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="ga-feature-card">
                                    <span class="ga-icon-box"><i class="fa fa-window-maximize"></i></span>
                                    <h3>Responsive Web Interfaces</h3>
                                    <p>Create structured, mobile-friendly frontend layouts and interactive user experiences.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="ga-feature-card">
                                    <span class="ga-icon-box"><i class="fa fa-server"></i></span>
                                    <h3>Backend Application Logic</h3>
                                    <p>Handle routes, forms, validation, sessions, authentication and reusable server-side logic.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="ga-feature-card">
                                    <span class="ga-icon-box"><i class="fa fa-exchange"></i></span>
                                    <h3>REST API Development</h3>
                                    <p>Understand request-response flow, JSON, endpoints and frontend/backend integration.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="ga-feature-card">
                                    <span class="ga-icon-box"><i class="fa fa-github"></i></span>
                                    <h3>Development Workflow</h3>
                                    <p>Use Git, debugging, project organization and deployment concepts while building projects.</p>
                                </div>
                            </div>
                        </div>

                        <div class="ga-skill-chips">
                            <span class="ga-skill-chip"><i class="fa fa-html5"></i> HTML5</span>
                            <span class="ga-skill-chip"><i class="fa fa-css3"></i> CSS3</span>
                            <span class="ga-skill-chip"><i class="fa fa-code"></i> JavaScript</span>
                            <span class="ga-skill-chip"><i class="fa fa-code"></i> Python</span>
                            <span class="ga-skill-chip"><i class="fa fa-database"></i> SQL</span>
                            <span class="ga-skill-chip"><i class="fa fa-cubes"></i> Django</span>
                            <span class="ga-skill-chip"><i class="fa fa-exchange"></i> REST APIs</span>
                            <span class="ga-skill-chip"><i class="fa fa-git"></i> Git</span>
                        </div>
                    </section>

                    <section id="curriculum" class="ga-section ga-anchor-target">
                        <div class="ga-section-heading">
                            <span class="eyebrow">Curriculum</span>
                            <h2>Course syllabus displayed as a readable learning roadmap.</h2>
                            <p>
                                No tabbed curriculum here. Each module is visible in the page flow so users
                                can scroll naturally, understand the sequence and jump here directly from the
                                course navigation.
                            </p>
                        </div>

                        <div class="ga-curriculum">
                            <article class="ga-module">
                                <h3>Web & Frontend Foundations</h3>
                                <p>HTML structure, semantic markup, forms, CSS fundamentals, responsive layouts, Flexbox, Grid and browser basics.</p>
                            </article>

                            <article class="ga-module">
                                <h3>JavaScript Essentials</h3>
                                <p>Variables, functions, arrays, objects, DOM, events, validation, asynchronous concepts and API consumption basics.</p>
                            </article>

                            <article class="ga-module">
                                <h3>Python Programming</h3>
                                <p>Syntax, control flow, functions, collections, modules, file handling, exceptions and problem-solving practice.</p>
                            </article>

                            <article class="ga-module">
                                <h3>Object-Oriented Python</h3>
                                <p>Classes, objects, inheritance, polymorphism, encapsulation and reusable application design concepts.</p>
                            </article>

                            <article class="ga-module">
                                <h3>SQL & Database Integration</h3>
                                <p>Relational database concepts, queries, joins, schema design, CRUD operations and connecting Python applications with data.</p>
                            </article>

                            <article class="ga-module">
                                <h3>Django Web Development</h3>
                                <p>Projects, apps, URLs, views, templates, models, ORM, forms, admin panel and reusable application structure.</p>
                            </article>

                            <article class="ga-module">
                                <h3>Authentication & REST APIs</h3>
                                <p>User login flows, permissions, security concepts, REST API design, serializers and frontend/backend integration.</p>
                            </article>

                            <article class="ga-module">
                                <h3>Git, Testing, Deployment & Final Project</h3>
                                <p>Version control, debugging, testing concepts, environment configuration, deployment fundamentals and final project workflow.</p>
                            </article>
                        </div>
                    </section>

                    <section id="projects" class="ga-section ga-anchor-target ga-soft-section">
                        <div class="ga-section-heading">
                            <span class="eyebrow">Practice & Projects</span>
                            <h2>Learn by building complete application workflows.</h2>
                            <p>
                                These are sample project directions for the page design. Final project titles can be
                                aligned with the approved course syllabus and batch level.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <article class="ga-project-card">
                                    <span class="tag">Guided Project</span>
                                    <h3>Student / Course Management App</h3>
                                    <p>Practice forms, authentication, database models, CRUD operations and dashboard-style interfaces.</p>
                                </article>
                            </div>

                            <div class="col-md-6 mb-4">
                                <article class="ga-project-card">
                                    <span class="tag">API Project</span>
                                    <h3>Business Service Web Application</h3>
                                    <p>Connect frontend screens with Django backend logic, data storage and REST-style endpoints.</p>
                                </article>
                            </div>

                            <div class="col-md-6 mb-4">
                                <article class="ga-project-card">
                                    <span class="tag">Portfolio Project</span>
                                    <h3>Full Stack Final Application</h3>
                                    <p>Combine UI, backend, database, authentication, Git workflow and deployment concepts in one portfolio-ready build.</p>
                                </article>
                            </div>

                            <div class="col-md-6 mb-4">
                                <article class="ga-project-card">
                                    <span class="tag">Practice Track</span>
                                    <h3>Module-wise Coding Assignments</h3>
                                    <p>Short coding tasks throughout the course reinforce Python, frontend, SQL, Django and API concepts.</p>
                                </article>
                            </div>
                        </div>
                    </section>

                    <section id="career" class="ga-section ga-anchor-target">
                        <div class="ga-section-heading">
                            <span class="eyebrow">Career Preparation</span>
                            <h2>Build skills that map to entry-level development roles.</h2>
                            <p>
                                Training can support preparation for roles such as Python Developer,
                                Django Developer, Full Stack Trainee and Web Application Developer.
                                Employment outcomes depend on individual skills, interviews and market requirements.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="ga-career-card">
                                    <span class="ga-icon-box"><i class="fa fa-folder-open"></i></span>
                                    <h3>Portfolio Preparation</h3>
                                    <p>Organize projects and source code so you can explain what you built and how the application works.</p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="ga-career-card">
                                    <span class="ga-icon-box"><i class="fa fa-comments"></i></span>
                                    <h3>Interview Preparation</h3>
                                    <p>Revise core concepts, project decisions, debugging approaches and common technical discussion areas.</p>
                                </div>
                            </div>
                        </div>

                        <div class="ga-info-card mt-2">
                            <h3>Who can join?</h3>
                            <ul class="ga-check-list">
                                <li>College students who want practical software-development exposure</li>
                                <li>Graduates preparing for development roles</li>
                                <li>Beginners who want a structured full stack learning path</li>
                                <li>Working professionals or career switchers building web-development skills</li>
                            </ul>
                        </div>
                    </section>

                    <section id="faq" class="ga-section ga-anchor-target">
                        <div class="ga-section-heading">
                            <span class="eyebrow">Frequently Asked Questions</span>
                            <h2>Common questions before joining the course.</h2>
                        </div>

                        <div id="gaFaq" class="ga-faq">
                            <div class="card">
                                <div class="card-header" id="gaFaqOne">
                                    <button type="button" data-toggle="collapse" data-target="#gaFaqAnswerOne" aria-expanded="true">
                                        <span>Can a beginner join this Python Full Stack course?</span>
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div id="gaFaqAnswerOne" class="collapse show" data-parent="#gaFaq">
                                    <div class="card-body">
                                        Yes. The learning path starts with frontend and programming foundations before moving into databases, Django and APIs.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="gaFaqTwo">
                                    <button type="button" class="collapsed" data-toggle="collapse" data-target="#gaFaqAnswerTwo">
                                        <span>Does the course include practical project work?</span>
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div id="gaFaqAnswerTwo" class="collapse" data-parent="#gaFaq">
                                    <div class="card-body">
                                        The course-page structure is designed around practical learning, module-wise assignments and complete project workflows.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="gaFaqThree">
                                    <button type="button" class="collapsed" data-toggle="collapse" data-target="#gaFaqAnswerThree">
                                        <span>How can I get current batch timing and fee details?</span>
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div id="gaFaqAnswerThree" class="collapse" data-parent="#gaFaq">
                                    <div class="card-body">
                                        Submit the enquiry form on this page or contact Groot Academy directly. Current batch and fee details can then be shared accurately.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="gaFaqFour">
                                    <button type="button" class="collapsed" data-toggle="collapse" data-target="#gaFaqAnswerFour">
                                        <span>Is placement preparation part of the learning journey?</span>
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div id="gaFaqAnswerFour" class="collapse" data-parent="#gaFaq">
                                    <div class="card-body">
                                        The course can include portfolio and interview preparation. Job outcomes depend on learner performance, interview results and employer requirements.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="ga-bottom-cta">
                        <h2>Want the current batch details?</h2>
                        <p>
                            Share your contact details and preferred learning mode. The Groot Academy team can
                            provide the latest course, batch and counselling information.
                        </p>
                        <a class="ga-btn" href="#enquiry">Send Course Enquiry <i class="fa fa-arrow-right"></i></a>
                    </section>

                </div>

                <!-- Rich sticky sidebar -->
                <aside class="col-lg-4" id="enquiry">
                    <div class="ga-sidebar">

                        <div class="ga-sidebar-card">
                            <div class="ga-sidebar-head">
                                <small>Course Enquiry</small>
                                <h3>Get Python Full Stack Details</h3>
                            </div>

                            <div class="ga-sidebar-body">
                                <?php if ($formMessage !== ""): ?>
                                    <div class="ga-form-alert <?php echo htmlspecialchars($formStatus); ?>">
                                        <?php echo htmlspecialchars($formMessage); ?>
                                    </div>
                                <?php endif; ?>

                                <form method="post" action="#enquiry">
                                    <input type="hidden" name="course_enquiry" value="1">
                                    <input type="text" name="website" class="ga-honeypot" tabindex="-1" autocomplete="off">

                                    <div class="ga-form-group">
                                        <input class="ga-form-control" type="text" name="name" placeholder="Your Name *" required>
                                    </div>

                                    <div class="ga-form-group">
                                        <input class="ga-form-control" type="tel" name="phone" placeholder="Mobile Number *" required>
                                    </div>

                                    <div class="ga-form-group">
                                        <input class="ga-form-control" type="email" name="email" placeholder="Email Address">
                                    </div>

                                    <div class="ga-form-group">
                                        <select class="ga-form-control" name="mode">
                                            <option value="Not Sure">Preferred Learning Mode</option>
                                            <option value="Classroom">Classroom</option>
                                            <option value="Online">Online</option>
                                            <option value="Not Sure">Not Sure Yet</option>
                                        </select>
                                    </div>

                                    <div class="ga-form-group">
                                        <textarea class="ga-form-control" name="message" placeholder="Anything you want to ask?"></textarea>
                                    </div>

                                    <label class="ga-consent">
                                        <input type="checkbox" name="consent" value="1" required>
                                        <span>I agree to be contacted by Groot Academy regarding course, batch and counselling details.</span>
                                    </label>

                                    <button class="ga-btn ga-submit" type="submit">
                                        Request Callback <i class="fa fa-arrow-right"></i>
                                    </button>

                                    <p class="ga-form-note">
                                        Your details are used only to respond to this course enquiry.
                                        This preview sends the enquiry by email when PHP mail is enabled on the server.
                                    </p>
                                </form>

                                <div class="ga-contact-actions">
                                    <a href="tel:+918233266276"><i class="fa fa-phone"></i> Call Now</a>
                                    <a href="https://wa.me/918233266276?text=I%20want%20details%20about%20Python%20Full%20Stack%20Course"
                                       target="_blank" rel="noopener noreferrer">
                                        <i class="fa fa-whatsapp"></i> WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="ga-sidebar-card">
                            <div class="ga-sidebar-body">
                                <h3 class="mb-20">Course Snapshot</h3>

                                <div class="ga-sidebar-mini">
                                    <div class="ga-sidebar-mini-row">
                                        <i class="fa fa-map-marker"></i>
                                        <div>
                                            <strong>Location</strong>
                                            <span>Jaipur, Rajasthan</span>
                                        </div>
                                    </div>

                                    <div class="ga-sidebar-mini-row">
                                        <i class="fa fa-laptop"></i>
                                        <div>
                                            <strong>Learning Format</strong>
                                            <span>Classroom / guided training options</span>
                                        </div>
                                    </div>

                                    <div class="ga-sidebar-mini-row">
                                        <i class="fa fa-clock-o"></i>
                                        <div>
                                            <strong>Batch Timing</strong>
                                            <span>Ask for the current schedule</span>
                                        </div>
                                    </div>

                                    <div class="ga-sidebar-mini-row">
                                        <i class="fa fa-inr"></i>
                                        <div>
                                            <strong>Current Fee</strong>
                                            <span>Request the latest course fee</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ga-sidebar-card">
                            <div class="ga-sidebar-body">
                                <h3 class="mb-10">Jump to Section</h3>
                                <ul class="ga-quick-links">
                                    <li><a href="#overview">Course Overview <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#skills">What You Learn <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#curriculum">Curriculum <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#projects">Projects <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#career">Career Preparation <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#faq">FAQs <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </aside>

            </div>
        </div>
    </section>

</main>

<?php include("footer.php"); ?>

<script>
(function () {
    var links = document.querySelectorAll(".ga-section-nav a");
    var sections = [];

    links.forEach(function (link) {
        var target = document.querySelector(link.getAttribute("href"));
        if (target) sections.push({ link: link, target: target });
    });

    if ("IntersectionObserver" in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                links.forEach(function (link) { link.classList.remove("active"); });
                var active = sections.find(function (item) { return item.target === entry.target; });
                if (active) active.link.classList.add("active");
            });
        }, { rootMargin: "-30% 0px -60% 0px", threshold: 0 });

        sections.forEach(function (item) { observer.observe(item.target); });
    }
})();
</script>

</body>
</html>
