# Priority course migration — batch 1

Adds dedicated Full Stack, MERN, Python and Java course pages using the existing GTA course preview styles, header and footer. The shared renderer provides curriculum, audience guidance, project practice ideas, FAQs, related guides and working telephone/email enquiry links.

Content is curated from public legacy files under `groot-old-wordpress-website/grootacademy.com/`. PHP from the source backup is never included or executed. Course data records source filenames; the completed migration also records original Git blob IDs in `migration/wordpress/priority-course-sources.json`.

Each page has a unique title, description, production canonical, Open Graph metadata, Course and FAQ structured data. Existing course artwork is reused from the canonical `post/images/card/` folder. The old Full Stack promotional poster was reviewed but excluded because it embeds an unverified limited-time price and historical offer.

Existing theme files and preview pages are retained. Only a small additional stylesheet styles native FAQ disclosures, course symbols and image containment. No changes to `newsite`, old WordPress core, plugins, source content or configuration.

QA: all four pages rendered successfully under local Apache/PHP 8.0; PHP syntax checks passed. Python desktop/mobile and Java mobile layouts were inspected. Full integration QA is recorded in batch 3.
