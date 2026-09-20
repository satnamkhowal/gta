<?php
/*
 * GROOT ACADEMY BLOG STARTER
 *
 * 1. Copy this entire folder.
 * 2. Rename the copied folder to the final SEO slug.
 * 3. Replace the metadata and article content below.
 * 4. Keep every article-specific image inside this folder's /images directory.
 * 5. Add the published article to ../_shared/blog-registry.php.
 * 6. Add the canonical URL to ../sitemap.xml.
 * 7. Change robots to index,follow only when the article is complete and ready.
 * 8. Record AI-assisted work in /logs before moving to the next task.
 */

$blog = [
    'slug' => 'your-blog-slug',
    'title' => 'Your Blog Title Goes Here',
    'meta_title' => 'Your SEO Title | Groot Academy',
    'meta_description' => 'Write a clear 150-160 character description explaining what the reader will learn from this Groot Academy article.',
    'canonical' => 'https://grootacademy.com/blogs/your-blog-slug/',
    'robots' => 'noindex,follow',

    'category' => 'Career Guide',
    'author' => 'Groot Academy',
    'display_date' => 'September 16, 2026',
    'date_published' => '2026-09-16',
    'date_modified' => '2026-09-16',
    'reading_time' => '6 min read',

    'excerpt' => 'Add a short, useful summary that introduces the topic and gives readers a reason to continue.',

    // Keep blog-specific images inside this blog folder.
    // Example: 'featured_image' => 'images/featured-image.webp',
    // The shared SEO layer automatically converts local image paths to absolute URLs.
    'featured_image' => '',
    'featured_image_alt' => 'Descriptive SEO-friendly image alt text',

    'toc' => [
        ['id' => 'introduction', 'label' => 'Introduction'],
        ['id' => 'main-section', 'label' => 'Main Section'],
        ['id' => 'practical-tips', 'label' => 'Practical Tips'],
        ['id' => 'faq', 'label' => 'FAQs'],
        ['id' => 'conclusion', 'label' => 'Conclusion'],
    ],

    // Optional. Normally related guides are selected from blog-registry.php.
    // Add slugs here only when this article needs a custom related-post order.
    'related_posts' => [],

    'cta_title' => 'Want practical, career-focused training?',
    'cta_text' => 'Explore Groot Academy programs and choose a learning path based on your current level and career goal.',
    'cta_label' => 'Explore Groot Academy',
    'cta_url' => '/',
];

ob_start();
?>
<h2 id="introduction">Introduction</h2>
<p>
    Start with the reader's question, problem or career goal. Explain the topic naturally and avoid keyword stuffing.
    The shared template handles the page design, SEO meta tags, structured data, related guides, header, footer,
    table of contents and CTA.
</p>

<h2 id="main-section">Main Section</h2>
<p>
    Build the article around search intent. Use clear headings, useful examples, practical learning steps and
    natural Jaipur/Mansarovar relevance where it genuinely helps the reader.
</p>

<h3>Useful learning points</h3>
<ul>
    <li>Explain what to learn first and why.</li>
    <li>Show how skills connect to practical projects.</li>
    <li>Add internal links to genuinely related Groot Academy guides.</li>
</ul>

<!--
Example local blog image:
<figure>
    <img src="images/example-section-image.webp" alt="Describe the image accurately" loading="lazy">
    <figcaption>Optional image caption.</figcaption>
</figure>
-->

<h2 id="practical-tips">Practical Tips</h2>
<p>
    Add actionable advice, examples, comparisons or project-focused information that helps the reader make
    progress after reading the article.
</p>

<h2 id="faq">Frequently asked questions</h2>
<h3>What should a beginner learn first?</h3>
<p>Answer the question directly and keep the response useful rather than promotional.</p>

<h2 id="conclusion">Conclusion</h2>
<p>
    Summarize the key takeaway naturally. Before publishing, confirm the canonical URL, final internal links,
    image alt text, sitemap entry, registry entry and <code>index,follow</code> robots directive.
</p>
<?php
$blogContent = ob_get_clean();

require __DIR__ . '/../_shared/blog-layout.php';
