# Groot Academy WordPress Content Migration

Controlled migration from the old WordPress/static-PHP site into the current main site.

## Sources
- Filesystem: `satnamkhowal/groot-academy-wordpress`
- WXR export: `grootacademyjaipurlearnpythonjavadataanalyticswebampappdevelopmentcourses.WordPress.2026-09-16.xml`
- Legacy DB: `source/u232016825_groot_academy.sql`

The legacy SQL contains only `contact_form` and `meta_description`, not WordPress `wp_posts/wp_postmeta`. WordPress content/taxonomy/attachment relationships are taken from the WXR export and matched to filesystem media.

## Rules
1. Preserve the current theme/design and never change `/newsite`.
2. Do not deploy old WordPress core, plugins, `wp-config.php`, caches, backups or unknown executable PHP files.
3. Use `/includes/site-paths.php` so assets do not depend on a page's directory depth.
4. Canonical migrated card images live under `/post/images/card/`.
5. Preserve old URLs through an explicit alias registry.
6. Migrate original media, not every WordPress-generated thumbnail.
7. Deduplicate old posts against the existing `/blogs` registry.
8. Retain useful SEO title/description/canonical/date/image metadata where available.
9. Record each migration batch under `/logs`.

## Excluded from live migration
`wp-admin/`, `wp-includes/`, plugins, config/secrets, caches, old duplicate pages and suspicious executables.
