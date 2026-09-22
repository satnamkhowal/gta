<?php
require_once __DIR__ . '/course-catalog.php';
$course = ga_courses()[$courseSlug] ?? null;
if ($course === null) { http_response_code(404); exit('Course not found'); }
$esc = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
$canonical = 'https://grootacademy.com/' . ga_course_path($course);
$title = $course['name'] . ' Course in Jaipur | Groot Academy';
$faqs = array_merge($course['faq'], [
    ['Who is this course for?', $course['audience']],
    ['How can I confirm fees, duration and batch timings?', 'Contact Groot Academy for the current syllabus, fees, duration and available learning modes before enrolling. These details depend on the selected course and batch.'],
]);
$schema = [
    '@context' => 'https://schema.org', '@type' => 'Course',
    'name' => $course['name'] . ' Course in Jaipur', 'description' => $course['description'],
    'url' => $canonical, 'provider' => ['@type' => 'Organization', 'name' => 'Groot Academy', 'url' => 'https://grootacademy.com/'],
];
$jsonFlags = JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $esc($title) ?></title>
    <meta name="description" content="<?= $esc($course['description']) ?>">
    <link rel="canonical" href="<?= $esc($canonical) ?>">
    <meta property="og:title" content="<?= $esc($title) ?>">
    <meta property="og:description" content="<?= $esc($course['description']) ?>">
    <meta property="og:url" content="<?= $esc($canonical) ?>">
    <meta property="og:type" content="website">
    <base href="<?= $esc(ga_url()) ?>">
    <?php include __DIR__ . '/../head.php'; ?>
    <link rel="stylesheet" href="<?= $esc(ga_asset('css/groot-course-page.css')) ?>">
    <link rel="stylesheet" href="<?= $esc(ga_asset('css/groot-course-page-v2.css')) ?>">
    <link rel="stylesheet" href="<?= $esc(ga_asset('css/groot-course-migration.css')) ?>">
    <script type="application/ld+json"><?= json_encode($schema, $jsonFlags) ?></script>
    <script type="application/ld+json"><?= json_encode(['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => array_map(static fn($faq) => ['@type' => 'Question', 'name' => $faq[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq[1]]], $faqs)], $jsonFlags) ?></script>
</head>
<body class="defult-home ga-course-page ga-course-page-v2">
<?php include __DIR__ . '/../header.php'; ?>
<main class="main-content">
    <nav class="ga-section-nav" aria-label="Course page sections"><div class="container">
        <?php foreach (['overview' => 'Overview', 'skills' => 'What You Learn', 'curriculum' => 'Curriculum', 'projects' => 'Projects', 'career' => 'Career', 'faq' => 'FAQs'] as $id => $label): ?>
        <a href="<?= $esc(ga_url(ga_course_path($course)) . '#' . $id) ?>"><?= $esc($label) ?></a>
        <?php endforeach; ?>
    </div></nav>
    <section class="ga-course-hero"><div class="container"><div class="row align-items-center">
        <div class="col-lg-7">
            <div class="ga-breadcrumb"><a href="<?= $esc(ga_url()) ?>">Home</a><span>/</span><a href="<?= $esc(ga_url('courses.php')) ?>">Courses</a><span>/</span><span><?= $esc($course['name']) ?></span></div>
            <div class="ga-kicker">Groot Academy · Jaipur</div>
            <h1><?= $esc($course['name']) ?> <span>Course in Jaipur</span></h1>
            <p class="ga-hero-copy"><?= $esc($course['intro']) ?></p>
            <ul class="ga-hero-points"><li><i class="fa fa-laptop" aria-hidden="true"></i> Practical learning</li><li><i class="fa fa-cubes" aria-hidden="true"></i> Project practice</li><li><i class="fa fa-map-marker" aria-hidden="true"></i> Jaipur</li></ul>
            <a class="ga-btn" href="<?= $esc(ga_url(ga_course_path($course)) . '#enquiry') ?>">Get Course Details</a>
            <a class="ga-btn-outline" href="<?= $esc(ga_url(ga_course_path($course)) . '#curriculum') ?>">View Curriculum</a>
        </div>
        <div class="col-lg-5"><div class="ga-course-visual">
            <?php if ($course['image'] !== ''): ?>
            <img src="<?= $esc(ga_course_image($course)) ?>" alt="<?= $esc($course['name']) ?> at Groot Academy" class="ga-migration-course-image">
            <?php else: ?>
            <div class="ga-course-symbol" aria-hidden="true"><i class="fa fa-<?= $esc($course['icon']) ?>"></i></div>
            <?php endif; ?>
            <div class="ga-course-visual-body"><span class="ga-visual-label"><?= $esc($course['category']) ?></span><h2><?= $esc($course['name']) ?></h2>
                <div class="ga-course-facts"><div class="ga-course-fact"><small>Focus</small><strong>Skills &amp; Projects</strong></div><div class="ga-course-fact"><small>Location</small><strong>Jaipur, Rajasthan</strong></div></div>
            </div>
        </div></div>
    </div></div></section>
    <section class="ga-course-main"><div class="container"><div class="row">
        <div class="col-lg-8 ga-content-column">
            <section id="overview" class="ga-section ga-anchor-target"><div class="ga-section-heading"><span class="eyebrow">Course Overview</span><h2>Build your foundation in <?= $esc($course['name']) ?></h2><p><?= $esc($course['intro']) ?></p></div><div class="ga-info-card"><h3>Who can join?</h3><p><?= $esc($course['audience']) ?></p></div></section>
            <section id="skills" class="ga-section ga-anchor-target"><div class="ga-section-heading"><span class="eyebrow">What You Learn</span><h2>Skills and tools</h2></div><div class="ga-skill-chips"><?php foreach ($course['skills'] as $skill): ?><span class="ga-skill-chip"><?= $esc($skill) ?></span><?php endforeach; ?></div></section>
            <section id="curriculum" class="ga-section ga-anchor-target"><div class="ga-section-heading"><span class="eyebrow">Learning Path</span><h2>Course curriculum</h2><p>Explore the learning outline below. Confirm the detailed syllabus and module coverage for your chosen batch with the course team.</p></div><div class="ga-curriculum">
                <?php foreach ($course['modules'] as $module): ?><div class="ga-module"><h3><?= $esc($module[0]) ?></h3><p><?= $esc($module[1]) ?></p></div><?php endforeach; ?>
            </div></section>
            <section id="projects" class="ga-section ga-anchor-target"><div class="ga-section-heading"><span class="eyebrow">Apply Your Skills</span><h2>Project practice ideas</h2><p>Use these examples to discuss suitable practice work with your trainer.</p></div><div class="row">
                <?php foreach ($course['projects'] as $project): ?><div class="col-md-6 mb-4"><div class="ga-project-card"><h3><?= $esc($project[0]) ?></h3><p><?= $esc($project[1]) ?></p></div></div><?php endforeach; ?>
            </div></section>
            <section id="career" class="ga-section ga-anchor-target"><div class="ga-section-heading"><span class="eyebrow">Career Direction</span><h2>Roles to explore</h2><p>Build a portfolio and practise explaining your work. Role requirements depend on the employer, your skills and experience.</p></div><ul class="ga-check-list"><?php foreach ($course['careers'] as $role): ?><li><?= $esc($role) ?></li><?php endforeach; ?></ul></section>
            <section id="faq" class="ga-section ga-anchor-target"><div class="ga-section-heading"><span class="eyebrow">Common Questions</span><h2>Frequently asked questions</h2></div>
                <?php foreach ($faqs as $faq): ?><details class="ga-migration-faq"><summary><?= $esc($faq[0]) ?></summary><p><?= $esc($faq[1]) ?></p></details><?php endforeach; ?>
            </section>
            <?php if ($courseSlug === 'data-science-machine-learning-course-jaipur'): ?>
            <section class="ga-section"><div class="ga-section-heading"><span class="eyebrow">Related Jaipur Resource</span><h2>Compare another Data Science learning path</h2></div><p>Students comparing specialised Data Science training in Jaipur can also review the <a href="https://bestdatascienceinstitute.com/data-science-course-jaipur.php" target="_blank" rel="noopener">Data Science Course at Best Data Science Institute</a> and verify its current curriculum, projects and batch details directly.</p></section>
            <?php endif; ?>
            <?php if ($courseSlug === 'full-stack-web-development-course-in-jaipur'): ?>
            <section class="ga-section"><div class="ga-section-heading"><span class="eyebrow">Related Jaipur Resource</span><h2>Compare another Full Stack learning path</h2></div><p>For another practical development curriculum in Jaipur, students can review the <a href="https://forskcodingschool.com/full-stack-development-course-jaipur.php" target="_blank" rel="noopener">Full Stack Development Course at Forsk Coding School</a> and compare current project coverage and learning mode.</p></section>
            <?php endif; ?>
            <section class="ga-section"><div class="ga-section-heading"><h2>Continue exploring</h2></div><?php if (!empty($course['blog'])): ?><p><a href="<?= $esc(ga_url('blogs/' . $course['blog'] . '/')) ?>">Read the <?= $esc($course['name']) ?> career guide</a></p><?php endif; ?><ul class="ga-check-list">
                <?php
                $shownRelated = [];
                foreach (($course['related_slugs'] ?? []) as $relatedSlug):
                    $related = ga_courses()[$relatedSlug] ?? null;
                    if ($related === null || $related['slug'] === $course['slug']) { continue; }
                    $shownRelated[$related['slug']] = true;
                ?>
                <li><a href="<?= $esc(ga_url(ga_course_path($related))) ?>"><?= $esc($related['name']) ?></a></li>
                <?php endforeach; ?>
                <?php foreach (ga_courses() as $related): if ($related['slug'] === $course['slug'] || isset($shownRelated[$related['slug']]) || $related['filter'] !== $course['filter']) { continue; } ?>
                <li><a href="<?= $esc(ga_url(ga_course_path($related))) ?>"><?= $esc($related['name']) ?></a></li>
                <?php endforeach; ?>
            </ul><p class="mt-20"><a href="<?= $esc(ga_url('courses.php')) ?>">Explore all IT courses</a></p></section>
        </div>
        <aside class="col-lg-4"><div class="ga-sidebar"><section id="enquiry" class="ga-sidebar-card ga-anchor-target"><div class="ga-sidebar-head"><small>Speak with the course team</small><h2>Plan your next step</h2></div><div class="ga-sidebar-body"><p>Ask about <?= $esc($course['name']) ?>, batch timings, fees, duration and available learning modes.</p><p><a class="ga-btn" href="tel:+918233266276">Call +91 82332 66276</a></p><p><a href="mailto:info@grootacademy.com?subject=<?= rawurlencode($course['name'] . ' course enquiry') ?>">Email the course team</a></p><p>Groot Academy, Jaipur</p></div></section></div></aside>
    </div></div></section>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
</body>
</html>
