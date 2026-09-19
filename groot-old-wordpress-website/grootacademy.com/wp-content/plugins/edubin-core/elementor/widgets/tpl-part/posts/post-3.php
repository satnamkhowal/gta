<?php

$tail_svg = '<svg class="chat-tail" xmlns="http://www.w3.org/2000/svg" width="51" 
  height="46" viewBox="0 0 51 46" >
  <path id="Rounded_Rectangle_84" data-name="Rounded Rectangle 84" fill-rule="evenodd" d="M54,-1 H313 a10,10,0,0,0,10,-10 V-289 a10,10,0,0,0,-10,-10 H-78 a10,10,0,0,0,-10,10 V-11 A10,10,0,0,0,-78,-1 H2 S23,28,0,46 C0,46,45.108,-1,54,-1 Z" />
</svg>';

echo '<div class="edubin-testimonial style-'. esc_attr( $settings['testi_style'] ).'">';
    echo '<div class="testimonial-content">';
        echo $tail_svg;
        if($settings['quote_show_hide'] == 'yes'){
            echo '<div class="quote-icon">'.$quote_icon.'</div>';
        }
        echo '<p class="client-feedback">'.esc_html__( $testimonial['client_say'] ).'</p>';
    echo '</div>';
    echo '<div class="author-details">';
        echo '<div class="author-img">';
            $client_image = $testimonial['client_image']['id'];
            if ($client_image ) {
                echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $testimonial, 'client_imagesize', 'client_image' );
            } else {
                echo '<img src="' . EDUBIN_PLUGIN_URL . '/assets/images/image-placeholder.png" alt="' . get_the_title() . '" />';
            }
        echo '</div>';
        echo '<div class="author-name-deg">';
            echo '<h4 class="name">'.esc_html__( $testimonial['client_name'] ).'</h4>';
            echo '<p class="designation">'.esc_html__( $testimonial['client_designation'] ).'</p>';
        echo '</div>';
    echo '</div>';
echo '</div>';

