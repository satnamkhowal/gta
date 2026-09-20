<?php
$esc = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
$siteUrl = 'https://grootacademy.com';
$publisherLogo = $siteUrl . '/assets/images/logo-green.png';
$metaTitle = $blog['meta_title'] ?? $blog['title'] ?? 'Groot Academy Blog';
$metaDescription = $blog['meta_description'] ?? $blog['excerpt'] ?? '';
$canonical = $blog['canonical'] ?? '';
$robots = $blog['robots'] ?? 'index,follow';
$featuredImage = $blog['featured_image'] ?? '';
$featuredImageAlt = $blog['featured_image_alt'] ?? $blog['title'] ?? '';
$authorName = $blog['author'] ?? 'Groot Academy';
$category = $blog['category'] ?? '';
$datePublished = $blog['date_published'] ?? '';
$dateModified = $blog['date_modified'] ?? $datePublished;

$resolveAbsoluteUrl = static function ($value) use ($siteUrl, $canonical) {
    $value = trim((string) $value);
    if ($value === '') return '';
    if (preg_match('~^https?://~i', $value)) return $value;
    if (substr($value, 0, 1) === '/') return rtrim($siteUrl, '/') . $value;
    if ($canonical) return rtrim((string) $canonical, '/') . '/' . ltrim($value, '/');
    return rtrim($siteUrl, '/') . '/' . ltrim($value, '/');
};
$featuredImageUrl = $resolveAbsoluteUrl($featuredImage);

$articleSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BlogPosting',
    'headline' => $blog['title'] ?? '',
    'description' => $metaDescription,
    'author' => ['@type'=>'Organization','name'=>$authorName,'url'=>$siteUrl.'/'],
    'publisher' => [
        '@type'=>'Organization','name'=>'Groot Academy','url'=>$siteUrl.'/',
        'logo'=>['@type'=>'ImageObject','url'=>$publisherLogo]
    ],
    'inLanguage' => 'en-IN',
];
if ($category) $articleSchema['articleSection']=$category;
if ($datePublished) $articleSchema['datePublished']=$datePublished;
if ($dateModified) $articleSchema['dateModified']=$dateModified;
if ($canonical) {
    $articleSchema['url']=$canonical;
    $articleSchema['mainEntityOfPage']=['@type'=>'WebPage','@id'=>$canonical];
}
if ($featuredImageUrl) $articleSchema['image']=['@type'=>'ImageObject','url'=>$featuredImageUrl,'caption'=>$featuredImageAlt];

$breadcrumbSchema = null;
if ($canonical && !empty($blog['title'])) {
    $breadcrumbSchema = [
        '@context'=>'https://schema.org',
        '@type'=>'BreadcrumbList',
        'itemListElement'=>[
            ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$siteUrl.'/'],
            ['@type'=>'ListItem','position'=>2,'name'=>'Blogs','item'=>$siteUrl.'/blogs/'],
            ['@type'=>'ListItem','position'=>3,'name'=>$blog['title'],'item'=>$canonical],
        ],
    ];
}
?>
<!doctype html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <title><?= $esc($metaTitle) ?></title>
    <meta name="description" content="<?= $esc($metaDescription) ?>">
    <meta name="robots" content="<?= $esc($robots) ?>">
    <meta name="author" content="<?= $esc($authorName) ?>">
    <?php if ($canonical): ?><link rel="canonical" href="<?= $esc($canonical) ?>"><?php endif; ?>
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Groot Academy">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="<?= $esc($metaTitle) ?>">
    <meta property="og:description" content="<?= $esc($metaDescription) ?>">
    <?php if ($canonical): ?><meta property="og:url" content="<?= $esc($canonical) ?>"><?php endif; ?>
    <?php if ($featuredImageUrl): ?><meta property="og:image" content="<?= $esc($featuredImageUrl) ?>"><?php endif; ?>
    <?php if ($datePublished): ?><meta property="article:published_time" content="<?= $esc($datePublished) ?>"><?php endif; ?>
    <?php if ($dateModified): ?><meta property="article:modified_time" content="<?= $esc($dateModified) ?>"><?php endif; ?>
    <?php if ($category): ?><meta property="article:section" content="<?= $esc($category) ?>"><?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $esc($metaTitle) ?>">
    <meta name="twitter:description" content="<?= $esc($metaDescription) ?>">
    <?php if ($featuredImageUrl): ?><meta name="twitter:image" content="<?= $esc($featuredImageUrl) ?>"><?php endif; ?>
    <base href="/">
    <?php include dirname(__DIR__, 3) . '/head.php'; ?>
    <link rel="stylesheet" href="/blogs/_shared/assets/blog.css">
    <script type="application/ld+json"><?= json_encode($articleSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
    <?php if ($breadcrumbSchema): ?><script type="application/ld+json"><?= json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script><?php endif; ?>
</head>
<body class="defult-home ga-blog-shell">
