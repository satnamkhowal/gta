<?php
echo '<div class="single-news edu-blog news-big" ' . esc_attr($animation_attribute) . '>';

if (!empty($video_link)) {
    echo wp_oembed_get($video_link);
} else {
    echo '<div class="news-thum thum-single ' . ( $settings['layout_style'] == '2' ? 'overlay-layout-6' : '' ) . '">';

    if (has_post_thumbnail()) {
        echo '<a href="' . get_the_permalink() . '">';
        echo get_the_post_thumbnail(get_the_ID(), $settings['image_size_size']);
        echo '</a>';
    } else {
        echo '<a href="' . get_the_permalink() . '">';
        echo '<img src="' . get_template_directory_uri() . '/assets/images/placeholder.png" alt="' . get_the_title() . '" />';
        echo '</a>';
    }

    if ($settings['layout_style'] == '2' ) {

        echo '<div class="content-thumb">';
        echo '<div class="edubin-news-meta">';

            echo '<ul class="blog-meta">';

            if ( 'post' === get_post_type() && $settings['show_author_big'] ): edubin_posted_author_name(); endif;

            if ( $settings['show_category'] && edubin_category_by_id( get_the_ID())) {
            echo '<li class="meta-blog-cat">';
                echo '<i class="flaticon-folder"></i>';
                echo wp_kses_post( edubin_category_by_id( get_the_ID(), 'category' ) );
            echo '</li>';
            }

            if ( $settings['show_date_big'] ) {
                echo '<li>';
                    echo '<i class="flaticon-calendar"></i>';
                    echo esc_html( get_the_date() );
                echo '</li>';
            }

            if ( $settings['show_comment_big'] ) {
                echo '<li>';
                    echo '<i class="flaticon-chat"></i>';
                    printf( // WPCS: XSS OK.
                        /* translators: 1: comment count number, 2: title. */
                        esc_html( _nx( '%1$s %2$s', '%1$s %2$s', get_comments_number(), 'comments title', 'edubin' ) ),
                        number_format_i18n( get_comments_number() ),
                        esc_html( $settings['comment_text'] ),
                        '<span>' . esc_html( get_the_title() ) . '</span>'
                    );
                echo '</li>';
            }

            echo '</ul>';

        echo '</div>'; // edubin-news-meta

        if (!empty($settings['show_title'])) {
            echo '<a href="' . get_the_permalink() . '"><h3 class="news-title">' . wp_trim_words(get_the_title(), $settings['title_length'], '') . '</h3></a>';
        }

        echo '</div>'; // content-thumb

        if ( $settings['post_label'] === 'yes' ) {
        echo '<div class="news-label blog-category"><span>';
            echo esc_html( $settings['label_text'] );
        echo '</span></div>';
        }
        // elseif ($settings['show_category'] == 'yes') {
        //     echo '<div class="blog-category">';
        //     echo wp_kses_post(edubin_category_by_id(get_the_ID(), 'category'));
        //     echo '</div>';
        // }

    }

    if ($settings['layout_style'] == '7') {
        $archive_month_M = get_the_time('M'); 
        $archive_day_d   = get_the_time('d'); 
        echo '<div class="edubin-blog-date">';
        echo '<p><span>' . esc_attr($archive_day_d) . '</span>' . esc_attr($archive_month_M) . '</p>';
        echo '</div>';
    }

    echo '</div>'; // news-thum
}

// if (!empty($settings['show_content_big'])) {
//     echo '<div class="news-cont">';
//     echo '<p class="content">' . wp_trim_words(get_the_excerpt(), $settings['content_length'], '') . '</p>';
//     echo '</div>';
// }

echo '</div>'; // single-news
?>