# Controlled SEO mini audit — Batch 6

Date: 2026-09-22
Trigger: Missing-page build started after checking the current keyword-to-URL map and live Groot Academy course evidence.

## Search Console access
- GSC Wizard connection was attempted first.
- Live Search Console data could not be queried because the connected GSC Wizard trial/subscription is inactive.
- No Search Console impressions/clicks were invented or inferred.
- This batch therefore used the existing SEO map, repository migration sources and current public Groot Academy course content for source validation.

## New canonical pages
1. /graphic-design-course-jaipur.php
2. /ui-ux-design-course-jaipur.php

Both pages use the shared Groot Academy course layout and centralized course data instead of duplicating page markup.

## Supporting content
- Added /blogs/ui-ux-design-career-guide-jaipur/
- Updated the existing Graphic Design career guide to link to the new canonical Graphic Design course page.
- Added the UI/UX guide to the central blog registry.

## Source validation
### Graphic Design
Verified against retained Groot Academy source material covering:
- Graphic Design foundations
- Typography, colour and layout
- Adobe Photoshop
- Adobe Illustrator
- Adobe InDesign
- Branding and identity
- Print/digital design
- Portfolio development

### UI/UX Design
Verified against current Groot Academy public course content covering:
- UI and UX fundamentals
- User research
- Information architecture
- Wireframing
- Figma
- Responsive interface design
- Prototyping
- Design systems
- Usability testing
- Portfolio projects

## Cannibalization controls
- Graphic Design remains separate from the informational Graphic Design career guide.
- UI/UX is positioned around user research, flows, Figma, prototyping and usability rather than frontend implementation.
- Graphic Design is positioned around visual communication, Adobe tools, branding and creative portfolio work.
- Related-course links connect the two without merging their primary intent.
- Legacy aliases route through the existing course redirect system toward the canonical PHP pages.

## Discovery / indexing
- Added both new money pages to /sitemap-courses.xml.
- Added the UI/UX career guide to /blogs/sitemap.xml.
- Added the UI/UX guide to /blogs/_shared/blog-registry.php.
- /courses.php automatically receives both pages through the centralized course catalogue.

## Validation
- specialist.json parses successfully.
- Graphic Design modules: 8; projects: 3; FAQs: 2.
- UI/UX modules: 9; projects: 3; FAQs: 2.
- Both wrapper files resolve through /includes/course-layout.php.
- Course sitemap references: PASS.
- Blog sitemap and registry references: PASS.

## Strategy synchronization
- seo/keyword-map.csv now marks Graphic Design and UI/UX as created canonical money pages.
- seo/content-plan.csv now records both as completed in Batch 6.

## Next controlled candidates
Do not create a duplicate Jaipur city doorway. Review next:
1. Programming Courses in Jaipur hub — only if differentiated from /courses.php.
2. Mansarovar branch page — after confirming current branch facts.
3. Pratap Nagar branch page — after confirming current branch facts.
4. Jagatpura branch page — after confirming current branch facts.
5. Design Courses hub — only after checking whether it adds unique comparison/navigation value beyond the two new design pages and existing Web Designing content.
