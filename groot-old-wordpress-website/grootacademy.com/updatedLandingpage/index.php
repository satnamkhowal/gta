    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .btn-primary {
                background-image: linear-gradient(310deg, #0c4e99 0%, #0c4e99 100%);
            }

            .text-primary {
                background-image: linear-gradient(310deg, #0c4e99 0%, #0c4e99 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .text-primary1 {
                background: -webkit-linear-gradient(#FFFF, #555);
                font-size: 40px;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            /* popup */
            .popup {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.7);
                z-index: 9999;
            }

            .popup-content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: white;
                padding: 20px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
                box-shadow: 0px 0px 10px 1px #0c4e99;

                /* background-image: linear-gradient(#0c4e99, #0c4e99); */

            }

            .close {
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 24px;
                cursor: pointer;
            }

            .btn {
                background-image: linear-gradient(#0c4e99, #0c4e99);
                color: #FFF;
            }
        </style>
    </head>

    <body>
        <header id="header-1">
            <div class="header-1">
                <h1 class="logo">
                    <img src="./img/groot.png" width="200px">
                </h1>
            </div>
        </header>



        <!-- -------------------------page-1------------------ -->
        <div id="containr-1">
            <div class="containr-1">
                <div class="containr-1-box-1 mt-5">
                    <!-- <span><i class="fa-solid fa-bars icon-1"></i></span> -->
                </div>
                <div class="containr-1-box-2">
                    <div class="containr-1-box-2-A">
                        <!-- <h1 class="logo"> -->
                        <!-- <img src="./img/groot.png" width="200px"> -->
                        <!-- </h1> -->
                        <h1 class=""><b>Ready to Take Your Programming Skills to the Next Level? Sign Up for Our Programming Language
                                Training Institute.</b></h1>
                        <h3 class="">Rated 5/5 (2700+ Reviews)</h3>
                        <span>
                            <i class=" fa-solid fa-star text-primary"></i>
                            <i class="fa-solid fa-star text-primary"></i>
                            <i class="fa-solid fa-star text-primary"></i>
                            <i class="fa-solid fa-star text-primary"></i>
                            <i class="fa-solid fa-star text-primary"></i>

                        </span>

                        <p>Learn in-demand languages and accelerate your career growth. Unleash your coding potential and
                            build innovative projects</p>
                        <h5><a href="" style="background-image: linear-gradient(310deg, #0c4e99 0%, #0c4e99 100%)">Get Free 7 Demo Sessions</a></h5>

                    </div>

                    <div class="containr-1-box-2-B" style=" height: 100%; border-radius: 50%  ;padding: 100px; background-image: linear-gradient(310deg, #0c4e99 0%, #0c4e99 100%);">
                        <form  onsubmit="return validateForm()" action="/action_page" method="post">
                            <div class="containr-1-box-2-B-A">
                                <input type="text" style="border: 1px solid white" placeholder="Name " name="uname" required>
                                <input type="text" style="border: 1px solid white" placeholder="Email " name="uname" required>
                                <input type="password" style="border: 1px solid white" placeholder="number" name="number" required>

                                <button type="submit">Submit</button>
                            </div>
                            <div class="containr-1-box-2-B-B">
                                <span>
                                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                                    <a href=""><i class="fa-brands fa-google-plus"></i></a>
                                </span>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>



        <!-- -----------------------page-2------------------------ -->
        <br><br>
        <div style=" display: flex; flex-wrap: wrap; justify-content: center; justify-content: space-around;">
            <div class="btn text-light" style="padding : 10px; background-image: linear-gradient(310deg, #0c4e99 0%, #0c4e99 100%);">
                Java
            </div>
            <div class="btn text-light" style="padding : 10px; background-image: linear-gradient(310deg, #0c4e99 0%, #0c4e99 100%);">
                Java Script
            </div>
            <div class="btn text-light" style="padding : 10px; background-image: linear-gradient(310deg, #0c4e99 0%, #0c4e99 100%);">

                C / C++
            </div>
            <div class="btn text-light" style="padding : 10px; background-image: linear-gradient(310deg, #0c4e99 0%, #0c4e99 100%);">

                DSA
            </div>
            <div class="btn text-light" style="padding : 10px; background-image: linear-gradient(310deg, #0c4e99 0%, #0c4e99 100%);">

                MERN
            </div>
            <div class="btn text-light" style="padding : 10px; background-image: linear-gradient(310deg, #0c4e99 0%, #0c4e99 100%);">

                MEAN
            </div>
            <div class="btn text-light" style="padding : 10px; background-image: linear-gradient(310deg, #0c4e99 0%, #0c4e99 100%);">

                Python
            </div>

        </div>


        <div id="containr-2">
            <div class="containr-2">
                <div class="containr-2-box-1 mt-5">
                    <h1 class="text-primary">Premium Courses</h1>
                    <p> premium courses are advanced, fee-based educational programs focused on Information Technology. They offer in-depth instruction in areas like programming, cybersecurity, data science, and cloud computing. These courses often provide hands-on experience, expert guidance, and industry-recognized certifications, making them valuable for IT professionals looking to enhance their skills and career prospects.</p>

                </div>

                <div class="containr-2-box-2">
                    <div class="containr-2-box-2-A">
                        <img src="./img/Lady.jpeg" alt="" class="containr-2-box-2-A-img">
                        <div class="containr-2-box-2-A-box">
                            <h1 class="text-primary">Web Desinging Course</h1>
                            <h3 class="text-primary">₹ : 7,000 </h3>
                            <p class="text-primary">Web Desinging Course From Top Industrial Experts</p>

                        </div>

                    </div>

                    <div class="containr-2-box-2-A">
                        <img src="./img/t-2.jpg" alt="" class="containr-2-box-2-A-img">
                        <div class="containr-2-box-2-A-box">
                            <h1 class="text-primary">Web Development</h1>
                            <h3 class="text-primary">₹ : 21,000</h3>
                            <p class="text-primary">Full stack Web Development With NodeJS & Express (MERN)</p>

                        </div>

                    </div>

                    <div class="containr-2-box-2-A">
                        <img src="./img/t-1.jpg" alt="" class="containr-2-box-2-A-img">
                        <div class="containr-2-box-2-A-box">
                            <h1 class="text-primary">Web Development</h1>
                            <h3 class="text-primary">₹ : 30,000 INR</h3>
                            <p class="text-primary">Full stack Web development with java Spring Boot, Hibernate and ReactJS</p>

                        </div>

                    </div>


                    <div class="containr-2-box-2-A">
                        <img src="./img/t-3.jpg" alt="" class="containr-2-box-2-A-img">
                        <div class="containr-2-box-2-A-box">
                            <h1 class="text-primary">programming Language</h1>
                            <h3 class="text-primary">₹ : 10,000</h3>
                            <p class="text-primary">Become programming Expert <br> C and C++ programming, Java, Python, Go Lang</p>

                        </div>

                    </div>

                    <div class="containr-2-box-2-A">
                        <img src="./img/t-4.jpg" alt="" class="containr-2-box-2-A-img">
                        <div class="containr-2-box-2-A-box">
                            <h1 class="text-primary">Frontend Development</h1>
                            <h3 class="text-primary">₹ : 8,000</h3>
                            <p class="text-primary">Front End Development with ReactJS OR AngularJS</p>

                        </div>

                    </div>

                    <div class="containr-2-box-2-A">
                        <img src="./img/t-5.jpg" alt="" class="containr-2-box-2-A-img">
                        <div class="containr-2-box-2-A-box">
                            <h1 class="text-primary">Backend Development</h1>
                            <h3 class="text-primary">₹ : 6,500</h3>
                            <p class="text-primary">Demonstrate the graphic elements of a document or visual</p>

                        </div>

                    </div>

                </div>


            </div>

        </div>

        <!-- -------------------------page-3---------------------- -->
        <div id="containr-3">
            <div class="containr-3">
                <div class="containr-3-box-1">
                    <div class="containr-3-box-1-A btn-primary">
                        <h1 class="text-primary1">Our Achievements</h1>
                        <p style="color:#FFFF" class="mt-5"><b>High Certification Success Rates:</b> Groot Academy takes pride in its consistently high certification pass rates. Our students regularly excel in industry-recognized exams, demonstrating the effectiveness of our courses and the commitment of our instructors.</p>
                        <h5><a href="" class="text-light btn-primary">Learn More</a></h5>

                    </div>

                    <div class="containr-3-box-1-A box-2">
                        <i class="fa fa-star text-primary" style="color: #0c4e99;"></i>
                        <h1 class="text-primary">Our Achievements</h1>
                        <p><b>Industry Partnerships:</b> We have forged strong partnerships with leading companies in the IT and tech industry. These collaborations enable us to provide our students with valuable networking opportunities, internships, and access to real-world projects, enhancing their career prospects.</p>
                        <h5><a href="" class="text-light btn-primary">Learn More</a></h5>

                    </div>

                    <div class="containr-3-box-1-A  box-3">
                        <i class="fa fa-award text-primary "></i>
                        <h1 class="text-primary">Our Achievements</h1>
                        <p><b>Student Success Stories:</b> Groot Academy has a track record of producing success stories. Many of our graduates have secured prestigious positions in top tech firms or have launched their successful startups. These achievements highlight the tangible impact of our education on students' careers.</p>
                        <h5><a href="" class="text-light btn-primary">Learn More</a></h5>

                    </div>

                </div>
            </div>
        </div>
        <!-- -------------------page-4------------------------- -->
        <div id="containr-4">
            <div class="containr-4">
                <div class="containr-4-box-1">
                    <div class="containr-4-box-1-A">
                        <h1 class="text-primary"><b>Premium Courses</b></h1>
                        <p> premium courses are advanced, fee-based educational programs focused on Information Technology. They offer in-depth instruction in areas like programming, cybersecurity, data science, and cloud computing. These courses often provide hands-on experience, expert guidance, and industry-recognized certifications, making them valuable for IT professionals looking to enhance their skills and career prospects.</p>
                        <h5><a href="" class="btn-primary">Browse Premium Courses</a></h5>

                    </div>
                    <div class="containr-4-box-1-B">
                        <img src="./img/courcess.jpg" alt="" class="containr-4-box-1-B-img">

                    </div>

                </div>

            </div>

        </div>

        <!-- ---------------------page-5------------------------------ -->
        <div id="containr-5">
            <div class="containr-5">
                <div class="containr-5-box-1">
                    <h1 class="text-primary">Our Faculty</h1>
                    <p>Our esteemed faculty comprises a diverse group of experts in the ever-evolving field of IT. Satname Sir, a seasoned Java Developer, brings deep expertise in programming. Bhaskar Sir, a proficient MERN Stack Developer, enriches our knowledge in web development. Pawan Sir, specializing in React, fuels innovation in front-end technologies. Sandeep Sir's experience as a Software Developer ensures a strong foundation in software engineering. Lastly, Jitin Sir, our Software Architect, guides students toward comprehensive system design. Together, they provide a wealth of knowledge and experience, enriching the educational journey at our institution and preparing students for the dynamic world of IT.</p>
                </div>

                <div class="containr-5-box-2">
                    <!-- <div class="containr-5-box-2-A-box-1">
                        <img src="./img/Lady.jpeg" alt="" class="containr-5-box-2-A-img">

                    </div> -->
                    <div class="containr-5-box-2-A-box-3 btn-primary">
                        <span>
                            <i class="fa fa-star text-primary"></i>
                            <i class="fa fa-star text-primary"></i>
                            <i class="fa fa-star text-primary"></i>
                            <i class="fa fa-star text-primary"></i>
                            <i class="fa fa-star text-primary"></i>
                        </span>
                        <p class="text-light">"Empowering growth through transformative learning, our academy shapes diverse minds for success, contributing to positive societal evolution."</p>
                        <span><img src="./img/satnam_sir.jpg" alt="" class="containr-5-box-2-A-p-img"><span class="text text-light">Company CEO <br>Satnam Singh <span></span>
                    </div>
                    <div class="containr-5-box-2-A-box-2 btn-primary">
                        <span>
                            <i class="fa fa-star text-primary "></i>
                            <i class="fa fa-star text-primary"></i>
                            <i class="fa fa-star text-primary"></i>
                            <i class="fa fa-star text-primary"></i>
                            <i class="fa fa-star text-primary"></i>
                        </span>
                        <p class="text-light">As Software Architect, I shape innovative IT programs, fostering agile minds to lead in dynamic tech realms, driving industry progress.</p>
                        <span><img src="./img/jatin-goyal-sir.jpg" alt="" class="containr-5-box-2-A-p-img"><span class="text text-light">Software Architect <br>Er.Jitin Goyal<span></span>

                    </div>
                    <div class="containr-5-box-2-A-box-2 btn-primary">
                        <span>
                            <i class="fa fa-star text-primary "></i>
                            <i class="fa fa-star text-primary"></i>
                            <i class="fa fa-star text-primary"></i>
                            <i class="fa fa-star text-primary"></i>
                            <i class="fa fa-star text-primary"></i>
                        </span>
                        <p class="text-light">"Nurturing tech talents in our academy equips me to innovate. We drive excellence, preparing for impactful contributions in tech."</p>
                        <span><img src="./img/bhaskar_sir.jpg" alt="" class="containr-5-box-2-A-p-img"><span class="text text-light">Software Engineer <br>Er. Bhaskar yogi<span></span>

                    </div>

                </div>
            </div>
        </div>

        <!-- ----------------------page-6--------------------- -->
        <div class="containr-6">
            <div class="containr-6">
                <div class="containr-6-box-1">
                    <h1 class="text-primary">Our Customers</h1>
                    <p class="text-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit minus quaerat, ex perferendis <br>
                        magnam nobis est obcaecati fuga mollitia illum.</p>

                </div>
                <div class="containr-6-box-2">
                    <img src="./img/freelancer1_goodfirm.png" alt="">
                    <img src="./img/freelancer2_clutch.png" alt="">
                    <img src="./img/freelancer3_extract.png" alt="">
                    <img src="./img/freelancer4_appfutura.png" alt="">
                    <img src="./img/freelancer6_upwork.png" alt="">
                    <img src="./img/freelancer7_freelancer.png" alt="">
                    <img src="./img/freelancer2_clutch.png" alt="">
                    <img src="./img/freelancer3_extract.png" alt="">

                </div>

            </div>

        </div>
        <!-- -------------------------------------page-7----------------------------- -->
        <div class="container-7">
            <div class="container-7">
                <div class="container-7-box-1">
                    <h1 class="text-primary"><b>Contact Us</b></h1>
                </div>
                <div class="container-7-box-2 ">
                    <div class="container-7-box-2-A">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <div class="mt-5">
                                        <h1 class="text-primary">Students Testimonials </h1>
                                        <h4>Watch what our students has to say about the OurCourse and Institution.

                                        </h4>
                                        <div class="d-flex justify-content-center ">
                                            <div>
                                                <video src="./img/jitinvideo.mp4" width="50%" poster="./img/jitinImage.jpg" controls>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-7-box-2-B btn-primary">
                        <label for="text"><b>Name</b></label>
                        <input type="text" placeholder="Enter Your Name" name="text" required>

                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <label for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                        <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                        </label>

                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
                        </p>

                        <div class="clearfix">
                            <button type="submit" class="signupbtn">Sign Up</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

        <!-- ---------------------------------page-8---------------------- -->
        <div id="container-8">
            <div class="container-8">
                <div class="container-8-box-1 mt-5">
                    <h1><img src="./img/groot.png" width="30%"></h1>
                    <p>
                        Welcome to Groot Academy, where we believe that anyone can learn to code. Our mission is to make programming education accessible and affordable for everyone.
                        We offer a wide range of courses, from beginner-friendly programming languages like C++, Java, Python, and JavaScript to advanced topics like Data Science, Artificial Intelligence, and Machine Learning. Our courses are designed to cater to the needs of students of all ages and backgrounds, whether you're a high school student or a working professional looking to upskill.

                        At Groot Academy, we believe that the best way to learn programming is by doing. That's why we provide our students with hands-on practice through live projects and internships during the course. Our expert mentors, who are equally skilled in training students and working in the IT industry, will guide you every step of the way.
                        But we don't just stop at education. We also provide placement assistance in the IT industry, so you can launch your career as a developer with confidence. And the best part? Our courses are the most affordable programming courses in the market, so you don't have to break the bank to start your programming journey.
                        Join us at Groot Academy and take the first step towards becoming a skilled and successful developer.

                        • FAQs: Address common questions and concerns that visitors may have about our
                        courses, such as the level of difficulty and job prospects after completion.!</p>
                </div>
                <div class="container-8-box-2 mt-4" style="background-color:#0D1047">
                    <h1 class="text-light">Get In Touch</h1>
                    <div class="container-8-box-2-main">
                        <div class="container-8-box-2-main-A" style="background-color: #0D1047;">
                            <span><i class="fa-solid fa-location-dot text-light"></i><a href="" class="text-light">
                                    <h6>122/66 Vijay path, Madhyam Marg, Mansarovar, Rajasthan 302020<h6>
                                </a></span>

                        </div>

                        <div class="container-8-box-2-main-A" style="background-color: #0D1047;">
                            <span><i class="fa-solid fa-envelope text-light"></i><a href="" class="text-light">
                                    <h6>Info@grootacademy.com</h6>
                                </a></span>

                        </div>

                        <div class="container-8-box-2-main-A" style="background-color: #0D1047;">
                            <span>
                                <a href="tel:8233266276" class="text-light">
                                    <h6><i class="fa-solid fa-mobile text-light"></i> :+91-8233266276</h6>
                                </a>
                                <br>
                                <a href="tel:" class="text-light">
                                    <h6> <i class="fa-solid fa-phone text-light h5"></i>:+91-
                                    </h6>
                                </a>
                            </span><br>
                            <!-- <span>
                                <h6><i class="fa-solid fa-phone text-light"></i><a href="" class="text-light">()</a></h6>
                            </span> -->


                        </div>

                        <div class="container-8-box-2-main-B">
                            <span>
                                <a href=""><i class="fa-brands fa-twitter text-light"></i></a>
                                <a href=""><i class="fa-brands fa-facebook text-light"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin text-light"></i></a>
                                <a href=""><i class="fa-brands fa-square-instagram text-light"></i></a>
                                <a href=""><i class="fa-brands fa-youtube text-light"></i></a>
                            </span>

                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- -------------------------page-9---------------------- -->
        <!-- <div id="container-9">
            <div class="container-9">
                <h1> Copyright 2023. All Rights Reserved.</h1>
            </div>

        </div> -->

    </body>

    </html>