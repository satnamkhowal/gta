     <!-- Get in tuch -->
     <div class="rs-quick-contact new-style">
         <div class="inner-part mb-50">
             <h2 class="title mb-15">Get In Touch</h2>
             <p><b>Ready to Take the Next Step?</b><br />

                 Embark on a journey of knowledge, skill enhancement, and career advancement with
                 Groot Academy. Contact us today to explore the courses that will shape your
                 future in IT.</p>
         </div>
         <div id="form-messages"></div>
         <form  onsubmit="return validateForm()" method="post" action="./process">
             <div class="row">
                 <div class="col-lg-6 mb-35 col-md-12">
                     <input class=" form-control" type="text" id="name" name="name"
                         placeholder="Name" required="">
                 </div>
                 <div class="col-lg-6 mb-35 col-md-12">
                     <input class=" form-control" type="text" id="email" name="email"
                         placeholder="Email" required="">
                 </div>
                 <div class="col-lg-6 mb-35 col-md-12">
                     <input class=" form-control" type="text" id="phone" name="phone"
                         placeholder="Phone" required="">
                 </div>
                 <div class="col-lg-6 mb-35 col-md-12">
                     <input class=" form-control" type="text" id="subject" name="courseName"
                         placeholder="Course Name in that you are intersted" required="">
                 </div>

                 <div class="col-lg-12 mb-50">
                     <textarea class=" form-control" id="message" name="message"
                         placeholder=" Message" required=""></textarea>
                 </div>
             </div>
             <div class="form-group mb-0">
                 <input class="btn-send form-control btn btn-success" type="submit"
                     value="Submit Now">
             </div>
         </form>
     </div>
     <!-- End Video Box -->
     <div class="course-features-info">
         <h4 class="title mb-15">Our popular Courses</h4>
         <ul>
             <li class="lectures-feature">
                 <i class="fa fa-check-square-o"></i>
                 <span class="label">Front End Development</span>
                 <a href="<?php echo FINAL_WEBSITE_URL; ?>course-front-end-development"><span
                         class="value btn btn-success">Details</span></a>
             </li>

             <li class="quizzes-feature">
                 <i class="fa fa-check-square-o"></i>
                 <span class="label">Back End with java </span>
                 <a href="<?php echo FINAL_WEBSITE_URL; ?>course-bakcend-developemnt-with-java"><span
                         class="value btn btn-success">Details</span></a>
             </li>

             <li class="duration-feature">
                 <i class="fa fa-check-square-o"></i>
                 <span class="label">MERN Stack</span>
                 <a href="<?php echo FINAL_WEBSITE_URL; ?>course-frontend-development-reactjs"><span
                         class="value btn btn-success">Details</span></a>
             </li>

             <li class="assessments-feature">
                 <i class="fa fa-check-square-o"></i>
                 <span class="label">MEAN Stack </span>
                 <a href="<?php echo FINAL_WEBSITE_URL; ?>course-front-end-developemnt-angularjs"><span
                         class="value btn btn-success">Details</span></a>

             </li>

             <li class="students-feature">
                 <i class="fa fa-check-square-o"></i>
                 <span class="label">React Native</span>
                 <a href="<?php echo FINAL_WEBSITE_URL; ?>course-react-native-application"><span
                         class="value btn btn-success">Details</span></a>

             </li>

             <li class="assessments-feature">
                 <i class="fa fa-check-square-o"></i>
                 <span class="label">BackEnd with Python </span>
                 <a
                     href="<?php echo FINAL_WEBSITE_URL; ?>course-bakcend-developemnt-with-python-django"><span
                         class="value btn btn-success">Details</span></a>

             </li>

             <li class="assessments-feature">
                 <i class="fa fa-check-square-o"></i>
                 <span class="label">BackEnd with PHP </span>
                 <a href="<?php echo FINAL_WEBSITE_URL; ?>course-bakcend-developemnt-with-php"><span
                         class="value btn btn-success">Details</span></a>

             </li>
         </ul>
     </div>