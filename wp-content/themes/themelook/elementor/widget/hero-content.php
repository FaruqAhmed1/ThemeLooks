<?php
namespace Elementor;
class Themelook_hero_content extends  Widget_Base {
    public function get_name(){
        return 'theme-look-hero-content';
    }
    public function get_title(){
        return 'Hero Content Widget';
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
			'hero_content_title',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
        $this->add_control(
			'hero_content_title2',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
        $this->add_control(
			'hero_content_title3',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
        $this->add_control(
			'hero_content_title4',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
        $this->add_control(
			'hero_content_title5',
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
		
        <div class="hero-content">
								<h1 data-animate="fadeInUp" data-delay=".5" class="animated fadeInUp" style="animation-duration: 1s; animation-delay: 0.5s;"><?php echo  $settings['hero_content_title'] ?><br><span class="d-inline-block"> <?php echo  $settings['hero_content_title2'] ?>
										</span>
								</h1>
								<p data-animate="fadeInUp" data-delay=".7" class="animated fadeInUp" style="animation-duration: 1s; animation-delay: 0.7s;">
									<span class="d-inline-block"><i class="fa fa-calendar"></i>
                                    <?php echo  $settings['hero_content_title3'] ?></span>
									<span class="d-inline-block"><i class="fa fa-map-marker"></i>
                                    <?php echo  $settings['hero_content_title4'] ?></span>
								</p>
								<a href="" class="button wbg animated fadeInUp" data-animate="fadeInUp" data-delay=".9" style="animation-duration: 1s; animation-delay: 0.9s;"><?php echo  $settings['hero_content_title5'] ?></a>
							</div>
		

		

	<?php	
		
	}

	protected function content_template() {
		

	}

}