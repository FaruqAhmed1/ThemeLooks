<?php
namespace Elementor;
class Themelook_image extends  Widget_Base {
    public function get_name(){
        return 'theme-look-image';
    }
    public function get_title(){
        return 'Image Widget';
    }
    public function get_icon(){
        return 'eicon-image-rollover';
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
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		
		
		
		
		
		
		
		
		

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		
        <!-- Get image URL -->
		<!-- echo '<img src="' . $settings['image']['url'] . '">'; -->
		<div class="hero-object-img">
			<img src="<?php echo  $settings['image']['url']  ?>" data-rjs="2" alt="" class="v-move">
		</div>

		

	<?php	
		
	}

	protected function content_template() {
		?>
		
		<img src="{{ image_url }}">
		<?php

	}

}