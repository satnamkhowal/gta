<?php

$event = new WPEMS_Event( get_the_ID() );

$tpc_tp_event_start_time = get_post_meta( get_the_ID(), 'tp_event_date_start', true ) ? strtotime( get_post_meta( get_the_ID(), 'tp_event_date_start', true ) ) : '';
$tpc_tp_event_location = get_post_meta( get_the_ID(), 'tp_event_location', true ) ? get_post_meta( get_the_ID(), 'tp_event_location', true ) : '';
$tpc_tp_event_time_start = wpems_event_start( get_option( 'time_format' ) );
$tpc_tp_event_time_end   = wpems_event_end( get_option( 'time_format' ) );
$tpc_tp_event_starting_date   = wp_date( 'F j, Y', $tpc_tp_event_start_time );
$tpc_tp_event_start_date   = explode( '/', $tpc_tp_event_starting_date );

 $settings  = $this->get_settings_for_display();

echo '<div class="inner">';
    if ( has_post_thumbnail() && get_the_post_thumbnail_url() ) :
        echo '<div class="thumbnail">';
            echo '<a href="' . esc_url( get_the_permalink() ) . '">';
                echo $this->render_image( get_post_thumbnail_id( get_the_id() ), $settings ); 
            echo '</a>';

            if ( $start_time && $settings['enable_date'] ) :
                echo '<div class="event-time">';
                   echo '<span><i class="flaticon-time"></i>' . esc_html( $tpc_tp_event_starting_date) . '</span>';
                echo '</div>';
            endif;
            if ( $label_on_off == 'yes' ) :
                echo '<div class="event-label">';
                    echo '<span>' . esc_html( $label_text ) . '</span>';
                echo '</div>';
            endif;


        echo '</div>';
    endif;

    echo '<div class="content">';

    if ( $enable_price == 'yes' ) :
        echo '<div class="event-date">';
            printf( '%s', $event->is_free() ? __( 'Free', 'edubin' ) : wpems_format_price( $event->get_price() ) );
        echo '</div>';
    endif;
    
        the_title( '<h4 class="event-title"><a href="' . esc_url( get_the_permalink() ) . '" class="post-link">', '</a></h4>' );

        if ( $settings['enable_excerpt'] === 'yes' ) : 
            echo wpautop( wp_trim_words( wp_kses_post( get_the_excerpt() ), esc_html( $settings['excerpt_length'] ), esc_html( $settings['excerpt_end'] ) ) );
        endif;

        if ( $location ) :
            
            echo '<div class="edubin-event-meta">';
                echo '<span class="course-enroll"><i class="flaticon-location"></i>'. esc_html( $location ).'</span>';
            echo '</div>';

        endif;
        

    echo '</div>';
echo '</div>';