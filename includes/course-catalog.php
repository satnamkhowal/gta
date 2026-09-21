<?php
require_once __DIR__ . '/site-paths.php';

function ga_courses(): array {
    static $courses;
    if ($courses === null) {
        $courses = [];
        foreach (['programming', 'specialist'] as $batch) {
            $file = __DIR__ . '/course-data/' . $batch . '.json';
            if (!is_file($file)) { continue; }
            foreach (json_decode(file_get_contents($file), true, 512, JSON_THROW_ON_ERROR) as $course) {
                $courses[$course['slug']] = $course;
            }
        }
    }
    return $courses;
}

function ga_course_path(array $course): string {
    return $course['slug'] . '.php';
}

function ga_course_image(array $course): string {
    return $course['image'] === '' ? '' : ga_post_card($course['image']);
}

function ga_course_aliases(): array {
    $aliases = ['courses' => 'courses.php'];
    foreach (ga_courses() as $course) {
        $target = ga_course_path($course);
        $aliases[$course['slug']] = $target;
        foreach ($course['aliases'] as $alias) {
            $alias = trim($alias, '/');
            $aliases[$alias] = $target;
            // The previous bridge accepted a clean equivalent of each PHP URL.
            if (substr($alias, -4) === '.php') {
                $aliases[substr($alias, 0, -4)] = $target;
            }
        }
    }
    return $aliases;
}

function ga_course_redirect_target(string $requestPath): ?string {
    $path = parse_url($requestPath, PHP_URL_PATH);
    if (!is_string($path)) { return null; }
    if (GA_BASE_PATH !== '') {
        if (strpos($path, GA_BASE_PATH . '/') !== 0) { return null; }
        $path = substr($path, strlen(GA_BASE_PATH));
    }
    // Never interpret encoded separators, dot segments, or query input as routes.
    if (preg_match('~%2f|%5c|%00|\\\\|(?:^|/)\.\.(?:/|$)~i', $path)) { return null; }
    return ga_course_aliases()[trim($path, '/')] ?? null;
}
