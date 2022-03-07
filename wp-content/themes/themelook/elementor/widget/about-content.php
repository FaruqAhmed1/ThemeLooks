<?php
namespace Elementor;
class Themelook_about_content extends  Widget_Base {
    public function get_name(){
        return 'theme-look-about-content';
    }
    public function get_title(){
        return 'About Content Widget';
    }
    public function get_icon(){
        return ' eicon-text-area';
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
			'about_content_title',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
        $this->add_control(
			'about_content_title2',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
        $this->add_control(
			'about_content_title3',
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
		?>
		
        <div class="about-content">
							<h2 class="position-relative"><?php echo $settings['about_content_title'] ?><br><?php echo $settings['about_content_title2'] ?> <span><?php echo $settings['about_content_title3'] ?></span></h2>
						</div>
                       

		

	<?php	
		
	}

	protected function content_template() {
		

	}

}