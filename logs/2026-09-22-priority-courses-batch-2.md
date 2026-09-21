# Priority course migration — batch 2

Adds Data Science/ML, Data Analytics, Power BI, Generative AI, Cloud/AWS, Cyber Security, Flutter and Digital Marketing pages to the GTA course renderer.

## Source corrections

- Data Science and ML source files contain unrelated MERN, Java and UI/UX placeholders. These were excluded; relevant statistics, Python, data preparation, modelling and evaluation topics were retained and organised.
- The file named `best-power-bi-training-institute-course-in-jaipur-rajasthan.php` actually contains MERN copy. It was not used as a Power BI content source or automatically redirected. Power BI content comes from the dedicated Power BI modules in the legacy Data Analytics syllabus.
- No matching legacy Generative AI course file was found. Its page adapts the existing GTA Generative AI career guide; provenance explicitly identifies this supplemental source.
- Project descriptions are labelled practice ideas. Old unverifiable ratings, student totals, salary claims, placement guarantees, fees, refund promises and batch timings were not reproduced in the new course content.

## Media

Reuses existing Python, Java, web development, Node.js, analytics and data science cards. Adds the original Flutter logo and Digital Marketing artwork to `post/images/card/`, the repository's canonical migrated course-card location. SHA-256 comparisons found no identical file already in that destination folder. Both new files retain original bytes; no thumbnail sets were copied. The media manifest records their source, destination and hash. The read-only backup is preserved.

Pages without suitable verified artwork use the existing Font Awesome icons and GTA colours. No fabricated course photographs or unrelated stock media were introduced.

QA: all eight pages rendered successfully under local Apache/PHP 8.0 with valid metadata, schema and course images. Full integration QA is recorded in batch 3.
