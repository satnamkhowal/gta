<?php
// Run against an Apache instance serving the repository, not PHP's static dev server.
require_once __DIR__ . '/../includes/course-catalog.php';
$root = dirname(__DIR__);
$checks = 0;
function check(bool $ok, string $message): void {
    global $checks;
    $checks++;
    if (!$ok) { throw new RuntimeException($message); }
}
function request(string $url, string $method = 'GET'): array {
    $ctx = stream_context_create(['http' => ['method' => $method, 'ignore_errors' => true, 'follow_location' => 0, 'timeout' => 15]]);
    $body = file_get_contents($url, false, $ctx);
    $headers = $http_response_header ?? [];
    preg_match('~HTTP/\S+ (\d+)~', $headers[0] ?? '', $match);
    $location = null;
    foreach ($headers as $header) {
        if (stripos($header, 'Location: ') === 0) { $location = substr($header, 10); }
    }
    return [(int) ($match[1] ?? 0), $body ?: '', $location];
}
$courses = ga_courses();
check(count($courses) === 12, 'Expected twelve priority courses');
$aliases = [];
foreach ($courses as $course) {
    check(is_file($root . '/' . ga_course_path($course)), 'Missing course entry: ' . $course['slug']);
    check(is_file($root . '/blogs/' . $course['blog'] . '/index.php'), 'Missing related guide');
    check(count($course['modules']) >= 6, 'Incomplete curriculum');
    if ($course['image'] !== '') { check(is_file($root . ga_course_image($course)), 'Missing course image'); }
    foreach ($course['aliases'] as $alias) {
        $key = trim($alias, '/');
        check(!isset($aliases[$key]), 'Conflicting alias: ' . $key);
        $aliases[$key] = ga_course_path($course);
    }
}
foreach (ga_course_aliases() as $alias => $target) {
    check(is_file($root . '/' . $target), 'Redirect target missing: ' . $target);
    check($alias !== $target, 'Redirect self-loop');
    check(ga_course_redirect_target('/' . $target) === null, 'Canonical redirects');
}
foreach (['/newsite/python-programming-course-jaipur.php', '/unmapped-course', '/wp-admin/', '/%2fpython-programming-course-jaipur', '/../python-programming-course-jaipur', '/legacy-page.php?legacy=courses', '/courses/../../other'] as $bad) {
    check(ga_course_redirect_target($bad) === null, 'Unsafe or unknown route mapped: ' . $bad);
}
$base = rtrim($argv[1] ?? 'http://127.0.0.1:8765', '/');
$assets = [];
foreach (array_merge(array_map('ga_course_path', array_values($courses)), ['courses.php']) as $page) {
    [$status, $html] = request($base . '/' . $page);
    check($status === 200, 'HTTP failure: ' . $page . ' ' . $status);
    check(!preg_match('~(?:Warning|Fatal error|Parse error):~', $html), 'PHP diagnostic in ' . $page);
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    $xp = new DOMXPath($dom);
    check($xp->query('//h1')->length === 1, 'Expected one H1: ' . $page);
    check($xp->query('//title')->length === 1, 'Missing or duplicated title');
    $canonical = $xp->query('//link[@rel="canonical"]');
    check($canonical->length === 1 && $canonical[0]->getAttribute('href') === 'https://grootacademy.com/' . $page, 'Incorrect canonical: ' . $page);
    foreach ($xp->query('//script[@type="application/ld+json"]') as $script) {
        check(is_array(json_decode($script->textContent, true, 512, JSON_THROW_ON_ERROR)), 'Invalid schema');
    }
    foreach ($xp->query('//img[@src] | //script[@src] | //link[@rel="stylesheet"]') as $asset) {
        $url = $asset->getAttribute($asset->tagName === 'link' ? 'href' : 'src');
        if (!preg_match('~^(?:https?:)?//|^data:~', $url)) { $assets[ltrim($url, '/')] = true; }
    }
    foreach ($xp->query('//main//a[@href]') as $link) {
        $url = $link->getAttribute('href');
        if (preg_match('~^(?:https?:|mailto:|tel:)~', $url)) { continue; }
        $parts = parse_url($url);
        $path = ltrim($parts['path'] ?? '', '/');
        if (isset($parts['fragment']) && $path === $page) {
            check($xp->query('//*[@id="' . $parts['fragment'] . '"]')->length === 1, 'Missing anchor: ' . $url);
        } elseif ($path !== '' && $path !== 'best-back-end-development-course-with-php-in-jaipur.php') {
            check(is_file($root . '/' . $path) || is_file($root . '/' . $path . '/index.php'), 'Broken content link: ' . $url);
        }
    }
}
foreach (array_keys($assets) as $asset) {
    check(is_file($root . '/' . $asset), 'Missing shared asset: ' . $asset);
    check(request($base . '/' . $asset, 'HEAD')[0] === 200, 'Asset HTTP failure: ' . $asset);
}
foreach (ga_course_aliases() as $alias => $target) {
    foreach (['GET', 'HEAD'] as $method) {
        [$status, , $location] = request($base . '/' . $alias . '?utm_source=qa', $method);
        check($status === 301 && $location === '/' . $target, 'Incorrect redirect: ' . $alias . ' ' . $method . ' ' . $status);
    }
}
check(request($base . '/not-a-real-course-qa/')[0] === 404, 'Unknown routes should remain 404');
check(request($base . '/best-back-end-development-course-with-php-in-jaipur.php')[0] === 200, 'Retained PHP course link failed');
check(request($base . '/groot-old-wordpress-website/grootacademy.com/wp-config.php')[0] === 403, 'Backup protection failed');
echo "PASS: $checks checks; 12 course pages, catalogue, " . count(ga_course_aliases()) . " aliases, " . count($assets) . " assets.\n";
