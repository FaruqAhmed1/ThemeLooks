<?php
namespace Elementor;
class Themelook_about_popup_area extends  Widget_Base {
    public function get_name(){
        return 'theme-look-about-popup-area';
    }
    public function get_title(){
        return 'About Popup Widget';
    }
    public function get_icon(){
        return '  eicon-video-playlist';
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
			'about_popup_image',
			[
				'label' => esc_html__( 'Choose Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'about_popup_image2',
			[
				'label' => esc_html__( 'Choose Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'about_popup_image3',
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
		
        <section class="section about-section section-padding position-relative">
			<div class="container">
				
					
					<div class="col-lg-6 col-md-12 d-flex justify-content-center">
						<!-- Start About PopUp Video Area -->
						<div class="about-popup-area d-flex justify-content-center align-items-center position-relative">
							<img src="assets/img/about-bg.jpg" data-rjs="2" alt="" class="about-img">
							<img src="assets/img/svg/about.svg" alt="" class="svg about-svg">
							<!-- Start PopUp Play Button -->
							<a class="mfp-iframe video-play-button d-flex justify-content-center align-items-center position-absolute" href="https://www.youtube.com/watch?v=lTTajzrSkCw">
								<img src="assets/img/play.png" alt="">
							</a>
							<!-- End PopUp Play Button -->

						</div>
						<!-- End About PopUp Video Area -->
					</div>
				</div>
			</div>
		</section>
		

	<?php	
		
	}

	protected function content_template() {
		

	}

}