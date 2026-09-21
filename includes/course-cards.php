<?php
require_once __DIR__ . '/course-catalog.php';
$cardEscape = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
foreach (ga_courses() as $cardCourse):
$cardUrl = ga_url(ga_course_path($cardCourse));
?>
<div class="col-lg-4 col-md-6 grid-item <?= $cardEscape($cardCourse['filter']) ?>">
    <div class="courses-item mb-30">
        <div class="img-part"><a href="<?= $cardEscape($cardUrl) ?>" aria-label="Explore <?= $cardEscape($cardCourse['name']) ?>">
            <?php if ($cardCourse['image'] !== ''): ?><img loading="lazy" src="<?= $cardEscape(ga_course_image($cardCourse)) ?>" alt="<?= $cardEscape($cardCourse['name']) ?> course at Groot Academy">
            <?php else: ?><div class="ga-course-symbol" aria-hidden="true"><i class="fa fa-<?= $cardEscape($cardCourse['icon']) ?>"></i></div><?php endif; ?>
        </a></div>
        <div class="content-part">
            <ul class="meta-part"><li><?= $cardEscape($cardCourse['category']) ?></li></ul>
            <h2 class="course-title"><a href="<?= $cardEscape($cardUrl) ?>"><?= $cardEscape($cardCourse['name']) ?> Course in Jaipur</a></h2>
            <p><?= $cardEscape(implode(' · ', array_slice($cardCourse['skills'], 0, 4))) ?></p>
            <div class="bottom-part"><div class="info-meta">Practical learning</div><div class="btn-part"><a href="<?= $cardEscape($cardUrl) ?>" aria-label="View <?= $cardEscape($cardCourse['name']) ?> course"><i class="flaticon-right-arrow" aria-hidden="true"></i></a></div></div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<div class="col-lg-4 col-md-6 grid-item filter2">
    <div class="courses-item mb-30">
        <div class="img-part"><a href="<?= $cardEscape(ga_url('best-back-end-development-course-with-php-in-jaipur.php')) ?>"><img loading="lazy" src="<?= $cardEscape(ga_post_card('php-programming-course-card-by-groot-academy.png')) ?>" alt="PHP backend development at Groot Academy"></a></div>
        <div class="content-part"><ul class="meta-part"><li>Web Development</li></ul><h2 class="course-title"><a href="<?= $cardEscape(ga_url('best-back-end-development-course-with-php-in-jaipur.php')) ?>">PHP Backend Development Course in Jaipur</a></h2><p>Explore the existing PHP backend learning path.</p></div>
    </div>
</div>
