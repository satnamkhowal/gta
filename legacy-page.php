<?php
require_once __DIR__ . '/includes/course-catalog.php';
$courseRedirect = ga_course_redirect_target($_SERVER['REQUEST_URI'] ?? '/');
if ($courseRedirect !== null && in_array($_SERVER['REQUEST_METHOD'] ?? 'GET', ['GET', 'HEAD'], true)) {
    header('Location: ' . ga_url($courseRedirect), true, 301);
    exit;
}
require_once __DIR__ . '/migration/legacy-content.php';

$request = $_GET['legacy'] ?? (parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '');
$request = ga_legacy_normalize_request((string) $request);
$resolved = ga_legacy_resolve($request);

if ($resolved === null) {
    http_response_code(404);
    $page = [
        'title' => 'Page Not Found | Groot Academy Jaipur',
        'description' => 'The requested Groot Academy page could not be found.',
        'content' => '<div class="container pt-100 pb-100"><div class="sec-title text-center"><h1 class="title">Page not found</h1><p class="desc">Please explore our courses or contact Groot Academy for help.</p><a class="readon orange-btn" href="/courses.php">Explore Courses</a></div></div>',
        'source' => '',
    ];
} else {
    $page = ga_legacy_page_data($resolved, $request);
}

$canonicalPath = '/' . ltrim(preg_replace('~\.php$~i', '', $request) ?? $request, '/');
$canonical = 'https://grootacademy.com' . rtrim($canonicalPath, '/') . '/';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($page['title'] ?? 'Groot Academy Jaipur', ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page['title'] ?? 'Groot Academy Jaipur', ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">
    <base href="/">
    <?php include __DIR__ . '/head.php'; ?>
    <style>
        .ga-migrated-page { background:#fff; }
        .ga-migrated-page .ga-legacy-content img { max-width:100%; height:auto; }
        .ga-migrated-page .ga-legacy-content iframe { max-width:100%; }
        .ga-migrated-page .ga-legacy-content table { width:100%; max-width:100%; }
        .ga-migrated-page .ga-legacy-content h1,
        .ga-migrated-page .ga-legacy-content h2,
        .ga-migrated-page .ga-legacy-content h3 { line-height:1.25; }
        .ga-migrated-page .ga-legacy-content section,
        .ga-migrated-page .ga-legacy-content .container { max-width:100%; }
        .ga-migrated-page .ga-migration-cta { background:#f5f7f6; padding:55px 0; margin-top:40px; }
    </style>
</head>
<body class="defult-home ga-migrated-page">
<?php include __DIR__ . '/header.php'; ?>

<main class="main-content">
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="/assets/images/breadcrumbs/2.jpg" alt="Groot Academy Jaipur">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title"><?php echo htmlspecialchars(preg_replace('~\s*\|.*$~', '', $page['title'] ?? 'Groot Academy'), ENT_QUOTES, 'UTF-8'); ?></h1>
            <ul><li><a class="active" href="/">Home</a></li><li>Groot Academy</li></ul>
        </div>
    </div>

    <section class="pt-80 pb-60 md-pt-60 md-pb-40">
        <div class="container">
            <div class="ga-legacy-content">
                <?php echo $page['content'] ?? ''; ?>
            </div>
        </div>
    </section>

    <?php if ($resolved !== null): ?>
    <section class="ga-migration-cta">
        <div class="container text-center">
            <div class="sec-title">
                <div class="sub-title orange-color">Groot Academy Jaipur</div>
                <h2 class="title">Need course guidance?</h2>
                <p class="desc">Talk to Groot Academy about batches, curriculum, internships and career-focused IT training.</p>
                <div class="mt-30">
                    <a class="readon orange-btn" href="tel:+918233266276">Call +91 8233266276</a>
                    <a class="readon green-btn ml-15" href="https://wa.me/918233266276?text=I%20want%20course%20details%20from%20Groot%20Academy">WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
