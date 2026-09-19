<?php
namespace EdubinCore\Widgets;
use \Elementor\Controls_Manager;
use \Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Group_Control_Css_Filter;
use \Elementor\Icons_Manager;
use \Elementor\Repeater;
use \Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_Gallery extends Widget_Base {

    public function get_name() {
		return 'edubin-gallery';
	}

	public function get_title() {
		return __('Gallery', 'edubin-core');
	}

    public function get_keywords() {
        return [ 'gallery', 'lightbox', 'popup gallery', 'image gallery'];
    }

	public function get_icon() {
		return 'edubin-elementor-icon eicon-gallery-group';
	}

	public function get_categories() {
		return ['edubin-core'];
	}

    public function get_script_depends() {
        return [
            'lightgallery',
            'lightgallery-thumbnail',
            'lightgallery-zoom',
            'edubin-active',
        ];
    }

    public function get_style_depends() {
        return [ 
            'edubin-gallery', 
            'edubin-lightgallery' 
        ]; 
    }

    protected function register_controls()
    {
        /*-----------------------------------------------------------------------------------*/
        /*  CONTENT -> GENERAL
        /*-----------------------------------------------------------------------------------*/

        $this->start_controls_section(
            'section_content_general',
            [
                'label' => esc_html__('General', 'edubin-core'),
            ]
        );

        $this->add_control(
			'gallery_images',
			[
				'label' => esc_html__( 'Add Images', 'edubin-core' ),
				'type' => Controls_Manager::GALLERY,
				'show_label' => false,
				'default' => [],
			]
		);

        $this->add_group_control(
			Group_Control_Image_Size::get_type(),
			[
				'name' => 'gallery_thumb', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
				'exclude' => [ 'custom' ],
				'include' => [],
				'default' => 'large',
			]
		);

        $this->add_control(
            'overlay_hover',
            [
                'label' => esc_html__('Hover Overlay', 'edubin-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );

        $this->add_control(
			'edubin_gallery_icon',
			[
				'label' => esc_html__( 'Icon', 'edubin-core' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-plus',
					'library' => 'fa-solid',
				],
                'condition' => [
                    'overlay_hover' => 'yes'
                ],
				
			]
		);

        $this->add_control(
            'image_overlay_title',
            [
                'label' => esc_html__('Title', 'edubin-core'),
                'type' => Controls_Manager::SELECT,
                'condition' => [
                    'overlay_hover' => 'yes'
                ],
                'options' => [
                    '' => esc_html__('None', 'edubin-core'),
                    'alt' => esc_html__('Alt', 'edubin-core'),
                    'title' => esc_html__('Title', 'edubin-core'),
                    'caption' => esc_html__('Caption', 'edubin-core'),
                    'description' => esc_html__('Description', 'edubin-core'),
                    'custom' => esc_html__('Custom', 'edubin-core'),
                ],
                'default' => 'title',
            ]
        );

        $this->add_control(
			'custom_title_text',
			[
				'label' => esc_html__( 'Custom Title', 'edubin-core' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Custom title', 'edubin-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'edubin-core' ),
                'condition' => [
                    'image_overlay_title' => 'custom'
                ],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'section_grid_setting',
            [
                'label' => esc_html__('Grid Settings', 'edubin-core'),
            ]
        );

        $this->add_responsive_control(
			'edubin_gallery_columns',
			[
				'label' => esc_html__( 'Gallery Columns', 'edubin-core' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'fr' ],
				'range' => [
					'fr' => [
						'min' => 0,
						'max' => 12,
						'step' => 1,
					],
				],
				'default' => [
				'unit' => 'fr',
				'size' => 3,
                ],
                'mobile_default' => [
                    'unit' => 'fr',
                    'size' => 1,
                ],
                'selectors' => [
					'{{WRAPPER}} .edubin-gallery .gallery-container' => 'grid-template-columns: repeat({{SIZE}}, 1fr);',
				],
			]
		);

        $this->add_responsive_control(
			'edubin_gallery_rows',
			[
				'label' => esc_html__( 'Rows', 'edubin-core' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'fr' ],
				'range' => [
					'fr' => [
						'min' => 0,
						'max' => 12,
						'step' => 1,
					],
				],
				'default' => [
				'unit' => 'fr',
				'size' => 2,
			    ],
                'selectors' => [
					'{{WRAPPER}} .edubin-gallery .gallery-container' => 'grid-template-rows: repeat({{SIZE}}, 1fr);',
				],
			]
		);

        $this->add_responsive_control(
			'edubin_gallery_gaps',
			[
				'label' => esc_html__( 'Gaps', 'edubin-core' ),
                'type' => Controls_Manager::GAPS,
                'size_units' => [ 'px', '%', 'em', 'rem', 'vw', 'custom' ],
                'default' => [
                    'unit' => 'px',
                ],
                'separator' => 'before',
                'selectors' => [
					'{{WRAPPER}} .edubin-gallery .gallery-container' => 'gap: {{ROW}}{{UNIT}} {{COLUMN}}{{UNIT}};',
				],
                'validators' => [
                    'Number' => [
                        'min' => 0,
                    ],
                ],
			]
		);

        $this->add_responsive_control(
			'edubin_gallery_flow',
			[
				'label' => esc_html__( 'Auto Flow', 'edubin-core' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'row' => esc_html__( 'Row', 'edubin-core' ),
                    'column' => esc_html__( 'Column', 'edubin-core' ),
                ],
                'default' => 'row',
                'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .edubin-gallery .gallery-container' => 'grid-auto-flow: {{VALUE}}',
                ],
			]
		);

        $this->end_controls_section();
        
        // Image Styles
        $this->start_controls_section(
            'style_image',
            [
                'label' => esc_html__('Image', 'edubin-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('image');

        $this->start_controls_tab(
            'image_idle',
            ['label' => esc_html__('Idle', 'edubin-core')]
        );

        $this->add_control(
            'image_radius_idle',
            [
                'label' => esc_html__('Border Radius', 'edubin-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'custom'],
                'selectors' => [
                    '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'image_border_idle',
                'condition' => ['gallery_layout!' => 'justified'],
                'selector' => '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item',
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'image_shadow_idle',
                'selector' => '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item',
            ]
        );

        $this->add_group_control(
		    Group_Control_Css_Filter::get_type(),
		    [
			    'name' => 'item_css_filters',
			    'selector' => '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item img',
		    ]
	    );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'image_hover',
            ['label' => esc_html__('Hover', 'edubin-core')]
        );

        $this->add_control(
            'image_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'edubin-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'custom'],
                'selectors' => [
                    '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'image_border_hover',
                'condition' => ['gallery_layout!' => 'justified'],
                'selector' => '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item:hover',
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'image_shadow_hover',
                'selector' => '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item:hover',
            ]
        );

        $this->add_group_control(
		    Group_Control_Css_Filter::get_type(),
		    [
			    'name' => 'item_css_filters_hover',
			    'selector' => '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item:hover img',
		    ]
	    );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        // Icon Styles
        $this->start_controls_section(
            'style_icon',
            [
                'label' => esc_html__('Icon', 'edubin-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_size',
            [
                'label' => esc_html__('Icon Size', 'edubin-core'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 6, 'max' => 200],
                ],
                'selectors' => [
                    '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item .edubin-gallery-overlay .icon-wrap i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item .edubin-gallery-overlay .icon-wrap svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
			'icon_margin_bottom',
			[
				'label' => esc_html__( 'Icon Bottom Space', 'edubin-core' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item .edubin-gallery-overlay .icon-wrap' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'edubin-core' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item .edubin-gallery-overlay .icon-wrap i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item .edubin-gallery-overlay .icon-wrap svg' => 'fill: {{VALUE}}',
				],
			]
		);

        $this->add_control(
            'icon_background_color',
            [
                'label' => esc_html__('Icon Background Color', 'edubin-core'),
                'type' => Controls_Manager::COLOR,
                'dynamic' => ['active' => true],
                'selectors' => [
                    '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item .edubin-gallery-overlay .icon-wrap' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Content Styles
        $this->start_controls_section(
            'style_content',
            [
                'label' => esc_html__('Content', 'edubin-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'content_background_color',
            [
                'label' => esc_html__('Content Background Color', 'edubin-core'),
                'type' => Controls_Manager::COLOR,
                'dynamic' => ['active' => true],
                'selectors' => [
                    '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item .edubin-gallery-overlay:before' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'info_alignment',
            [
                'label' => esc_html__('Alignment', 'edubin-core'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'edubin-core'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'edubin-core'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'edubin-core'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'selectors' => [
                    '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item .edubin-gallery-overlay' => 'text-align: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
			'title_style_options',
			[
				'label' => esc_html__( 'Title Style', 'edubin-core' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'edubin-core'),
                'type' => Controls_Manager::COLOR,
                'dynamic' => ['active' => true],
                'selectors' => [
                    '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item .edubin-gallery-overlay .content-wrap .overlay-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => esc_html__('Title Typography', 'edubin-core'),
                'selector' => '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item .edubin-gallery-overlay .content-wrap .overlay-title',
            ]
        );

        $this->add_control(
			'description_style_options',
			[
				'label' => esc_html__( 'Description Style', 'edubin-core' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_typo',
                'label' => esc_html__('Description Typography', 'edubin-core'),
                'selector' => '{{WRAPPER}} .edubin-gallery .gallery-container .gallery-item .edubin-gallery-overlay .content-wrap .overlay-description',
            ]
        );

        $this->end_controls_section();

    }

    public function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="edubin-gallery">';//column
            echo '<div class="gallery-container" id="animated-thumbnails-gallery">';
                // echo '<div class="gallery-item edubin-col-3">';
                foreach ( $settings['gallery_images'] as $image_item ) {
                    $id = $image_item[ 'id' ];
                    $attachment = get_post( $id );
                    $img_size_url = wp_get_attachment_image_src( $image_item['id'], $settings['gallery_thumb_size'] )[0];

                    $alt_value = get_post_meta( $id, '_wp_attachment_image_alt', true );
                    $image_title = $attachment->post_title;
                    $image_caption = $attachment->post_excerpt;
                    $image_description = $attachment->post_content;
                    $custom_text = $settings['custom_title_text'];
                    
                    echo '<a  class="gallery-item" data-src="' . esc_attr( $image_item['url'] ) . ' ">';
                        echo '<img alt="'.$alt_value.'" class="img-responsive" src="' . esc_attr(  $img_size_url ) . '" />';

                        if($settings['overlay_hover'] === 'yes'){
                            echo '<div class="edubin-gallery-overlay">';                                
                                echo '<div class="content-wrap">';
                                    if($settings['image_overlay_title'] != ''){
                                        echo '<h4 class="overlay-title">';
                                            if($settings['image_overlay_title'] === 'alt'){
                                                echo $alt_value;
                                            }
                                            elseif($settings['image_overlay_title'] === 'title'){
                                                echo $image_title;
                                            }
                                            elseif($settings['image_overlay_title'] === 'caption'){
                                                echo $image_caption;
                                            }
                                            elseif($settings['image_overlay_title'] === 'description'){
                                                echo $image_description;
                                            }
                                            elseif($settings['image_overlay_title'] === 'custom'){
                                                echo $custom_text;
                                            }
                                            else{
                                                echo '';
                                            }
                                        echo '</h4>';
                                    }
                                    
                                    echo '<span class="icon-wrap">';                                    
                                        Icons_Manager::render_icon( $settings['edubin_gallery_icon'], [ 'aria-hidden' => 'true' ] );                                    
                                    echo '</span>';
                                echo '</div>';
                                
                            echo '</div>';
                        }
                    echo '</a>';
                    
                    // wp_get_attachment_image_src( $image_item['id'], [ $img_size, $img_size ] )[0];
                }
                    
            echo '</div>';
        echo '</div>';
 
    }
}
