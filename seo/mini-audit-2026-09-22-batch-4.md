# Controlled SEO mini audit — Batch 4

Date: 2026-09-22
Trigger: 10 significant trust/navigation cleanup changes after Batch 3.

## Changes covered
1. Replaced homepage demo blog carousel with real migrated Groot career guides.
2. Replaced no-op newsletter form with course comparison/contact CTAs.
3. Replaced Contact page demo Georgia address with current Groot Mansarovar address used by shared site footer.
4. Replaced Contact page RST theme email with info@grootacademy.com.
5. Replaced Contact page demo phone with +91 8233266276.
6. Replaced Fort Miley demo map with the existing Groot Academy Mansarovar map source from the legacy contact page.
7. Removed the external demo contact-form endpoint and replaced it with direct Groot contact actions.
8. Replaced shared head external KeenIT Apple icon with a local Groot asset.
9. Replaced About page external KeenIT Apple icon with a local Groot asset.
10. Replaced Contact page external KeenIT Apple icon with a local Groot asset.

## Homepage checks
- `index12.html#` demo links: 0
- Demo `blog-single.html` links: 0
- Old 2020 demo blog dates: 0
- No-op newsletter forms: 0
- All six displayed career-guide source slugs resolve to current course records: PASS
- All six career-guide directories exist: PASS
- Homepage canonical count: 1
- Homepage H1 count: 1

## Contact checks
- Correct Groot title: PASS
- Canonical count: 1
- Current Mansarovar address present: PASS
- Current Groot email present: PASS
- Current Groot phone present: PASS
- Groot Mansarovar map embed present: PASS
- Fort Miley demo map residue: 0
- KeenIT references: 0
- External demo mailer endpoint: 0

## Asset/trust checks
- KeenIT references in shared head: 0
- KeenIT references in About: 0
- KeenIT references in Contact: 0
- Local Groot icon used in shared head/About/Contact: PASS

## Course architecture regression checks
- Priority courses: 12
- Unique course slugs: PASS
- Course sitemap coverage: PASS

## Remaining issue
Contact still contains 5 `rstheme` references elsewhere in its inherited static header/footer/template markup. They are not the corrected primary contact email, but they remain third-party template residue and should be removed in the next trust-page cleanup batch.

## Outcome
Homepage informational navigation is now tied to real migrated guides and the core Contact section is aligned with current Groot repository contact details. Architecture remains clean; continue cleaning existing trust pages before creating new trust/local URLs.
