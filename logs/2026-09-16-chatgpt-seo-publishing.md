# AI Work Log — 2026-09-16

Tool: ChatGPT / GitHub connector
Repository: `satnamkhowal/groot-academy`
Branch: `main`

## Pre-work audit

- AUDITED repository root: only `/blogs` existed before this logging setup.
- AUDITED `/blogs`: reusable shared PHP template, shared assets/partials, README, and `_starter-blog` already existed.
- AUDITED recent commits: the reusable blog system and starter structure had already been created, so that work was not duplicated.
- AUDITED branches: only `main` exists at the time of this check.
- No published topic-specific blog folders were present at the time of the initial audit.

## SEO review and shared improvements

- UPDATED `/blogs/_shared/partials/head.php` instead of replacing the existing template.
- Preserved title, meta description, canonical, robots, Open Graph, Twitter card and BlogPosting support.
- Added `og:site_name`, locale, article publish/modified metadata, stronger BlogPosting URL/mainEntityOfPage data, organization URLs and BreadcrumbList structured data.
- CREATED `/blogs/index.php` as an indexable internal-link hub for all current guides.
- CREATED `/blogs/sitemap.xml` covering the blog hub and published topic URLs.
- UPDATED the blog hub with ItemList structured data after additional guides appeared.

## Published Google Business Profile support blogs

1. CREATED `blogs/it-career-course-guidance-jaipur/index.php`
   - https://grootacademy.com/blogs/it-career-course-guidance-jaipur/
2. CREATED `blogs/software-development-coding-career-guide-jaipur/index.php`
   - https://grootacademy.com/blogs/software-development-coding-career-guide-jaipur/
3. CREATED `blogs/data-analytics-power-bi-career-guide-jaipur/index.php`
   - https://grootacademy.com/blogs/data-analytics-power-bi-career-guide-jaipur/
4. CREATED `blogs/digital-marketing-career-guide-jaipur/index.php`
   - https://grootacademy.com/blogs/digital-marketing-career-guide-jaipur/
5. CREATED `blogs/full-stack-web-development-career-guide-jaipur/index.php`
   - https://grootacademy.com/blogs/full-stack-web-development-career-guide-jaipur/
6. CREATED `blogs/python-programming-career-guide-jaipur/index.php`
   - https://grootacademy.com/blogs/python-programming-career-guide-jaipur/
7. CREATED `blogs/java-programming-software-development-jaipur/index.php`
   - https://grootacademy.com/blogs/java-programming-software-development-jaipur/
8. CREATED `blogs/mern-stack-react-development-career-guide-jaipur/index.php`
   - https://grootacademy.com/blogs/mern-stack-react-development-career-guide-jaipur/
9. CREATED `blogs/sql-database-career-guide-jaipur/index.php`
   - https://grootacademy.com/blogs/sql-database-career-guide-jaipur/
10. CREATED `blogs/web-designing-frontend-development-jaipur/index.php`
    - https://grootacademy.com/blogs/web-designing-frontend-development-jaipur/
11. CREATED `blogs/c-cpp-dsa-career-guide-jaipur/index.php`
    - https://grootacademy.com/blogs/c-cpp-dsa-career-guide-jaipur/
12. CREATED `blogs/excel-advanced-excel-career-guide-jaipur/index.php`
    - https://grootacademy.com/blogs/excel-advanced-excel-career-guide-jaipur/

## Concurrent AI/tool activity detected

After the initial publishing batch was completed, new commits appeared on `main` from another active workflow. These were checked before making further changes:

- AUDITED `blogs/data-science-machine-learning-career-guide-jaipur/index.php`
  - https://grootacademy.com/blogs/data-science-machine-learning-career-guide-jaipur/
  - Existing SEO title, description, canonical, index/follow, structured template usage, Jaipur relevance, practical roadmap, FAQs and internal links were already suitable. No content rewrite was necessary.
- AUDITED `blogs/generative-ai-tools-career-guide-jaipur/index.php`
  - https://grootacademy.com/blogs/generative-ai-tools-career-guide-jaipur/
  - Existing SEO title, description, canonical, index/follow, structured template usage, responsible-AI section, FAQs and internal links were already suitable. No duplicate rewrite was made.
- UPDATED `/blogs/index.php` to include both concurrent guides and ItemList structured data.
- UPDATED `/blogs/sitemap.xml` to include both concurrent canonical URLs.

This preserves work from other tools and applies only the missing SEO/discovery integration instead of duplicating their completed articles.

## Follow-on execution

After another repository check, the standalone Power BI / Business Intelligence GBP topic was still missing, so the next task was executed instead of redoing completed work:

- CREATED `blogs/power-bi-business-intelligence-career-guide-jaipur/index.php`
  - https://grootacademy.com/blogs/power-bi-business-intelligence-career-guide-jaipur/
  - Includes Power Query, data modelling, DAX, dashboards, KPIs, practical BI projects, FAQs and related internal links.
- UPDATED `/blogs/index.php` so the standalone Power BI guide is discoverable from the blog hub and included in ItemList structured data.
- UPDATED `/blogs/sitemap.xml` with the standalone Power BI canonical URL.

## Template hardening after user confirmation

Before making the next round of changes, `/logs`, the full `/blogs` tree and the current `main` commit were checked again. No newer overlapping AI/tool commit was present, and all 15 previously requested GBP-support topics were already published, so no duplicate article folders were created.

The existing template was kept and improved in place:

- CREATED `blogs/_shared/blog-registry.php` as the single registry for published guides, descriptions, categories and related-guide relationships.
- UPDATED `blogs/index.php` to read from the central registry instead of maintaining a second hard-coded list.
- UPDATED `blogs/_shared/blog-layout.php` so every existing registered article automatically receives up to three contextually related internal links without editing all 15 article files individually.
- UPDATED `blogs/_shared/assets/blog.css` with responsive related-guide cards using the existing design system.
- UPDATED `blogs/_shared/partials/head.php` so local featured-image paths are converted to absolute URLs for structured data/Open Graph/Twitter metadata, added image alt metadata, article section metadata, author metadata and a publisher logo in BlogPosting schema.
- UPDATED `blogs/_starter-blog/index.php` to match the current publication workflow: final slug, canonical, image folder, registry, sitemap, robots, logs and optional related-post overrides.
- UPDATED `blogs/README.md` because the previous documentation referenced outdated `sample-blog` and `blog-data.php` paths that do not exist in the current implementation.

Result: existing articles continue using the same shared template, while future design/SEO changes remain centralized and current articles gain stronger internal-link discovery automatically.

## Publishing rules applied

- SEO-friendly lowercase slugs.
- Unique SEO titles and meta descriptions.
- Canonical URLs on `grootacademy.com`.
- `index,follow` robots directives.
- Jaipur/Mansarovar local relevance used naturally.
- Search intent addressed with learning roadmaps, practical projects and FAQs.
- Related guides internally linked where relevant.
- No placement guarantees or unsupported job claims added.

## Image note

The current GitHub connector can create/update UTF-8 text files but does not upload binary PNG/JPG files. Existing generated promotional images were therefore not silently duplicated or replaced. The blog pages remain valid without featured images until matching assets are uploaded to each blog's `/images/` directory through a binary-capable workflow; the template now resolves local image paths into absolute SEO/social URLs automatically once those files are present.

## Future workflow

Before any future AI-assisted repository task:

1. Read `/logs`, recent commits and current blog folders.
2. Check whether another tool has already completed overlapping work.
3. If completed, improve SEO/correctness only when there is a clear benefit; otherwise skip duplication.
4. For each new Groot Academy Google Business Profile topic, create or update its matching SEO blog using `_starter-blog` and the shared template.
5. Add the published page to `_shared/blog-registry.php` and `sitemap.xml`.
6. Return the canonical blog URL for the GBP button/link.
7. Record the work in `/logs`.

## Status

COMPLETED — the original 12-topic batch is published, the Data Science and Generative AI guides are integrated, the standalone Power BI / Business Intelligence guide is published, all 15 current guides are integrated into the blog hub and sitemap, and the existing reusable template has now been hardened for centralized discovery, internal linking and future SEO publishing on `main`.
