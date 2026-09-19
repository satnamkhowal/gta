<?php include './includes2/connection.php'; ?>
<!DOCTYPE html>
<html lang="zxx" style="  position: relative;
  bottom: 35px;
">

<head>
  <!-- meta tag -->
  <meta charset="utf-8">
  <?php
  $page_name = basename($_SERVER['PHP_SELF']);
  // echo $page_name;
  $query = sprintf("select * from meta_description where page_name='%s'", mysqli_real_escape_string($conn, $page_name));
  // echo $query;
  $description = "";
  $title = "";
  $keywords = "";
  $auther = "";
  // $qr="select * from meta_description where page_name";
  $result = mysqli_query($conn, $query, MYSQLI_STORE_RESULT);
  while ($row = mysqli_fetch_assoc($result)) {
    $description = $row['description'];
    $title = $row['title'];
    $keywords = $row['keywords'];
    $auther = $row['auther'];
  }
  ?>

  <title><?php echo $title; ?></title>
  <meta property="og:url" content="https://www.grootacademy.com/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Groot academy" />
  <meta property="og:description" content="Your grow your knowladge with groot academy" />
  <meta property="og:image" content="https://www.grootacademy.com/assets2/images/groot-horizontal-logo-transparent.png" />
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="author" content="<?php echo $auther; ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets2/img/apple-icon.png">
  <link rel="icon" type="image/x-icon" href="./assets2/img/logo.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="./assets2/css/groot.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets2/css/jitin.css" rel="stylesheet" />

  <link href="./assets2/css/comments.css" rel="stylesheet" />

  <link href="./assets2/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets2/css/nucleo-svg.css" rel="stylesheet" />


  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- CSS Files -->
  <link id="pagestyle" href="./assets2/css/soft-design-system.css?v=1.0.9" rel="stylesheet" />


  <!-- Nucleo Icons -->
  <link href="./assets2/css/nucleo-icons.css" rel="stylesheet" />


  <!-- Font Awesome Icons -->

  <!-- CSS Files -->

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <!--     Fonts and icons     -->
  <!-- Nucleo Icons -->
  <link href="./assets2/css/nucleo-icons.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="./assets2/css/nucleo-svg.css" rel="stylesheet" />
  <link id="pagestyle" href="./assets2/css/soft-design-system.css?v=1.0.9" rel="stylesheet" />



  <!-- Nucleo Icons -->
  <link rel="apple-touch-icon" sizes="76x76" href="./assets2/img/apple-icon.png">
  <!--     Fonts and icons     -->
  <!-- Nucleo Icons -->

  <!-- CSS Files -->


</head>

<body class="index-page">


  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="index" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
              <img src="./assets2/img/groot.png" width="180" alt="image" style="border-radius: 10px; margin-top: -16px;" />
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-lg-8 ps-lg-5 w-100">
                <li>
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="./index">
                    <b>Home</b>

                  </a>
                </li>
                <li>
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="./about-us">
                    <b>About Us</b>

                  </a>
                </li>

                <li>
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="./best-courses-for-software-developers-web-developers-and-mobile-application-development-in-jaipur">
                    <b>Courses</b>

                  </a>
                </li>




                <li class="nav-item ms-lg-auto">
                  <a class="nav-link nav-link-icon me-2" href="tel:+918233266276">
                    <i class="fa fa-mobile me-2"></i>
                    <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" title="mobile number"><b>+91-8233266276</b></p>
                  </a>
                </li>
                <li class="nav-item ms-lg-auto">
                  <a class="nav-link nav-link-icon me-2" href="https://github.com/grootacademy" target="_blank">
                    <i class="fa fa-github me-1"></i>
                    <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on Github">Github</p>
                  </a>
                </li>
                <li class="nav-item my-auto ms-3 ms-lg-0">
                  <a href="./contact-us" class="btn btn-sm btn-outline-primary btn-round mb-0 me-1 mt-0 mt-md-0">Contact us</a>
                </li>
                <li class="nav-item my-auto ms-3 ms-lg-0">

                  <a href="./enroll" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0 ">Enroll Now</a>

                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
  </div>
  <!-- Navbar Light -->

  <!-- End Navbar -->

  <div class="container">
    <div class="row">
      <div class="col-12 mx-auto">
        <div class="text-center">
          <h3 class="mt-5 mb-0">GROOT DIGITAL MARKETING COURSE PAGE</h3>

        </div>
      </div>
    </div>
  </div>
  <section class="py-sm-7" id="download-soft-ui">
    <div class="bg-gradient-primary position-relative m-3 border-radius-xl overflow-hidden">
      <img src="./assets2/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-6">
      <div class="container py-7 postion-relative z-index-2 position-relative">
        <div class="row">
          <div class="col-md-7 mx-auto text-center">
            <h3 class="text-white mb-0">Best digital marketing institute in jaipur.</h3><br><br>
            <!-- <h3 class="text-primary text-gradient mb-4">Design System for Bootstrap 5?</h3> -->
            <h6 class="text-white mb-5">You may develop digital marketing plans, study digital customer behavior, and get in-demand data with the help of Groot, which will also help you measure and optimize ROI for your business as well as for your clients.</h6>
            <a href="./enroll" class="btn btn-primary btn-lg mb-3 mb-sm-0">Let's join</a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <div class="mb-7 w-200 text-center">

    <h3>WHY YOU SHOULD TAKE A DIGITAL MARKETING COURSE IN JAIPUR?
    </h3>
  </div>



  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="info-horizontal bg-gradient-primary border-radius-xl p-5">
          <div class="icon">
            <svg class="text-white" width="25px" height="25px" viewBox="0 0 46 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>delivery-fast</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2320.000000, -741.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g id="delivery-fast" transform="translate(604.000000, 450.000000)">
                      <rect class="color-background" opacity="0.601143973" x="0" y="0" width="17.25" height="3.83333333"></rect>
                      <rect class="color-background" opacity="0.601143973" x="3.83333333" y="7.66666667" width="13.4166667" height="3.83333333"></rect>
                      <rect class="color-background" opacity="0.601143973" x="7.66666667" y="15.3333333" width="9.58333333" height="3.83333333"></rect>
                      <rect class="color-background" opacity="0.601888021" x="11.5" y="23" width="5.75" height="3.83333333"></rect>
                      <path class="color-foreground" d="M44.9400833,19.3679167 L38.0611667,15.9294167 L36.3591667,9.1195 C36.1464167,8.26466667 35.37975,7.66666667 34.5,7.66666667 L31.3854167,7.66666667 L21.0833333,7.66666667 C21.0833333,7.66666667 21.0833333,31.5310833 21.0833333,32.5833333 C21.0833333,33.6355833 21.1810833,34.5 21.1810833,34.5 C21.6640833,38.801 25.2808333,42.1666667 29.7083333,42.1666667 C34.1358333,42.1666667 37.7525833,38.801 38.2355833,34.5 L44.0833333,34.5 C45.1413333,34.5 46,33.6413333 46,32.5833333 L46,21.0833333 C46,20.3569167 45.5898333,19.69375 44.9400833,19.3679167 Z M29.7083333,38.3333333 C27.0671667,38.3333333 24.9166667,36.18475 24.9166667,33.5416667 C24.9166667,30.8985833 27.0671667,28.75 29.7083333,28.75 C32.3495,28.75 34.5,30.8985833 34.5,33.5416667 C34.5,36.18475 32.3495,38.3333333 29.7083333,38.3333333 Z M24.9166667,17.25 L24.9166667,11.5 L33.2426667,11.5 L34.5,17.25 L24.9166667,17.25 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div class="description ps-5">
            <h5 class="text-white">Digital Marketing</h5>
            <p class="text-white">The field of digital marketing is booming professionally for students. One of those occupations that requires a rapid route to success in professional life is digital marketing.</p>
            <a href="./enroll" class="text-white icon-move-right">
              Let's start
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
        <div class="info-horizontal bg-gray-100 border-radius-xl p-5">
          <div class="icon">
            <svg class="text-primary" width="25px" height="25px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>document</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(154.000000, 300.000000)">
                      <path class="color-foreground" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                      <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div class="description ps-5">
            <h5>Advantages of digital </h5>
            <p>Advantages of digital marketing for firms include the capacity to follow clients' purchasing journeys and increase income as well as mobile access that is affordable, flexible, and expansion.</p>
            <a href="./enroll">
              Read more
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-lg-0 mt-4">
        <div class="info-horizontal bg-gray-100 border-radius-xl p-5">
          <div class="icon">
            <svg class="text-primary" width="25px" height="25px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>ungroup</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2170.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g id="ungroup" transform="translate(454.000000, 151.000000)">
                      <path class="color-background" d="M38.1818182,10.9090909 L32.7272727,10.9090909 L32.7272727,30.9090909 C32.7272727,31.9127273 31.9127273,32.7272727 30.9090909,32.7272727 L10.9090909,32.7272727 L10.9090909,38.1818182 C10.9090909,39.1854545 11.7236364,40 12.7272727,40 L38.1818182,40 C39.1854545,40 40,39.1854545 40,38.1818182 L40,12.7272727 C40,11.7236364 39.1854545,10.9090909 38.1818182,10.9090909 Z"></path>
                      <path class="color-foreground" d="M27.2727273,29.0909091 L1.81818182,29.0909091 C0.812727273,29.0909091 0,28.2781818 0,27.2727273 L0,1.81818182 C0,0.814545455 0.812727273,0 1.81818182,0 L27.2727273,0 C28.2781818,0 29.0909091,0.814545455 29.0909091,1.81818182 L29.0909091,27.2727273 C29.0909091,28.2781818 28.2781818,29.0909091 27.2727273,29.0909091 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div class="description ps-5">
            <h5>Investigate your interest in SEO</h5>
            <p>You have the choice to investigate your interest in SEO, social media marketing, SEM, PPC, content marketing, email marketing, video marketing, and much more at the digital marketing training institute in Jaipur.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/soft-ui-design-system" class="text-primary icon-move-right">
              Read more
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12 mx-auto">
        <div class="mb-0 w-200 text-center">

          <h3>FEATURES OF DIGITAL MARKETING COURSE

          </h3>
        </div>

        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">

          <div class="tab-content tab-space">
            <div class="tab-pane active" id="preview-features-1">

              <section class="py-9">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4 bg-gradient-secondary border-radius-lg">
                      <h3 class="text-gradient text-dark mb-0 mt-2">REAL TIME EXPERTS AS TRAINERS</h3>

                      <p>
                        You will learn from industry experts at Groot Academy who are passionate about imparting their knowledge to students. Receive Direct Mentoring from the Professionals.
                      </p>

                    </div>
                    <div class="col-lg-4">
                      <h3 class="text-gradient text-primary mb-0 mt-2">LIVE PROJECT
                      </h3>
                      <p>Have the chance to work on real-world projects that will deepen your experience. Improve your chances of being hired by showcasing your project experience!</p>

                    </div>
                    <div class="col-lg-4 bg-gradient-secondary border-radius-lg">
                      <h3 class="text-gradient text-dark mb-0 mt-2">CERTIFICATION
                      </h3>
                      <p>Get Groot Academy Certification. Be Prepared to Pass Worldwide Certifications as well.</p>

                    </div>
                    <div class="col-lg-4">
                      <h3 class="text-gradient text-primary mb-0 mt-2">REASONABLE FEES
                      </h3>
                      <p>The course fee at Grppt Academy is not only reasonable; you also have the choice to pay it in installments. "Quality at aN affordable Price" is our credo.</p>

                    </div>
                    <div class="col-lg-4 bg-gradient-secondary border-radius-lg">
                      <h3 class="text-gradient text-dark mb-0 mt-2">FLEXIBILITY
                      </h3>
                      <p>You get Maximum Flexibility at Groot Academy. Classroom or Online Training? Early in the day or late at night? Weekends or Workdays? Fast Track or Average Speed? - Pick the solution that best suits your needs.
                      </p>

                    </div>
                    <div class="col-lg-4">
                      <h3 class="text-gradient text-primary mb-0 mt-2">PLACEMENT ASSISTANCE
                      </h3>
                      <p>To assist you to take advantage of opportunities to enhance your career, team up with more than 150 small and medium-sized enterprises and enter into partnerships with them.
                      </p>

                    </div>
                  </div>
                </div>
              </section>
              <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->
            </div>
          </div>
        </div>

        <div class="mb-7 w-200 text-center">

          <h3>JOB ROLES AFTER DOING DIGITAL MARKETING COURSE JAIPUR
          </h3>
          <h5>There are more than 30+ modules that open more than 30+ career roles after completing digital marketing training in Jaipur</h5>
        </div>



        <section class="my-0 py-0">

          <div class="container">
            <div class="container">
              <div class="row align-items-center">

                <div class="col-lg-4 ms-auto me-auto p-lg-2  mt-1">
                  <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #0c4e99 50%, #0c4e99 50%);">
                    <div class="full-background" style="background-image: url('./assets2/img/logo.jpg')"></div>
                    <div class="card-body pt-3 text-center">
                      <h4 class="text-white">SEO SPECIALIST
                      </h4><br><br><br>
                      <p>You'll learn how to improve website traffic and rank well in search engine results in pages by identifying strategies, approaches, and tactics.</p>
                    </div>
                  </div>

                </div>
                <div class="col-lg-4 ms-auto me-auto p-lg-2  mt-1">
                  <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #0c4e99 50%, #0c4e99 50%);">
                    <div class="full-background" style="background-image: url('./assets2/img/logo.jpg')"></div>
                    <div class="card-body pt-0 text-center">

                      <h4 class="up mb-0 text-white"> SOCIAL MEDIA MANAGER</h4><br>
                      <p>The responsibilities of social media managers include developing and administering social media campaigns, offering content, assessing data, and connecting with significant stakeholders in an organization. </p>
                    </div>
                  </div>

                </div>
                <div class="col-lg-4 ms-auto me-auto p-lg-1  mt-1">
                  <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #0c4e99 50%, #0c4e99 50%);">
                    <div class="full-background" style="background-image: url('./assets2/img/logo.jpg')"></div>
                    <div class="card-body pt-4 text-center">

                      <h4 class="up mb-0 text-white"> COPYWRITER</h4>
                      <p>A copywriter is a specialist who creates clear writing for advertisements and marketing materials. They collaborate closely with web and graphic designers to make sure their message is understood.</p>
                    </div>
                  </div>

                </div>
                <div class="col-lg-4 ms-auto me-auto p-lg-2  mt-1">
                  <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #0c4e99 50%, #0c4e99 50%);">
                    <div class="full-background" style="background-image: url('./assets2/img/logo.jpg')"></div>
                    <div class="card-body pt-4 text-center">

                      <h4 class="up mb-0 text-white">EMAIL MARKETER</h4><br>
                      <p>A digital marketer who focuses on creating email campaigns, building email lists, and nurturing prospects through textual communication.</p>
                    </div>
                  </div>

                </div>

                <div class="col-lg-4 ms-auto me-auto p-lg-2  mt-1">
                  <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #0c4e99 50%, #0c4e99 50%);">
                    <div class="full-background" style="background-image: url('./assets2/img/logo.jpg')"></div>
                    <div class="card-body pt-4 text-center">

                      <h4 class="up mb-0 text-white">INBOUND MARKETING</h4>
                      <p>It is a systematic strategy for creating valuable content that fulfills the needs of your target audiences and encourages lifelong client connections.</p>
                    </div>
                  </div>

                </div>
                <div class="col-lg-4 ms-auto me-auto p-lg-2 mt-1">
                  <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #0c4e99 50%, #0c4e99 50%);">
                    <div class="full-background" style="background-image: url('./assets2/img/logo.jpg')"></div>
                    <div class="card-body pt-4 text-center">

                      <h4 class="up mb-0 text-white">AFFILIATE MARKETERS</h4><br>
                      <p>Affiliate marketers make money online each time a customer purchases a product based on your suggestion</p>
                    </div>
                  </div>

                </div>


              </div>
            </div>

        </section>




        <br><br>
        <h3 class="text-center">FREQUENTLY ASKED QUESTIONS</h3>

        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
          <div class="container border-bottom">
            <div class="row py-3">
              <div class="col-lg-12 text-start">
                <p class="lead text-primary pt-1 mb-0">1. ABOUT THE DIGITAL MARKETING COURSE.</p>
              </div>


            </div>
          </div>
          <div class="lead text-primary pt-5 mb-5">
            <h6>The best digital marketing training in Jaipur is offered by Groot Academy. With modern exhibiting skills in the world of digital media, advance your career in the Digital Marketing Course. Study advanced digital marketing with a live project and a thorough training curriculum based on theory and practical. We show you how to use SEO to raise the ranking of your website in search engine results. How to use PPC and social media marketing to promote brand awareness and sales of a product or service. Using Google Analytics and Google Ads to monitor the actions of the target audience you have defined.
            </h6>
          </div>
        </div>


        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
          <div class="container border-bottom">
            <div class="row py-3">
              <div class="col-lg-12 text-start">
                <p class="lead text-primary pt-1 mb-0">2. WHAT ARE THE OBJECTIVES OF OUR DIGITAL MARKETING COURSE ?.</p>
              </div>


            </div>
          </div>
          <div class="lead text-primary pt-5 mb-5">
            <h6 class="m-4">a . Recognize the digital marketing approach <br>
              b. Google Analytics expert for monitoring website traffic.<br>
              c. Gain expertise across all social media platforms, including Facebook, Instagram, YouTube, and others.<br>
              d. How to generate money writing blogs or using affiliate marketing as a freelancer.<br>
              E. How to build advertisements for social media platforms and search engine result pages (SERP).
              F. And much more.

            </h6>
          </div>
        </div>


        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
          <div class="container border-bottom">
            <div class="row py-3">
              <div class="col-lg-12 text-start">
                <p class="lead text-primary pt-1 mb-0">3. WHO SHOULD GO FOR THIS DIGITAL MARKETING COURSE ?</p>
              </div>


            </div>
          </div>
          <div class="lead text-primary pt-5 mb-5">
            <h6 class="m-4">Everyone (student, professional, housewife, etc) who is enthusiastic about working in the field of digital marketing and has an interest in pursuing such a career.
              If you want to work for yourself as a freelancer providing digital marketing services, consider blogging or affiliate marketing as ways to make money online. The ideal place for you to master the digital marketing course institute in Jaipur is Groot Academy.

            </h6>
          </div>
        </div>



        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
          <div class="container border-bottom">
            <div class="row py-3">
              <div class="col-lg-12 text-start">
                <p class="lead text-primary pt-1 mb-0">4. WHAT ARE THE PREREQUISITES FOR THIS DIGITAL MARKETING COURSE?</p>
              </div>


            </div>
          </div>
          <div class="lead text-primary pt-5 mb-5">
            <h6 class="m-4"> a. There is no requirement for prior experience.
              b. There are no technical requirements (any stream).
              c. a readiness to practice and learn.

              <br>
              One can join a digital marketing institute jaipur with no prerequisites.


            </h6>
          </div>
        </div>

        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
          <div class="container border-bottom">
            <div class="row py-3">
              <div class="col-lg-12 text-start">
                <p class="lead text-primary pt-1 mb-0">5. WHAT IF I MISS CLASS ?</p>
              </div>


            </div>
          </div>
          <div class="lead text-primary pt-5 mb-5">
            <h6> "You'll never be late for a class at Groot Academy!<br>
              Choose from one of the following two possibilities:


              <br>
              a. Check out the class's recorded session in your LMS.
              b. You can join any other live batch to make up the missing session."



            </h6>
          </div>
        </div>

        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
          <div class="container border-bottom">
            <div class="row py-3">
              <div class="col-lg-12 text-start">
                <p class="lead text-primary pt-1 mb-0"> 6. CAN I ATTEND A DEMO SESSION BEFORE ENROLLING IN THE COURSE ?</p>
              </div>


            </div>
          </div>
          <div class="lead text-primary pt-5 mb-5">
            <h6> You can stop here if you've seen any of our sample class recordings. When you enroll, you and we make a promise to one another: you'll learn well, and we'll give you the greatest learning environment we can. Because of the knowledgeable and supportive teachers, committed Personal Learning Managers, and interactions with your peers, our sessions are a vital component of your learning. Get thorough education as opposed to a demo session. In any situation, you are protected by the Groot Academy Promise, our policy of a 100% return with no questions asked.


            </h6>
          </div>
        </div>


      </div>
    </div>
  </div>

  <footer>
    <?php include "./footer.php" ?>
  </footer>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="../../assets2/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../../assets2/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../../assets2/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../assets2/js/plugins/prism.min.js"></script>
  <script src="../../assets2/js/plugins/highlight.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../../assets2/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../../assets2/js/soft-design-system.min.js?v=1.0.9" type="text/javascript"></script>
</body>

</html>