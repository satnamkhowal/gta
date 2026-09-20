<?php
if (!isset($blog) || !is_array($blog)) {
    throw new RuntimeException('The $blog array is required before loading the shared blog layout.');
}

$blogContent = $blogContent ?? '';
$esc = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');

// Resolve the current article in the central registry so every published guide
// can receive useful internal links without editing each article individually.
$currentSlug = trim((string) ($blog['slug'] ?? ''));
if ($currentSlug === '' && !empty($blog['canonical'])) {
    $canonicalPath = parse_url((string) $blog['canonical'], PHP_URL_PATH);
    if (is_string($canonicalPath)) {
        $currentSlug = basename(rtrim($canonicalPath, '/'));
    }
}

$relatedGuides = [];
$registryPath = __DIR__ . '/blog-registry.php';
if ($currentSlug !== '' && is_file($registryPath)) {
    $blogRegistry = require $registryPath;
    if (isset($blogRegistry[$currentSlug])) {
        $relatedSlugs = $blog['related_posts'] ?? $blogRegistry[$currentSlug]['related'] ?? [];
        foreach ((array) $relatedSlugs as $relatedSlug) {
            if (isset($blogRegistry[$relatedSlug])) {
                $relatedGuides[] = $blogRegistry[$relatedSlug];
            }
        }
    }
}

require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="ga-blog-page">
    <article class="ga-blog-article">
        <section class="ga-blog-hero">
            <div class="ga-container ga-blog-hero-inner">
                <?php if (!empty($blog['category'])): ?>
                    <span class="ga-blog-category"><?= $esc($blog['category']) ?></span>
                <?php endif; ?>

                <h1><?= $esc($blog['title'] ?? '') ?></h1>

                <?php if (!empty($blog['excerpt'])): ?>
                    <p class="ga-blog-excerpt"><?= $esc($blog['excerpt']) ?></p>
                <?php endif; ?>

                <div class="ga-blog-meta">
                    <?php if (!empty($blog['author'])): ?><span>By <?= $esc($blog['author']) ?></span><?php endif; ?>
                    <?php if (!empty($blog['display_date'])): ?><span><?= $esc($blog['display_date']) ?></span><?php endif; ?>
                    <?php if (!empty($blog['reading_time'])): ?><span><?= $esc($blog['reading_time']) ?></span><?php endif; ?>
                </div>
            </div>
        </section>

        <div class="ga-container ga-blog-grid">
            <div class="ga-blog-main">
                <?php if (!empty($blog['featured_image'])): ?>
                    <figure class="ga-featured-image-wrap">
                        <img
                            class="ga-featured-image"
                            src="<?= $esc($blog['featured_image']) ?>"
                            alt="<?= $esc($blog['featured_image_alt'] ?? $blog['title'] ?? '') ?>"
                            loading="eager"
                            fetchpriority="high"
                        >
                    </figure>
                <?php endif; ?>

                <div class="ga-blog-content">
                    <?= $blogContent ?>
                </div>

                <?php if (!empty($relatedGuides)): ?>
                    <section class="ga-related-guides" aria-labelledby="related-guides-title">
                        <div class="ga-related-heading">
                            <h2 id="related-guides-title">Related career guides</h2>
                            <a href="/blogs/">View all guides</a>
                        </div>
                        <div class="ga-related-grid">
                            <?php foreach (array_slice($relatedGuides, 0, 3) as $related): ?>
                                <article class="ga-related-card">
                                    <?php if (!empty($related['category'])): ?><span><?= $esc($related['category']) ?></span><?php endif; ?>
                                    <h3><a href="/blogs/<?= $esc($related['slug']) ?>/"><?= $esc($related['title']) ?></a></h3>
                                    <?php if (!empty($related['description'])): ?><p><?= $esc($related['description']) ?></p><?php endif; ?>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </section>
                <?php endif; ?>

                <?php if (!empty($blog['cta_title']) || !empty($blog['cta_text'])): ?>
                    <section class="ga-blog-cta">
                        <?php if (!empty($blog['cta_title'])): ?><h2><?= $esc($blog['cta_title']) ?></h2><?php endif; ?>
                        <?php if (!empty($blog['cta_text'])): ?><p><?= $esc($blog['cta_text']) ?></p><?php endif; ?>
                        <?php if (!empty($blog['cta_url']) && !empty($blog['cta_label'])): ?>
                            <a class="ga-button" href="<?= $esc($blog['cta_url']) ?>"><?= $esc($blog['cta_label']) ?></a>
                        <?php endif; ?>
                    </section>
                <?php endif; ?>
            </div>

            <?php if (!empty($blog['toc']) && is_array($blog['toc'])): ?>
                <aside class="ga-blog-sidebar" aria-label="Table of contents">
                    <div class="ga-toc-card">
                        <strong>On this page</strong>
                        <nav>
                            <?php foreach ($blog['toc'] as $item): ?>
                                <a href="#<?= $esc($item['id'] ?? '') ?>"><?= $esc($item['label'] ?? '') ?></a>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </aside>
            <?php endif; ?>
        </div>
    </article>
</main>
<?php require __DIR__ . '/partials/footer.php'; ?>
