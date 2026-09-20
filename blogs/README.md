# Groot Academy Blog Publishing System

This folder contains the reusable PHP blog system used for Groot Academy SEO and Google Business Profile support content.

## Structure

```text
blogs/
├── _shared/
│   ├── blog-layout.php
│   ├── blog-registry.php
│   ├── assets/
│   │   └── blog.css
│   └── partials/
│       ├── head.php
│       ├── header.php
│       └── footer.php
├── _starter-blog/
│   ├── index.php
│   └── images/
│       └── README.md
├── <published-blog-slug>/
│   ├── index.php
│   └── images/
├── index.php
├── sitemap.xml
└── README.md
```

## Add a new SEO blog

1. Read `/logs` and inspect the current blog folders before starting so work from another AI/tool is not duplicated.
2. Copy `_starter-blog` and rename the copied folder using the final lowercase SEO slug.
3. Update the `$blog` metadata, canonical URL, article sections and CTA in the new `index.php`.
4. Keep article-specific images inside that article's `images/` folder and use descriptive alt text.
5. Add the published article once to `_shared/blog-registry.php`. The blog hub and automatic related-guide links use this central registry.
6. Add the canonical article URL to `sitemap.xml` with the correct `lastmod` date.
7. Set `robots` to `index,follow` only after the page is complete and ready to publish.
8. Record the completed or audited work in `/logs`.

## Google Business Profile workflow

For every new Groot Academy GBP/GMB topic:

- create or update the matching useful SEO article instead of publishing a thin duplicate page;
- use the article's canonical URL as the GBP website/button URL when the page is live;
- internally link the article to closely related guides;
- keep location wording natural, normally Vijay Path, Mansarovar, Jaipur when relevant;
- avoid unsupported placement or job guarantees.

## Change the design for every blog

Edit the shared files instead of copying layout code into each article:

- `_shared/blog-layout.php` for article markup and shared modules;
- `_shared/assets/blog.css` for styling;
- `_shared/partials/head.php` for shared SEO metadata and structured data;
- `_shared/blog-registry.php` for blog discovery and related-guide relationships.

All article folders that load the shared layout automatically receive these template improvements.
