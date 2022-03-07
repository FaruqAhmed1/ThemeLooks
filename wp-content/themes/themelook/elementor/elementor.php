<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class Xs_Shortcode{

	/**
     * Holds the class object.
     *
     * @since 1.0
     *
     */
	public static $_instance;

	/**
     * Load Construct
     *
     * @since 1.0
     */

	public function __construct(){

		add_action('elementor/init', array($this, 'xs_elementor_init'));
        add_action('elementor/widgets/widgets_registered', array($this, 'xs_shortcode_elements'));


	}

    public function xs_elementor_init(){
        \Elementor\Plugin::$instance->elements_manager->add_category(
            'themelook-elements',
            [
                'title' =>esc_html__( 'Theme Look', 'themelook' ),
            ],
            1
        );
    }


    public function xs_shortcode_elements($widgets_manager){
        require_once get_template_directory().'/elementor/widget/title.php';
        $widgets_manager->register_widget_type(new Elementor\Elementor_Test_Widget());

        require_once get_template_directory().'/elementor/widget/button.php';
        $widgets_manager->register_widget_type(new Elementor\Themelook_Button());

        require_once get_template_directory().'/elementor/widget/image.php';
        $widgets_manager->register_widget_type(new Elementor\Themelook_image());

        require_once get_template_directory().'/elementor/widget/hero-content.php';
        $widgets_manager->register_widget_type(new Elementor\Themelook_hero_content());

        require_once get_template_directory().'/elementor/widget/about-content.php';
        $widgets_manager->register_widget_type(new Elementor\Themelook_about_content());

        require_once get_template_directory().'/elementor/widget/about-popup.php';
        $widgets_manager->register_widget_type(new Elementor\Themelook_about_popup_area());

        require_once get_template_directory().'/elementor/widget/speaker-gallery.php';
        $widgets_manager->register_widget_type(new Elementor\Themelook_Speaker_Gallery());

        require_once get_template_directory().'/elementor/widget/picing-box.php';
        $widgets_manager->register_widget_type(new Elementor\Themelook_Pricing_box());

        require_once get_template_directory().'/elementor/widget/gallery.php';
        $widgets_manager->register_widget_type(new Elementor\Themelook_Gallery());

        require_once get_template_directory().'/elementor/widget/slider.php';
        $widgets_manager->register_widget_type(new Elementor\Widget_Carousel());

        require_once get_template_directory().'/elementor/widget/heading.php';
        $widgets_manager->register_widget_type(new Elementor\Themelook_Heading());


    }

	public static function xs_get_instance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new Xs_Shortcode();
        }
        return self::$_instance;
    }

}
Xs_Shortcode::xs_get_instance();
