<?php
putenv('GA_BASE_PATH=/gta');
require_once __DIR__ . '/../includes/course-catalog.php';
$cases = [
    ga_url('courses.php') === '/gta/courses.php',
    ga_asset('css/groot-course-page.css') === '/gta/assets/css/groot-course-page.css',
    ga_course_redirect_target('/gta/courses/?utm_source=test') === 'courses.php',
    ga_course_redirect_target('/gta/courses/mern-stack-course-jaipur/') === 'mern-stack-course-jaipur.php',
    ga_course_redirect_target('/courses/') === null,
    ga_course_redirect_target('/gta/newsite/courses/') === null,
    ga_course_redirect_target('/gta/mern-stack-course-jaipur.php') === null,
];
if (in_array(false, $cases, true)) { throw new RuntimeException('Base path handling failed'); }
echo "PASS: 7 subdirectory path checks.\n";
