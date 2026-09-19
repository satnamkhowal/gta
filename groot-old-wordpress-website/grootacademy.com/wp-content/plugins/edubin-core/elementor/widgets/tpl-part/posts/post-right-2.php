<?php
echo '<div class="edubin-col-lg-12">';
    echo '<div class="single-news news-list" ' . ( !empty($animation_attribute) ? esc_attr($animation_attribute) : '' ) . '>';

    if ( !empty($settings['show_list_image']) && $settings['show_list_image'] === 'yes' ) {
        echo '<div class="blog-list-img">';

        if ( has_post_thumbnail() ) {
            echo '<div class="news-thum thum-list ' . ( $settings['layout_style'] == '3' ? 'overlay-layout-3' : '' ) . '">';
            echo '<a href="' . get_the_permalink() . '">';
            echo get_the_post_thumbnail( get_the_ID(), 'full' );
            echo '</a>';

            // if ( !empty($settings['post_label']) && $settings['post_label'] === 'yes' && !empty($settings['label_text']) ) {
            //     echo '<div class="news-label"><span>' . esc_html($settings['label_text']) . '</span></div>';
            // }

            echo '</div>'; // .news-thum
        } elseif ( !empty($video_link) ) {
            echo wp_oembed_get($video_link);
        }

        echo '</div>'; // .blog-list-img
    }

    echo '<div class="blog-list-content">';
        echo '<div class="news-cont">';

            // Date
            $archive_year  = get_the_time('Y');
            $archive_month = get_the_time('m');
            $archive_day   = get_the_time('d');

            echo '<ul class="blog-meta">';

            if ( 'post' === get_post_type() && $settings['show_author'] ): edubin_posted_author_name(); endif;

            if ( $settings['show_category'] && edubin_category_by_id( get_the_ID())) {
            echo '<li class="meta-blog-cat">';
                echo '<i class="flaticon-folder"></i>';
                echo wp_kses_post( edubin_category_by_id( get_the_ID(), 'category' ) );
            echo '</li>';
            }

            if ( $settings['show_date'] ) {
                echo '<li>';
                    echo '<i class="flaticon-calendar"></i>';
                    echo esc_html( get_the_date() );
                echo '</li>';
            }

            if ( $settings['show_comment'] ) {
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

        // Title
        if ( !empty($settings['show_title_list']) && $settings['show_title_list'] === 'yes' ) {
            echo '<a href="' . get_the_permalink() . '"><h3 class="news-title news-list-title">' .
                esc_html( wp_trim_words( get_the_title(), $settings['title_length_list'], '…' ) ) .
                '</h3></a>';
        }

        // Excerpt
        if ( !empty($settings['show_content_list']) && $settings['show_content_list'] === 'yes' ) {
            echo '<p class="content">' .
                esc_html( wp_trim_words( get_the_excerpt(), $settings['content_length'], '…' ) ) .
                '</p>';
        }

            echo '</div>'; // .news-cont
        echo '</div>'; // .blog-list-content
    echo '</div>'; // .single-news
echo '</div>'; // .edubin-col-lg-12
