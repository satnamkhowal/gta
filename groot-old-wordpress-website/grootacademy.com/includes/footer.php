<!-- Newsletter section start -->
<!-- <div class="rs-newsletter style1 green-color mb--90 sm-mb-0 sm-pb-70">
        <div class="container">
            <div class="newsletter-wrap">
                <div class="row y-middle">
                    <div class="col-lg-6 col-md-12 md-mb-30">
                        <div class="content-part">
                            <div class="sec-title">
                                <div class="title-icon md-mb-15">
                                    <img src="<?php echo FINAL_WEBSITE_URL; ?>assets/images/white-newsletter3.png" alt="images">
                                </div>
                                <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <form  onsubmit="return validateForm()" class="newsletter-form">
                            <input type="email" name="email" placeholder="Enter Your Email" required="">
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Newsletter section end -->

<style>
    .course-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
    }

    .course {
        background-color: #282828;
        padding: 10px 20px;
        border-radius: 5px;
        text-align: center;
    }

    .course a {
        text-decoration: none;
        color: #fff;
        transition: color 0.3s ease;
    }

    .course a:hover {
        color: #0C8B51;
    }

    .course::before {
        content: '|';
        display: inline-block;
        margin-right: 10px;
        font-size: 20px;
        color: #0C8B51;
    }

    .course:first-child::before {
        content: '';
        margin-right: 0;
    }
</style>


<footer id="rs-footer" class="rs-footer home9-style home12-style">
    <div class="footer-top">
        <div class="container-fluid ps-3 pe-3">

            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <a href="tel:+91-70146 92039"><button class="btn btn-success"><i class="fa fa-phone"
                                aria-hidden="true"></i> Call Now</button></a>

                    <div class="footer-logo mb-30">
                        <a href="<?php echo FINAL_WEBSITE_URL; ?>index">
                            <!-- <img src="<?php echo FINAL_WEBSITE_URL; ?>assets/images/logo-green.png" alt=""> -->
                        </a>
                    </div>
                    <div class="textwidget pr-60 md-pr-15">
                        <p>We are a next generation IT training institute. We provide all kinds of industrial training
                            in computer science technologies.</p>
                    </div>
                    <ul class="footer_social">
                        <li>
                            <a href="<?php echo FINAL_WEBSITE_URL; ?>#" target="_blank"><span><i
                                        class="fa fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="<?php echo FINAL_WEBSITE_URL; ?># " target="_blank"><span><i
                                        class="fa fa-twitter"></i></span></a>
                        </li>

                        <li>
                            <a href="<?php echo FINAL_WEBSITE_URL; ?># " target="_blank"><span><i
                                        class="fa fa-pinterest-p"></i></span></a>
                        </li>
                        <li>
                            <a href="<?php echo FINAL_WEBSITE_URL; ?># " target="_blank"><span><i
                                        class="fa fa-google-plus-square"></i></span></a>
                        </li>
                        <li>
                            <a href="<?php echo FINAL_WEBSITE_URL; ?># " target="_blank"><span><i
                                        class="fa fa-instagram"></i></span></a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h3 class="widget-title">Address</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">122/66 Vijay path, Madhyam Marg, Mansarovar, Rajasthan 302020</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:+91 8233266276">+91 8233266276</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:support@rstheme.com">info@grootacademy.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                    <h3 class="widget-title">Courses</h3>
                    <ul class="site-map">
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">C and C++ programming</a></li>
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">Python programming</a></li>
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">Core Java</a></li>
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">Advance Java</a></li>
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">Spring & Hibernate</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                    <h3 class="widget-title">Courses</h3>
                    <ul class="site-map">
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">Web Desinging</a></li>
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">Graphics Desinging</a></li>
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">ReactJS + Redux</a></li>
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">NodeJS + ExpressJS</a></li>
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">Spring & Hibernate</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-20">
                    <div class="copyright">
                        <p>&copy; 2023 All Rights Reserved. Developed By <a
                                href="<?php echo FINAL_WEBSITE_URL; ?>http:/grootsoftware.com/">Groot Software</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 text-right md-text-left">
                    <ul class="copy-right-menu">
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">Event</a></li>
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">Blog</a></li>
                        <li><a href="<?php echo FINAL_WEBSITE_URL; ?>#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid  h-auto" style="background-color: black;">

        <div class="row">
            <div class="d-flex justify-content-between h-auto p-5 flex-wrap">

                <div class="text-light d-flex justify-content-betwen gap-3 flex-column" style="width:200px ;">
                    <div>

                        <h5 class="text-light"> Follow us </h5>
                    </div>

                    <div class="w-75">


                        <ul class="d-flex justify-content-space-evenly ps-0 gap-3 flex-wrap">
                            <li class="  bg-dark  rounded-circle hoverfa " style="width: 33px;height:33px ;background-color: #55ACEE;">
                                <a class="ms-2 " href="https://www.facebook.com/GrootAcademy/" target="_blank"><span><i
                                            class="fa fa-facebook mt-1" style="color: #8D8D8D; font-size:25px"></i></span></a>
                            </li>
                            <li class=" bg-dark rounded-circle hoverfa" style="width: 33px;height:33px">
                                <a class="ms-2" href="https://x.com/GrootAcademy" target="_blank"><span><i
                                            class="mt-1 fa fa-twitter" style="color: #8D8D8D;font-size:25px"></i></span></a>
                            </li>

                            <li class=" bg-dark rounded-circle hoverfa" style="width: 33px;height:33px">
                                <a class="ms-2" href="<?php echo FINAL_WEBSITE_URL; ?># " target="_blank"><span><i
                                            class="mt-1 fa fa-pinterest-p" style="color: #8D8D8D;font-size:25px"></i></span></a>
                            </li>

                            <li class=" bg-dark rounded-circle" style="width: 33px;height:33px">
                                <a class="ms-2" href="https://www.instagram.com/groot.academy/" target="_blank"><span><i
                                            class="mt-1 fa fa-instagram" style="color: #8D8D8D;font-size:25px"></i></span></a>
                            </li>

                        </ul>
                    </div>

                </div>
                <div class="text-light" style="width:175px;">
                    <div>
                        <h5 class="text-light">Company</h5>
                    </div>
                    <div>
                        <ul class="ps-0">
                            <a href="<?php echo FINAL_WEBSITE_URL; ?>about-us.php" target="_blank">
                                <li style="color: #8D8D8D;" class="mt-4 mb-1">About Us</li>
                            </a>
                            <a href="<?php echo FINAL_WEBSITE_URL; ?>carear-option-with-javascript.php" target="_blank">

                                <li style="color: #8D8D8D;" class="my-1">Careers</li>
                            </a>
                            <a href="<?php echo FINAL_WEBSITE_URL; ?>#" target="_blank">
                                <li style="color: #8D8D8D;" class="my-1">Newsroom</li>

                            </a>
                            <a href="<?php echo FINAL_WEBSITE_URL; ?>#" target="_blank">
                                <li style="color: #8D8D8D;" class="my-1">Alumni speak</li>

                            </a>
                            <a href="<?php echo FINAL_WEBSITE_URL; ?>#" target="_blank">
                                <li style="color: #8D8D8D;" class="my-1">Grivance redressal</li>

                            </a>
                            <a href="<?php echo FINAL_WEBSITE_URL; ?>contact-us.php" target="_blank">

                                <li style="color: #8D8D8D;" class="my-1">Contact us</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="text-light" style="width:175px;">
                    <div>

                        <h5 class="text-light">Work With us</h5>
                    </div>
                    <div>
                        <ul class="ps-0">
                            <li style="color: #8D8D8D;" class="mt-4 mb-1">Become an Instructor</li>
                            <li style="color: #8D8D8D;" class="my-1">Blog as Guest</li>
                        </ul>
                    </div>
                </div>
                <div class="text-light" style="width:175px;">
                    <div>

                        <h5 class="text-light">Discover</h5>

                    </div>
                    <div>
                        <ul class="ps-0">
                            <li style="color: #8D8D8D;" class="mt-4 mb-1">Free Courses</li>
                            <li style="color: #8D8D8D;" class="my-1">Skillup sitemap</li>
                            <li style="color: #8D8D8D;" class="my-1">Resources</li>
                            <li style="color: #8D8D8D;" class="my-1">RSS Feed</li>
                            <li style="color: #8D8D8D;" class="my-1">City Sitemap</li>
                        </ul>
                    </div>
                </div>
                <div class="text-light" style="width:175px;">
                    <h5 class="text-light">For Business</h5>
                    <div>
                        <ul class="ps-0">
                            <li style="color: #8D8D8D;" class="mt-4 mb-1">Corporate Training</li>
                        </ul>
                    </div>
                </div>
                <div class="text-light" style="width:175px;">
                    <div>

                        <h5 class="text-light">Learn On the Go!</h5>
                    </div>
                    <div>
                        <button class="bg-dark rounded-4 p-1 py-2 mt-3">
                            <a href="https://play.google.com/store/apps/details?id=co.ted.mpepg" target="_blank">
                                <i
                                    class="fa fa-android   border-none " style="color: #8D8D8D; font-size:15px"> Get the Android App </i></a>
                        </button>
                    </div>

                </div>


            </div>
            <hr>

        </div>
    </div>



    <div class="container-fluid " style="background-color: black;">


        <div class="container pt-3 pb-5">
            <p style="font-size: 23px;color:white">WEB DEVELOPMENT COURSES</p>
            <div class="course-list pb-5 mb-5">

                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/nodejs.php">Full Stack with Node JS </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/react-js.php">React JS </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/angular-js.php">Angular JS</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/vue-js.php">VUE JS</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/java-script.php">JavaScript </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/web-designing.php">Web Designing </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/nodejs.php">Node.js Tutorial</a>
                </div>


                <!-- <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/.php">Git Tutorial</a>
                </div> -->


                <!-- <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/.php">CSS Tutorial</a>
                </div> -->
            </div>
            <p style="font-size: 23px;color:white">PROGRAMMING LANGUAGE COURSES</p>
            <div class="course-list pb-5 mb-5">

                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/c-programming.php">C Programming </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/cpp-programming.php">C++ Programming </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/java.php">JAVA Programming</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/python-programming.php">Python Programming</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/dsa.php">Data Structure and Alogrithm </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/android-development.php">Android Kotlin</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/ios-development.php">iOS SWIFT </a>
                </div>

            </div>



            <p style="font-size:23px; color:white;">JAVA COURSES</p>
            <div class="course-list pb-5 mb-5">

                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/core-java-j2se.php">Core Java </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/advance-java-j2ee.php">Advance Java </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/java-framework.php">Java Framework</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/learn-microservices-architecture-with-java-spring-boot.php">MicroServices Architecture with Java</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/spring-framework.php">Spring </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/spring-and-hibernate.php">Hibernate </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/jpa.php">JPA</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/spring-boot.php">Spring Boot </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/spring-ai.php">Spring AI </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/helidon.php">Helidon</a>
                </div>

                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/hadoop.php">Hadoop </a>
                </div>




            </div>


            <p style="font-size:23px; color:white;">PYTHON PROGRAMMING</p>
            <div class="course-list pb-5 mb-5">

                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/python-programming.php">Pyhton Programming </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/data-analyst.php">Data Analyst </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/data-science.php">Data Science</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/machine-learning.php">Machine Learning</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/artificial-intelligence.php">Artificial Intelligence</a>
                </div>


            </div>


            <p style="font-size:23px; color:white;">JAVA SCRIPT DEVELOPMENT</p>
            <div class="course-list pb-5 mb-5">

                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/core-javascript.php">Core JavaScript </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/advance-javascript.php">Advance JavaScript </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/nodejs.php">Node.js Tutorial</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/react-js.php">React JS </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/angular-js.php">Angular JS</a>
                </div>

                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/vue-js.php">VUE JS</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/gatsby-js.php">Gatsby JS</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/ember-js.php">Ember JS</a>
                </div>

                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/backbone-js.php">Backbone JS </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/mithril-js.php">Mithril JS </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/alpine-js.php">Alpine JS</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/riot-js.php">Riot JS </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/inferno-js.php">Inferno JS </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/stencil-js.php">Stencil JS</a>
                </div>

                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/marko-js.php">Marko JS </a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/nuxt-js.php">Nuxt JS </a>
                </div>



            </div>


            <br><br>



            <p style="font-size: 23px;color:white">Trending Resources</p>
            <div class="course-list pb-5 ">

                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/python-programming.php">Python Tutorial</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/java-script.php">JavaScript Tutorial</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/java.php">Java Tutorial</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/angular-js.php">Angular Tutorial</a>
                </div>
                <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/nodejs.php">Node.js Tutorial</a>
                </div>

                <!-- <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/.php">Git Tutorial</a>
                </div> -->


                <!-- <div class="course">

                    <a target="_blank" href="<?php echo FINAL_WEBSITE_URL; ?>courses/.php">CSS Tutorial</a>
                </div> -->
            </div>
        </div>
    </div>




    </footer.php>
    <!-- Footer End -->


    <!-- start scrollUp  -->
    <div id="scrollUp" class="green-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->


    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form onsubmit="return validateForm()">
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https:/unpkg.com/aos@next/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 2000
    });
</script>

<!-- modernizr js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/jquery.min.js"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/bootstrap.min.js"></script>
<!-- Menu js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/rsmenu-main.js"></script>
<!-- op nav js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/jquery.nav.js"></script>
<!-- owl.carousel js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/owl.carousel.min.js"></script>
<!-- Slick js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/slick.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/isotope.pkgd.min.js"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/imagesloaded.pkgd.min.js"></script>
<!-- wow js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/wow.min.js"></script>
<!-- Skill bar js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/skill.bars.jquery.js"></script>
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/jquery.counterup.min.js"></script>
<!-- counter top js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/waypoints.min.js"></script>
<!-- video js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/jquery.mb.YTPlayer.min.js"></script>
<!-- magnific popup js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- tilt js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/tilt.jquery.min.js"></script>
<!-- plugins js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/plugins.js"></script>
<!-- contact form js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/contact.form.js"></script>
<!-- main js -->
<script src="<?php echo FINAL_WEBSITE_URL; ?>assets/js/main.js"></script>


<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        initialCountry: "in",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });

    function validateForm() {
        const nameInput = document.getElementById('name').value.trim();
        const emailInput = document.getElementById('email').value.trim();
        const phoneInput = document.getElementById('phone').value.trim();

        const invalidNamePattern = /[^a-zA-Z\s]/; // Ignore names with characters that aren't letters or spaces
        const phonePattern = /^(\+91[-\s]?)?[6-9]\d{9}$/; // Matches Indian numbers with or without +91, spaces, or hyphens
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Basic email format

        if (invalidNamePattern.test(nameInput)) {
            alert('Please enter a valid name (letters and spaces only).');
            return false;
        }

        if (!emailPattern.test(emailInput)) {
            alert('Please enter a valid email address.');
            return false;
        }

        if (!phonePattern.test(phoneInput)) {
            alert('Please enter a valid Indian phone number.');
            return false;
        }

        return true; // If all validations pass
    }
</script>

</body>



</html>