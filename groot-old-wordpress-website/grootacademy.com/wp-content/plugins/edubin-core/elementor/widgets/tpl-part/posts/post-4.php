<?php

echo '<div class="edubin-testimonial style-'. esc_attr( $settings['testi_style'] ).'">';
    echo '<div class="testimonial-thumb">';
        $client_image = $testimonial['client_image']['id'];
        if ($client_image ) {
            echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $testimonial, 'client_imagesize', 'client_image' );
        } else {
            echo '<img src="' . EDUBIN_PLUGIN_URL . '/assets/images/image-placeholder.png" alt="' . get_the_title() . '" />';
        }
        if($settings['quote_show_hide'] == 'yes'){
            echo '<div class="quote-icon">'.$quote_icon.'</div>';
        }
    echo '</div>';
    echo '<div class="testimonial-content">';
        echo '<p class="client-feedback">'.esc_html__( $testimonial['client_say'] ).'</p>';
        echo '<h4 class="name">'.esc_html__( $testimonial['client_name'] ).'</h4>';
        if(!empty($testimonial['client_designation'])){
            echo '<span class="designation"> / '.esc_html__( $testimonial['client_designation'] ).'</span>';
        }
    echo '</div>';
echo '</div>';
