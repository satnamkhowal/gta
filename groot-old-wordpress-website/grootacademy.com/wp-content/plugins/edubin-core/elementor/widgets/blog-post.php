<?php

namespace EdubinCore\Widgets;
use \Elementor\Controls_Manager;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Background;
use \Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Edubin_Elementor_Widget_Latest_Post extends Widget_Base {

    public function get_name() {
        return 'edubin-latest-post';
    }

    public function get_title() {
        return __( 'Blog Posts', 'edubin-core' );
    }
    public function get_keywords() {
        return [ 'Blog Posts', 'blog', 'posts', 'post'];
    }

    public function get_icon() {
        return 'edubin-elementor-icon eicon-posts-grid';
    }

    public function get_categories()
    {
        return ['edubin-core'];
    }

    public function get_style_depends() {
        return [ 
            'edubin-post', 
        ]; 
    }

    protected function register_controls() {

        $this->start_controls_section(
            'post_grid_section',
            [
                'label' => __( 'Post Grid', 'edubin-core' ),
            ]
        );
    
        $this->add_control(
            'layout_style',
            [
                'label' => __( 'Style', 'edubin-core' ),
                'type' => Controls_Manager::SELECT,
                'default' => '1',
                'options' => [
                    '1'   => __( 'Style 1', 'edubin-core' ),
                    '2'   => __( 'Style 2', 'edubin-core' ),
                    '3'   => __( 'Style 3', 'edubin-core' ),
                    '4'   => __( 'Style 4', 'edubin-core' ),
                    '5'   => __( 'Style 5', 'edubin-core' ),
                    '6'   => __( 'Style 6', 'edubin-core' ),
                ],
            ]
        );

       $this->add_control(
            'big_post_limit',
            [
                'label' => __('Limit Posts', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => 1,
            ]
        );            
    
        $this->add_control(
            'list_post_limit',
            [
                'label' => __('Limit Lists Posts', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
                'condition' => [
                    'layout_style' => array('2', '3', '4'),
                ]
            ]
        );

        $this->add_control(
            'column_layout',
            [
                'label' => __( 'Column Layout', 'edubin-core' ),
                'type' => Controls_Manager::SELECT,
                'default' => '6',
                'options' => [
                    '6'   => __( 'Column 6-6', 'edubin-core' ),
                    '5'   => __( 'Column 5-7', 'edubin-core' ),
                    '7'   => __( 'Column 7-5', 'edubin-core' ),
                ],
                'condition' => [
                    'layout_style' => array('2', '3', '4'),
                ]
            ]
        );

        $this->add_control(
            'column_layout_2',
            [
                'label' => __( 'Column Layout', 'edubin-core' ),
                'type' => Controls_Manager::SELECT,
                'default' => '4',
                'options' => [
                    '12'   => __( 'Column 1', 'edubin-core' ),
                    '6'   => __( 'Column 2', 'edubin-core' ),
                    '4'   => __( 'Column 3', 'edubin-core' ),
                    '3'   => __( 'Column 4', 'edubin-core' ),
                ],
                'condition' => [
                    'layout_style' => array('1', '5', '6'),
                ]
            ]
        );

        $this->add_control(
            'custom_order',
            [
                'label' => esc_html__( 'Custom Order', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
    
        $this->add_control(
            'order',
            [
                'label' => esc_html__( 'Order', 'edubin-core' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'DESC',
                'options' => [
                    'DESC'  => esc_html__('Descending','edubin-core'),
                    'ASC'   => esc_html__('Ascending','edubin-core'),
                ],
                'condition' => [
                    'custom_order!' => 'yes',
                ]
            ]
        );
    
        $this->add_control(
            'orderby',
            [
                'label' => esc_html__( 'Orderby', 'edubin-core' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'date',
                'options' => [
                    'none'          => esc_html__('None','edubin-core'),
                    'ID'            => esc_html__('ID','edubin-core'),
                    'date'          => esc_html__('Date','edubin-core'),
                    'name'          => esc_html__('Name','edubin-core'),
                    'title'         => esc_html__('Title','edubin-core'),
                    'comment_count' => esc_html__('Comment count','edubin-core'),
                    'rand'          => esc_html__('Random','edubin-core'),
                ],
                'condition' => [
                    'custom_order' => 'yes',
                ]
            ]
        );
        $this->add_control(
            'posts_category',
            [
                'label' => __('Select Category', 'edubin-core'),
                'type' => Controls_Manager::SELECT2,
                'options' => edubin_posts_get_taxonomies(),
                'multiple' => true,
            ]
        );
    
        $this->add_responsive_control(
            'fixed_image_height',
            [
                'label' => __( 'Image Height', 'edubin-core' ),
                'type' => Controls_Manager::SLIDER,
                'default' => [
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 100,
                        'max' => 700,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .edubin-latest-news.layout-1 .news-thum' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .edubin-latest-news.layout-5 .news-thum' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .edubin-latest-news.layout-1 .news-thum img' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .edubin-latest-news.layout-5 .news-thum img' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .edubin-latest-news .news-thum.thum-single img' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .layout-6 .single-news .news-thum img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
    );

    $this->add_responsive_control(
        'fixed_image_height_list_posts',
        [
            'label' => __( 'Image Height List Posts', 'edubin-core' ),
            'type' => Controls_Manager::SLIDER,
            'default' => [
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 100,
                    'max' => 500,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .edubin-latest-news .news-thum.thum-list img' => 'height: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'layout_style' => array('2', '3', '4'),
            ]
        ]
    );
    
    $this->add_responsive_control(
        'fixed_image_width_list_posts',
        [
            'label' => __( 'Image Width List Posts', 'edubin-core' ),
            'type' => Controls_Manager::SLIDER,
            'default' => [
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 50,
                    'max' => 700,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .edubin-latest-news .single-news .blog-list-img' => 'width: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'layout_style' => array('2', '3', '4'),
            ]
        ]
    );

    $this->add_control(
        'default_scroll_animation',
        [
            'type'         => Controls_Manager::SWITCHER,
            'label'        => esc_html__( 'Scroll Animation', 'edubin-core' ),
            'label_on'     => esc_html__( 'Enable', 'edubin-core' ),
            'label_off'    => esc_html__( 'Disable', 'edubin-core' ),
            'default'      => 'yes',
            'return_value' => 'yes',
        ]
    );

    $this->end_controls_section(); // Content Option End
    
    $this->start_controls_section(
        'post_grid_title',
        [
            'label' => __( 'Title', 'edubin-core' ),
        ]
    );

    $this->add_control(
        'show_title',
        [
            'label' => esc_html__( 'Title', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => 'yes',
            'separator'=>'before',
        ]
    );

    $this->add_control(
        'title_length',
        [
            'label' => __('Title Length', 'edubin-core'),
            'type' => Controls_Manager::NUMBER,
            'default' => 15,
        ]
    );

    $this->add_control(
        'show_title_list',
        [
            'label' => esc_html__( 'Title List Post', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => 'yes',
            'separator'=>'before',
            'condition' => [
                'layout_style' => array('2', '3', '4'),
            ]
        ]
    );

    $this->add_control(
        'title_length_list',
        [
            'label' => __('Title Length List Posts', 'edubin-core'),
            'type' => Controls_Manager::NUMBER,
            'default' => 15,
            'condition' => [
                'layout_style' => array('2', '3', '4'),
            ] 
        ]
    );

    $this->end_controls_section(); // Content Option End
    
    $this->start_controls_section(
        'post_grid_meta',
        [
            'label' => __( 'Meta', 'edubin-core' ),
        ]
    );
    $this->add_control(
        'show_author_big',
        [
            'label' => esc_html__( 'Author (Big)', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => 'yes',
            'condition' => [
                'layout_style' => array('2','3','4'),
            ]
        ]
    );

    $this->add_control(
        'show_author',
        [
            'label' => esc_html__( 'Author', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );

    $this->add_control(
        'show_date_big',
        [
            'label' => esc_html__( 'Date (Big)', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => 'yes',
            'condition' => [
                'layout_style' => array('2','3','4'),
            ]
        ]
    );

    $this->add_control(
        'show_date',
        [
            'label' => esc_html__( 'Date', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => '',
        ]
    );

    $this->add_control(
        'show_category_big',
        [
            'label' => esc_html__( 'Category (Big)', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => 'yes',
            'condition' => [
                'layout_style' => array('2','3','4'),
            ]
        ]
    );

    $this->add_control(
        'show_category',
        [
            'label' => esc_html__( 'Category', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );

    $this->add_control(
        'post_label',
        [
            'type'         => Controls_Manager::SWITCHER,
            'label'        => __( 'Label', 'edubin-core' ),
            'label_on'     => __( 'Enable', 'edubin-core' ),
            'label_off'    => __( 'Disable', 'edubin-core' ),
            'default'      => 'no',
            'return_value' => 'yes',
        ]
    );

    $this->add_control(
        'label_text',
        [
            'type'         => Controls_Manager::TEXT,
            'label'        => __( 'Label Text', 'edubin-core' ),
            'default'      => __( 'News', 'edubin-core' ),
            'condition'    => [
                'post_label' => 'yes'
            ]
        ]
    );
    
    $this->add_control(
        'show_comment_big',
        [
            'label' => esc_html__( 'Comment (Big)', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => '',
             'condition' => [
                'layout_style' => array('2','3','4'),
            ]
        ]
    );

    $this->add_control(
        'show_comment',
        [
            'label' => esc_html__( 'Comment', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => '',
        ]
    );

    $this->add_control(
        'comment_text',
        [
            'label' => __( 'Comment Text', 'edubin-core' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'Comments', 'edubin-core' ),
            'placeholder' => __( 'Comments', 'edubin-core' ),
        ]
    );
    
    $this->end_controls_section(); // Content Option End
    
    $this->start_controls_section(
        'post_grid_content',
        [
            'label' => __( 'Content', 'edubin-core' ),
        ]
    );
      
    $this->add_group_control(
        Group_Control_Image_Size::get_type(),
        [
            'name' => 'image_size',
            'default' => 'large',
            'separator' => 'none',
        ]
    );
    
    $this->add_control(
        'show_content_big',
        [
            'label' => esc_html__( 'Content', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    ); 

    $this->add_control(
        'content_length_big',
        [
            'label' => __('Content Length', 'edubin-core'),
            'type' => Controls_Manager::NUMBER,
            'default' => 45,
            'condition' => [
                'layout_style' => array( '2', '3', '4'),
            ]
        ]
    );

    $this->add_control(
        'show_content_list',
        [
            'label' => esc_html__( 'Content List Posts', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => '',
            'separator'=>'before',
            'condition' => [
                'layout_style' => array('2', '3', '4'),
            ]
        ]
    );

    $this->add_control(
        'content_length',
        [
            'label' => __('Content Length List Post', 'edubin-core'),
            'type' => Controls_Manager::NUMBER,
            'default' => 15,
            'condition' => [
                'layout_style' => array('1', '5', '6'),
            ]
        ]
    );

    $this->add_control(
        'show_list_image',
        [
            'label' => esc_html__( 'List Posts Image', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => 'yes',
            'condition' => [
                'layout_style' => array('2', '3', '4'),
            ]
        ]
    );

    $this->add_group_control(
        Group_Control_Image_Size::get_type(),
        [
            'name' => 'list_image_size',
            'default' => 'medium',
            'condition' => [
                'layout_style' => array('2', '3', '4'),
            ]
        ]
    );

    $this->end_controls_section(); // Content Option End
    
    $this->start_controls_section(
        'read_more_section',
        [
            'label' => __( 'Read More', 'edubin-core' ),
            'condition' => [
                'layout_style' => array('1','5'),
            ]
        ]
    );

    $this->add_control(
        'show_read_more',
        [
            'label' => esc_html__( 'Read More', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => '',
    
        ]
    );

    $this->add_control(
        'read_more_text',
        [
            'label' => __( 'Read More Text', 'edubin-core' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'Read More', 'edubin-core' ),
            'placeholder' => __( 'Read More', 'edubin-core' ),
            'condition' => [
                'show_read_more' => 'yes',
            ],
        ]
    );

    $this->end_controls_section(); // Content Option End
    
    // Pagination 
    $this->start_controls_section(
        'pagination_section',
        [
            'label' => __( 'Pagination', 'edubin-core' ),
            'condition' => [
                'layout_style' =>  array('1', '5', '6'),
            ]
        ]
    );
    
    $this->add_control(
        'pagi_on_off',
        [
            'label' => esc_html__( 'Pagination', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => '',
        ]
    ); 

    $this->add_responsive_control(
        'pagi_align',
            [
                'label'         => esc_html__( 'Alignment', 'edubin-core' ),
                'type'          => Controls_Manager::CHOOSE,
                'options'       => [
                    'left'      => [
                        'title'=> esc_html__( 'Left', 'edubin-core' ),
                        'icon' => 'eicon-text-align-left',
                        ],
                    'center'    => [
                        'title'=> esc_html__( 'Center', 'edubin-core' ),
                        'icon' => 'eicon-text-align-center',
                        ],
                    'right'     => [
                        'title'=> esc_html__( 'Right', 'edubin-core' ),
                        'icon' => 'eicon-text-align-right',
                        ],
                    ],
                'toggle'        => false,
                'default'       => 'center',
                'selectors'     => [
                    '{{WRAPPER}} .edubin-pagination-wrapper .page-number' => 'justify-content: {{VALUE}};',
                    ],
            ]
    );

    $this->add_control(
        'pagi_end_size',
        [
            'label' => __('End Size', 'edubin-core'),
            'type' => Controls_Manager::NUMBER,
            'default' => 2,
        ]
    );  

    $this->add_control(
        'pagi_mid_size',
        [
            'label' => __('Mid Size', 'edubin-core'),
            'type' => Controls_Manager::NUMBER,
            'default' => 1,
        ]
    );  
    
    $this->add_control(
        'pagi_show_all',
        [   
            'label' => esc_html__( 'Show All', 'edubin-core' ),
            'type' => Controls_Manager::SWITCHER,
            'label_off' => __('No', 'edubin-core'),
            'label_on' => __('Yes', 'edubin-core'),
            'return_value' => 'yes',
            'default' => '',
        ]
    );

    $this->end_controls_section();
    
    // Style content tab section
    $this->start_controls_section(
        'post_grid_style_section',
        [
            'label' => __( 'Styles', 'edubin-core' ),
            'tab' => Controls_Manager::TAB_STYLE,
            'condition' => [
                'layout_style!' => ['5'],
            ]
        ]
    );
    
    $this->add_group_control(
        Group_Control_Background::get_type(),
        [
            'name' => 'blog_content_bg_color',
            'types' => ['classic', 'gradient'],
            'selector' => '{{WRAPPER}} .edu-blog .content',
            'condition' => [
                'layout_style!' => ['2'],
            ]
        ]
    );

    $this->add_control(
        'more_options',
        [
            'label' => esc_html__( 'Image Hover Overlay Color', 'edubin-core' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
        ]
    );

    $this->add_group_control(
        Group_Control_Background::get_type(),
        [
            'name' => 'blog_image_overlay_color',
            'types' => ['classic', 'gradient'],
            'selector' => '{{WRAPPER}} .edu-blog .thumbnail a:after',
        ]
    );

    $this->end_controls_section();

    // Style title tab section
    $this->start_controls_section(
        'section_title_style',
        [
            'label' => __( 'Title', 'edubin-core' ),
            'tab'   => Controls_Manager::TAB_STYLE,
        ]
    );
    
    $this->start_controls_tabs( 'tabs_title_style' );
    
    $this->start_controls_tab(
        'tab_title_normal',
        [
            'label' => __( 'Normal', 'edubin-core' ),
        ]
    );
    
    $this->add_control(
        'title_color',
        [
            'label'     => __( 'Title Color', 'edubin-core' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .edu-blog .content .get__title .get__title-link' => 'color: {{VALUE}};',
                '{{WRAPPER}} .edu-blog .news-cont .news-title' => 'color: {{VALUE}};',
                '{{WRAPPER}} .edu-blog .news-title' => 'color: {{VALUE}};',
            ],
        ]
    );
    
    $this->end_controls_tab();      
    
    $this->start_controls_tab(
        'tab_title_hover',
        [
            'label' => __( 'Hover', 'edubin-core' ),
        ]
    );
    
    $this->add_control(
        'title_hover_color',
        [
            'label'     => __( 'Title Hover Color', 'edubin-core' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .edu-blog .content .get__title .get__title-link:hover' => 'color: {{VALUE}};',
                '{{WRAPPER}} .edu-blog .content .get__title .get__title-link:focus' => 'color: {{VALUE}};',
                '{{WRAPPER}} .edu-blog .news-cont .news-title:hover' => 'color: {{VALUE}};',
                '{{WRAPPER}} .edu-blog .news-cont .news-title:focus' => 'color: {{VALUE}};',
            ],
        ]
    );
    
    $this->end_controls_tab();
    
    $this->end_controls_tabs();
    
    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'title_typography',
            'label' => __( 'Typography', 'edubin-core' ),
            'selector' => '{{WRAPPER}} .edu-blog .content .get__title .get__title-link, .edu-blog .news-cont .news-title, .edu-blog .news-cont .news-title, .edu-blog .course__title .course__title-link',
        ]
    );

    $this->add_responsive_control(
        'title_margin',
        [
            'label' => __( 'Margin', 'edubin-core' ),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .edu-blog .get__title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .edu-blog .news-cont .news-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );
    
    $this->add_responsive_control(
        'title_align',
        [
            'label' => __( 'Alignment', 'edubin-core' ),
            'type' => Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => __( 'Left', 'edubin-core' ),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => __( 'Center', 'edubin-core' ),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => __( 'Right', 'edubin-core' ),
                    'icon' => 'eicon-text-align-right',
                ]
            ],
            'selectors' => [
                '{{WRAPPER}} .edu-blog .content .get__title' => 'text-align: {{VALUE}};',
                '{{WRAPPER}} .edu-blog .news-cont .news-title' => 'text-align: {{VALUE}};',
            ],
            
        ]
    );
     
    $this->end_controls_section();
    
    // List items
    $this->start_controls_section(
        'section_title_list_style',
        [
            'label' => __( 'List Posts Title', 'edubin-core' ),
            'tab'   => Controls_Manager::TAB_STYLE,
            'condition' => [
                'layout_style' => array('2', '3', '4'),
            ]
        ]
    );

    $this->start_controls_tabs( 'tabs_title_list_style' );
    
    $this->end_controls_tabs();
    
    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'title_list_typography',
            'label' => __( 'Typography', 'edubin-core' ),
            'selector' => '{{WRAPPER}} .edubin-latest-news .single-news.news-big .news-thum.thum-single .content-thumb .news-title',
        ]
    );
    
    $this->end_controls_section();
    
    // Style meta tab section
    $this->start_controls_section(
        'post_grid_meta_style_section',
        [
            'label' => __( 'Meta', 'edubin-core' ),
            'tab' => Controls_Manager::TAB_STYLE,
        ]
    );
    $this->add_control(
        'meta_color',
        [
            'label' => __( 'Text Color', 'edubin-core' ),
            'type' => Controls_Manager::COLOR,
            'default'=>'',
            'selectors' => [
                '{{WRAPPER}} .edu-blog .blog-meta li a' => 'color: {{VALUE}}',
                '{{WRAPPER}} .edu-blog .blog-meta li' => 'color: {{VALUE}}',
            ],
        ]
    );
   $this->add_control(
        'meta_bg_color',
        [
            'label' => __( 'Date Background Color', 'edubin-core' ),
            'type' => Controls_Manager::COLOR,
            'default'=>'',
            'selectors' => [
                '{{WRAPPER}} .edubin-latest-news .edubin-blog-date' => 'background: {{VALUE}}',
            ],
            'condition' => [
                'layout_style' => '4',
            ]
        ]
    );
    $this->add_control(
        'meta_icon_color',
        [
            'label' => __( 'Icon Color', 'edubin-core' ),
            'type' => Controls_Manager::COLOR,
            'default'=>'',
            'selectors' => [
                '{{WRAPPER}} .edu-blog .blog-meta li:not(:last-child):after' => 'background-color: {{VALUE}}',
            ],
        ]
    );
 
    $this->end_controls_section();

    $this->start_controls_section(
        'post_grid_content_style_section',
        [
            'label' => __( 'Content', 'edubin-core' ),
            'tab' => Controls_Manager::TAB_STYLE,
            'condition' => [
                'show_content_big' => 'yes',
            ]
        ]
    );
    
    $this->add_control(
        'content_color',
        [
            'label' => __( 'Text Color', 'edubin-core' ),
            'type' => Controls_Manager::COLOR,
            'default'=>'',
            'selectors' => [
                '{{WRAPPER}} .edu-blog .content' => 'color: {{VALUE}}',
                // '{{WRAPPER}} .edubin-latest-news .single-news' => 'color: {{VALUE}}',
            ],
        ]
    );
    
    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'content_typography',
            'label' => __( 'Typography', 'edubin-core' ),
            'selector' => '{{WRAPPER}} .edu-blog .content p',
        ]
    );
    
    $this->end_controls_section();

    $this->start_controls_section(
        'section_read_more_style',
        [
            'label' => __( 'Read More', 'edubin-core' ),
            'tab'   => Controls_Manager::TAB_STYLE,            
            'conditions' => [
                'terms' => [
                    [
                        'name' => 'layout_style',
                        'operator' => '!==',
                        'value' => '5',
                    ],
                    [
                        'name' => 'show_read_more',
                        'operator' => '==',
                        'value' => 'yes',
                    ],
                ],
            ],
        ]
    );
    
    $this->start_controls_tabs( 'tabs_read_more_style' );
    
    $this->start_controls_tab(
        'tab_read_more_normal',
        [
            'label' => __( 'Normal', 'edubin-core' ),
        ]
    );
    
    $this->add_control(
        'read_more_color',
        [
            'label'     => __( 'Color', 'edubin-core' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .edu-blog .edubin-blog-readmore a.edubin-blog-btn' => 'color: {{VALUE}};',
                '{{WRAPPER}} .edu-blog .edubin-blog-readmore a.edubin-blog-btn::before' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $this->end_controls_tab();      
    
    $this->start_controls_tab(
        'tab_read_more_hover',
        [
            'label' => __( 'Hover', 'edubin-core' ),
        ]
    );
    
    $this->add_control(
        'read_more_hover_color',
        [
            'label'     => __( 'Hover Color', 'edubin-core' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .edu-blog .edubin-blog-readmore a.edubin-blog-btn:hover' => 'color: {{VALUE}};',
                '{{WRAPPER}} .edu-blog .edubin-blog-readmore a.edubin-blog-btn:hover:before' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $this->end_controls_tab();
    
    $this->end_controls_tabs();
    
    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'read_more_typography',
            'label' => __( 'Typography', 'edubin-core' ),
            'selector' => '{{WRAPPER}} .edu-blog .edubin-blog-readmore a.edubin-blog-btn',
        ]
    );
    
    $this->end_controls_section();
    } // End options
    
      protected function render( $instance = [] ) {

        $settings = $this->get_settings_for_display();
        $prefix   = '_edubin_';

        // Fallback
        $big_limit  = ! empty( $settings['big_post_limit'] ) ? $settings['big_post_limit'] : 1;
        $list_limit = ! empty( $settings['list_post_limit'] ) ? $settings['list_post_limit'] : 3;

        $order   = ! empty( $settings['order'] ) ? $settings['order'] : 'DESC';
        $orderby = ! empty( $settings['orderby'] ) ? $settings['orderby'] : 'date';
        $paged   = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        // Helper function - tax_query
        $get_tax_query = function( $categories ) {
            if ( empty( $categories ) || ! is_array( $categories ) ) return [];
            $field = is_numeric( $categories[0] ) ? 'term_id' : 'slug';
            return [
                [
                    'taxonomy' => 'category',
                    'terms' => $categories,
                    'field' => $field,
                    'include_children' => false,
                ]
            ];
        };

        // Query Arguments
        $basic_lists_args = [
            'post_type'           => 'post',
            'posts_per_page'      => $list_limit,
            'post_status'         => 'publish',
            'paged'               => $paged,
            'ignore_sticky_posts' => true,
            'order'               => $order,
        ];

        $single_args = [
            'post_type'           => 'post',
            'posts_per_page'      => $big_limit,
            'post_status'         => 'publish',
            'paged'               => $paged,
            'ignore_sticky_posts' => true,
            'order'               => $order,
        ];

        $lists_args = [
            'post_type'           => 'post',
            'posts_per_page'      => $list_limit,
            'post_status'         => 'publish',
            'paged'               => $paged,
            'ignore_sticky_posts' => true,
            'offset'              => 1,
            'order'               => $order,
        ];

        if ( ! empty( $settings['custom_order'] ) && $settings['custom_order'] === 'yes' ) {
            $single_args['orderby'] = $orderby;
            $lists_args['orderby']  = $orderby;
        }

        // Category Filter
        if ( ! empty( $settings['posts_category'] ) ) {
            $tax_query = $get_tax_query( $settings['posts_category'] );
            $single_args['tax_query'] = $tax_query;
            $lists_args['tax_query']  = $tax_query;
        }

        ob_start(); // Output buffering start

        $layout_style = isset( $settings['layout_style'] ) ? $settings['layout_style'] : '1';
        $animation_attribute = ( ! empty( $settings['default_scroll_animation'] ) && $settings['default_scroll_animation'] === 'yes' ) ? ' data-sal' : '';

        // Layout rendering start
        if ( in_array( $layout_style, ['1','5','6'], true ) ) {

            echo '<div class="edubin-row tpc_g_30 edubin-latest-news layout-' . esc_attr( $layout_style ) . '">';

            $query = new \WP_Query( $single_args );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post();

                    $clm_layout_2 = ! empty( $settings['column_layout_2'] ) ? $settings['column_layout_2'] : '4';
                    $classes = 'edubin-col-12 edubin-col-sm-6 edubin-col-md-6 edubin-col-lg-' . esc_attr( $clm_layout_2 );
                    if ( $layout_style === '6' ) {
                        $classes .= ' edubin-no-gutters';
                    }

                    echo '<div class="' . esc_attr( $classes ) . '"' . esc_attr( $animation_attribute ) . '>';

                    $template_file = EDUBIN_PLUGIN_DIR . 'elementor/widgets/tpl-part/posts/post-' . $layout_style . '.php';
                    if ( file_exists( $template_file ) ) {
                        include $template_file;
                    }

                    echo '</div>';

                endwhile;
                wp_reset_postdata();

                if ( ! empty( $settings['pagi_on_off'] ) && $settings['pagi_on_off'] === 'yes' ) {
                    $pagination = EDUBIN_PLUGIN_DIR . 'elementor/widgets/tpl-part/posts/pagination.php';
                    if ( file_exists( $pagination ) ) {
                        include $pagination;
                    }
                }

            endif;

            echo '</div>';

        } elseif ( in_array( $layout_style, ['2','3', '4'], true ) ) {

            echo '<div class="edubin-row tpc_g_30 edubin-latest-news layout-' . esc_attr( $layout_style ) . '">';

            $column_layout_left = isset( $settings['column_layout'] ) ? $settings['column_layout'] : '6';
            $column_layout_right = ( $column_layout_left === '5' ) ? '7' : ( $column_layout_left === '7' ? '5' : '6' );

            echo '<div class="edubin-col-lg-' . esc_attr( $column_layout_left ) . '">';

            $query = new \WP_Query( $single_args );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post();

                    echo '<div' . esc_attr( $animation_attribute ) . '>';
                    $template_file = EDUBIN_PLUGIN_DIR . 'elementor/widgets/tpl-part/posts/post-left-' . $layout_style . '.php';
                    if ( file_exists( $template_file ) ) {
                        include $template_file;
                    }
                    echo '</div>';

                endwhile;
                wp_reset_postdata();
            endif;

            echo '</div>'; // left column

            echo '<div class="edubin-col-lg-' . esc_attr( $column_layout_right ) . '"><div class="edubin-row">';

            $query = new \WP_Query( $lists_args );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post();

                    echo '<div' . esc_attr( $animation_attribute ) . '>';
                    $template_file = EDUBIN_PLUGIN_DIR . 'elementor/widgets/tpl-part/posts/post-right-' . $layout_style . '.php';
                    if ( file_exists( $template_file ) ) {
                        include $template_file;
                    }
                    echo '</div>';

                endwhile;
                wp_reset_postdata();
            endif;

            echo '</div></div></div>'; // right + main row

        }

        echo ob_get_clean(); // Output end

    }

}