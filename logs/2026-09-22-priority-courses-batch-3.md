# Priority course migration — catalogue, URLs and QA

## Result

- Catalogue now links directly to all 12 priority landing pages. Image, title and arrow links share the same destination. Existing filter controls and GTA grid design remain; duplicate PHP cards and nonfunctional numbered pagination were replaced by one retained PHP backend course card and the priority catalogue.
- Header/footer priority-course links and 12 related blog enquiry links now point to dedicated pages.
- `includes/course-catalog.php` is the explicit canonical/legacy alias registry. `legacy-page.php` redirects only allowlisted GET/HEAD paths to fixed local targets before the old content bridge runs. Unknown paths and other methods retain bridge behaviour. Query parameters are discarded on migrated redirects; user input cannot choose a redirect destination. Existing real files/directories and backup protections still take precedence in `.htaccess`.
- Root `.php` pages are canonical; 63 legacy/clean aliases, including `/courses/`, redirect in one step. `sitemap-courses.xml` lists the catalogue and 12 canonical course pages.
- Existing `GA_BASE_PATH` helper supports local/subdirectory asset and link prefixes. Production canonicals deliberately remain `https://grootacademy.com/`.

## Validation

- `php tests/priority-courses.php http://127.0.0.1:8765`: 786 checks passed against Apache 2.4 / PHP 8.0.28.
- Covers 12 pages and catalogue HTTP responses, one H1/title/canonical, JSON-LD parsing, curriculum completeness, related guides, content links/anchors, 51 shared/page assets, GET/HEAD redirects for all 63 aliases, no canonical loops, unknown-route 404, backup protection and retained PHP course response.
- `php tests/priority-course-paths.php`: 7 subdirectory path checks passed.
- PHP lint passed for all new page entry points, renderer, catalogue, cards, redirect bridge and changed shared layout files. Git whitespace check passed.
- Browser review: Python at desktop (1440px) and mobile (390px), Java long title at mobile, catalogue at both widths. No horizontal document overflow or broken images in inspected views. Curriculum anchor navigation works. Data & AI filter returns exactly its four course cards after the existing animation completes.

## Boundaries and follow-up

This completes the requested priority landing-page batch, not the full WordPress migration. Existing unrelated navigation routes, legacy content, newsletter behaviour and old form handlers are outside this batch; QA does not claim every historical site link is repaired. New course enquiries use verified existing phone/email destinations without introducing a new form handler. Live hosting deployment and Search Console sitemap submission are not part of this repository commit.

The source backup, WordPress runtime/configuration and `newsite` were not modified. Source provenance and media hashes accompany this batch for future migrations.
