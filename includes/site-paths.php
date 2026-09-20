<?php
$gaBasePath = getenv('GA_BASE_PATH');
if ($gaBasePath === false || $gaBasePath === '/') { $gaBasePath = ''; }
$gaBasePath = rtrim((string) $gaBasePath, '/');
if (!defined('GA_BASE_PATH')) { define('GA_BASE_PATH', $gaBasePath); }

if (!function_exists('ga_url')) {
    function ga_url(string $path = ''): string {
        return (GA_BASE_PATH === '' ? '' : GA_BASE_PATH) . '/' . ltrim($path, '/');
    }
}
if (!function_exists('ga_asset')) {
    function ga_asset(string $path): string { return ga_url('assets/' . ltrim($path, '/')); }
}
if (!function_exists('ga_post_card')) {
    function ga_post_card(string $filename): string {
        return ga_url('post/images/card/' . rawurlencode(basename($filename)));
    }
}
