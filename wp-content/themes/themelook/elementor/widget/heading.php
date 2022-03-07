<?php
namespace Elementor;
class Themelook_Heading extends  Widget_Base {
    public function get_name(){
        return 'theme-look-heading';
    }
    public function get_title(){
        return 'Heading Widget';
    }
    public function get_icon(){
        return ' eicon-heading';
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
			'heading_title',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
		
        $this->add_control(
			'color',
			[
				'label' => esc_html__( 'Title Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .heading' => 'color: {{VALUE}}',
				],
			]
		);
		
		
		
		
		
		
		
		

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<div class="heading"<?php echo '<h2>' . $settings['heading_title'] .'</h2>'?>> </div>
       <?php

		
		
	}

	protected function content_template() {
	

	}

}