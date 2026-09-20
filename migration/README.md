# Groot Academy WordPress → GTA Migration

## Source of truth

Old site content is read only from:

`/groot-old-wordpress-website/grootacademy.com/`

The backup is **not** executed as WordPress. The migration layer reads legacy PHP pages as text, removes the old shell/scripts/forms, and renders the remaining public content inside GTA's existing `head.php`, `header.php`, and `footer.php` theme.

## What the migration bridge covers

- Existing old `.php` page URLs such as `/about-us.php` and `/contact-us.php`.
- Clean versions of those URLs such as `/about-us/` when the matching legacy source exists.
- Nested legacy content where a safe matching PHP file or `index.php` exists.
- Legacy page title/description extraction for SEO metadata.
- Legacy content images from `assets`, `assets2`, `images2`, and `wp-content/uploads` without executing old WordPress/PHP code.

## Safety exclusions

Administrative/system handlers are intentionally not exposed through the migration renderer, including WordPress admin/core, old form processors, sign-in/process scripts, and config/database files.

Root `.htaccess` also blocks direct web access to sensitive backup configuration/database paths.

## Phase order

1. Migrate old WordPress/public legacy content into the GTA theme.
2. Bring useful completed work from `satnamkhowal/groot-academy` into GTA selectively.
3. Continue future site work only after review of phases 1 and 2.

## Rule

Do not replace the GTA theme with the old site shell. The GTA theme is the presentation layer; the old backup is content source only.
