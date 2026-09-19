<?php
if ($settings['pagi_on_off']) :
    echo '<nav class="edubin-pagination-wrapper edubin-col-12 tpc-custom-pagination" role="navigation" aria-label="Posts">';
    echo '<div class="page-number">';

    echo paginate_links(array(
        'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'total'        => $query->max_num_pages,
        'current'      => max(1, get_query_var('paged')),
        'format'       => '?paged=%#%',
        'show_all'     => $settings['pagi_show_all'],
        'type'         => 'plain',
        'end_size'     => $settings['pagi_end_size'],
        'mid_size'     => $settings['pagi_mid_size'],
        'prev_next'    => true,
        'prev_text'    => '<i class="edubin-pagination-icon flaticon-back-1" aria-hidden="true"></i>',
        'next_text'    => '<i class="edubin-pagination-icon flaticon-next" aria-hidden="true"></i>',
        'add_args'     => false,
        'add_fragment' => '',
    ));

    echo '</div>'; // .page-number
    echo '</nav>';
endif;
?>