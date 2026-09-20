<?php
/**
 * Safe content-only bridge for the old Groot Academy WordPress/static backup.
 *
 * The backup is treated as read-only source material. Nothing here executes
 * PHP from the backup. We read legacy files as text, extract their public
 * content, strip old shell/scripts/forms, and render it inside the GTA theme.
 */

function ga_legacy_root(): string
{
    return dirname(__DIR__) . '/groot-old-wordpress-website/grootacademy.com';
}

function ga_legacy_normalize_request(string $request): string
{
    $request = rawurldecode($request);
    $request = parse_url('/' . ltrim($request, '/'), PHP_URL_PATH) ?: '';
    $request = trim($request, '/');
    $request = preg_replace('~/{2,}~', '/', $request) ?? $request;

    return $request;
}

function ga_legacy_is_safe_request(string $request): bool
{
    if ($request === '' || str_contains($request, '..') || str_contains($request, "\0")) {
        return false;
    }

    $blocked = [
        'wp-admin', 'wp-includes', 'wp-content/plugins', 'includes', 'includes2',
        'batches-mangement', 'php-attendance', 'profile-page', 'students-data',
        'process', 'form_process', 'query-form', 'enrollprocess', 'sign-in',
        'wp-config', 'wp-activate', 'wp-blog-header', 'wp-comments-post',
    ];

    $lower = strtolower($request);
    foreach ($blocked as $fragment) {
        if (str_contains($lower, $fragment)) {
            return false;
        }
    }

    return (bool) preg_match('~^[a-zA-Z0-9 _&+.,()\-\/]+(?:\.php)?$~', $request);
}

function ga_legacy_aliases(): array
{
    return [
        'privacy-policy' => 'privacy-and-policy-of-the-Groot-Academy-final.php',
        'privacy-policy.php' => 'privacy-and-policy-of-the-Groot-Academy-final.php',
        'privacy-and-policy' => 'privacy-and-policy-of-the-Groot-Academy-final.php',
        'internship' => 'best-inernship-programmes-in-jaipur.php',
        'internships' => 'best-inernship-programmes-in-jaipur.php',
        'about' => 'about-us.php',
        'contact' => 'contact-us.php',
        'all-courses' => 'all-courses-by-groot-academy-jaipur.php',
    ];
}

function ga_legacy_resolve(string $request): ?string
{
    $request = ga_legacy_normalize_request($request);
    if (!ga_legacy_is_safe_request($request)) {
        return null;
    }

    $aliases = ga_legacy_aliases();
    $lookup = strtolower($request);
    if (isset($aliases[$lookup])) {
        $request = $aliases[$lookup];
    }

    $root = realpath(ga_legacy_root());
    if ($root === false) {
        return null;
    }

    $candidates = [$request];
    if (!str_ends_with(strtolower($request), '.php')) {
        $candidates[] = $request . '.php';
        $candidates[] = $request . '/index.php';
    }

    foreach ($candidates as $candidate) {
        $candidate = ltrim($candidate, '/');
        $full = ga_legacy_root() . '/' . $candidate;
        $resolved = realpath($full);

        if ($resolved === false || !is_file($resolved)) {
            continue;
        }

        if (!str_starts_with($resolved, $root . DIRECTORY_SEPARATOR)) {
            continue;
        }

        if (strtolower(pathinfo($resolved, PATHINFO_EXTENSION)) !== 'php') {
            continue;
        }

        return $resolved;
    }

    return null;
}

function ga_legacy_meta(string $raw, string $request): array
{
    $fallback = trim(str_replace(['-', '_', '.php'], [' ', ' ', ''], basename($request)));
    $fallback = ucwords(preg_replace('~\s+~', ' ', $fallback) ?: 'Groot Academy');

    $title = $fallback . ' | Groot Academy Jaipur';
    if (preg_match('~<title[^>]*>(.*?)</title>~is', $raw, $m)) {
        $candidate = trim(html_entity_decode(strip_tags($m[1]), ENT_QUOTES | ENT_HTML5, 'UTF-8'));
        if ($candidate !== '') {
            $title = $candidate;
        }
    }

    $description = 'Explore practical, career-focused IT training and learning resources from Groot Academy in Jaipur.';
    if (preg_match('~<meta\s+[^>]*name=["\']description["\'][^>]*content=["\'](.*?)["\'][^>]*>~is', $raw, $m) ||
        preg_match('~<meta\s+[^>]*content=["\'](.*?)["\'][^>]*name=["\']description["\'][^>]*>~is', $raw, $m)) {
        $candidate = trim(html_entity_decode(strip_tags($m[1]), ENT_QUOTES | ENT_HTML5, 'UTF-8'));
        $candidate = preg_replace('~\s+~', ' ', $candidate) ?: '';
        if ($candidate !== '') {
            $description = mb_substr($candidate, 0, 300);
        }
    }

    return ['title' => $title, 'description' => $description];
}

function ga_legacy_extract_content(string $raw): string
{
    $raw = preg_replace('~<\?php\s+echo\s+FINAL_WEBSITE_URL\s*;\s*\?>~i', '/', $raw) ?? $raw;

    $markers = [
        '<!-- Main content Start -->',
        '<div class="main-content">',
        "<div class='main-content'>",
        '<!-- End Navbar -->',
    ];

    foreach ($markers as $marker) {
        $pos = stripos($raw, $marker);
        if ($pos !== false) {
            $raw = substr($raw, $pos + (str_starts_with($marker, '<!--') ? strlen($marker) : 0));
            break;
        }
    }

    $tailMarkers = [
        '<!-- Footer Start -->',
        '<?php include',
        '<?php require',
    ];
    foreach ($tailMarkers as $marker) {
        $pos = stripos($raw, $marker);
        if ($pos !== false && $pos > 500) {
            $tail = substr($raw, $pos, 200);
            if ($marker === '<!-- Footer Start -->' || stripos($tail, 'footer') !== false) {
                $raw = substr($raw, 0, $pos);
                break;
            }
        }
    }

    $raw = preg_replace('~<\?(?:php|=).*?\?>~is', '', $raw) ?? $raw;
    $raw = preg_replace('~<!doctype[^>]*>~is', '', $raw) ?? $raw;
    $raw = preg_replace('~</?(?:html|head|body)[^>]*>~is', '', $raw) ?? $raw;
    $raw = preg_replace('~<title[^>]*>.*?</title>~is', '', $raw) ?? $raw;
    $raw = preg_replace('~<meta\b[^>]*>~is', '', $raw) ?? $raw;
    $raw = preg_replace('~<link\b[^>]*>~is', '', $raw) ?? $raw;
    $raw = preg_replace('~<script\b[^>]*>.*?</script>~is', '', $raw) ?? $raw;
    $raw = preg_replace('~<form\b[^>]*>.*?</form>~is', '', $raw) ?? $raw;

    $prefix = '/groot-old-wordpress-website/grootacademy.com/';
    $raw = preg_replace('~(["\'])assets2/~i', '$1' . $prefix . 'assets2/', $raw) ?? $raw;
    $raw = preg_replace('~(["\'])images2/~i', '$1' . $prefix . 'images2/', $raw) ?? $raw;
    $raw = preg_replace('~(["\'])assets/~i', '$1' . $prefix . 'assets/', $raw) ?? $raw;
    $raw = preg_replace('~(["\'])wp-content/uploads/~i', '$1' . $prefix . 'wp-content/uploads/', $raw) ?? $raw;

    $raw = str_replace('https://forskcodingschool.com/#', '#', $raw);
    $raw = str_replace('https://grootsoftware.com/', 'https://grootacademy.com/', $raw);

    return trim($raw);
}

function ga_legacy_page_data(string $resolved, string $request): array
{
    $raw = file_get_contents($resolved);
    if ($raw === false) {
        return [];
    }

    return ga_legacy_meta($raw, $request) + [
        'content' => ga_legacy_extract_content($raw),
        'source' => str_replace(ga_legacy_root() . '/', '', $resolved),
    ];
}
