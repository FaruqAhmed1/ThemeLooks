<?php
namespace Elementor;
class Elementor_Test_Widget extends Widget_Base {
    public function get_name(){
        return 'theme-look-title';
    }
    public function get_title(){
        return 'Title Widget';
    }
    public function get_icon(){
        return 'eicon-banner';
    }
    public function get_categories(){
        return ['themelook-elements'];
    }


	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'widget_title',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		echo '<p>' . $settings['widget_title'] . '</p>';
	}

	protected function content_template() {
	}

}