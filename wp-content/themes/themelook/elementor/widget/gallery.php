<?php
namespace Elementor;
class Themelook_Gallery extends  Widget_Base {
    public function get_name(){
        return 'theme-look-gallery';
    }
    public function get_title(){
        return 'Gallery Widget';
    }
    public function get_icon(){
        return 'eicon-gallery-grid';
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

		
		
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'list_title', [
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'List Title' , 'plugin-name' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'list_content', [
				'label' => esc_html__( 'Content', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'List Content' , 'plugin-name' ),
				'show_label' => false,
			]
		);

		$repeater->add_control(
			'list_color',
			[
				'label' => esc_html__( 'Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
				],
			]
		);

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Repeater List', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'Title #1', 'plugin-name' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'plugin-name' ),
					],
					[
						'list_title' => esc_html__( 'Title #2', 'plugin-name' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'plugin-name' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
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
		if ( $settings['list'] ) {
		
		?>
		

			<?php
			foreach (  $settings['list'] as $item ) {
				?>
				
				<a href="<?php $item['image']['url'] ?>" class="single-gallery-image position-relative d-flex align-items-center justify-content-center">
					<div class="plus-sign position-absolute"></div>
					<img src="<?php $item['image']['url'] ?>" data-rjs="2" alt="">
				</a>

				<?php
			
			}

				?>
			<?php
			
		}
			
		

	}
	

	protected function content_template() {
		

	}

}