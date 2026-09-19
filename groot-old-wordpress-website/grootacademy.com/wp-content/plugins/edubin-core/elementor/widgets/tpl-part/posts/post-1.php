<?php
if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

    echo '<div class="edu-blog blog-style-6">';
        echo '<div class="inner">';
                echo '<div class="thumbnail">';

                    echo '<a href="' . esc_url( get_the_permalink() ) . '">';
                        the_post_thumbnail( $settings['image_size_size'] );
                    echo '</a>';

                  if ( $settings['post_label'] === 'yes' ) : 
                        echo '<div class="news-label"><span>';
                             echo esc_html( $settings['label_text'] );
                        echo '</span></div>';
                  endif;


                echo '</div>';

            echo '<div class="content position-top">';

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

                if ( ! empty( $settings['show_title'] ) ) {
                    echo '<a href="' . esc_url( get_permalink() ) . '"><h3 class="news-title">' . esc_html( wp_trim_words( get_the_title(), $settings['title_length'], '' ) ) . '</h3></a>';
                }

               if (!empty($settings['show_content_big'])) {
                    echo wpautop( wp_trim_words( wp_kses_post( get_the_excerpt() ), esc_html( $settings['content_length'] ), '...' ) );
                }

            echo '</div>';
        echo '</div>';
    echo '</div>';
