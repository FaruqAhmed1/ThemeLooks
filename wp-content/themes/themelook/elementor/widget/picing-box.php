<?php
namespace Elementor;
class Themelook_Pricing_box extends  Widget_Base {
    public function get_name(){
        return 'theme-look-pricing-box';
    }
    public function get_title(){
        return 'Box Widget';
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
			'pricing_box_title',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
		$this->add_control(
			'pricing_box_title2',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
		$this->add_control(
			'pricing_box_title3',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
		$this->add_control(
			'pricing_box_title4',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
		$this->add_control(
			'pricing_box_title5',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
		$this->add_control(
			'pricing_box_title6',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
		$this->add_control(
			'pricing_box_title7',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
		$this->add_control(
			'pricing_box_title8',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);


		
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .single-pricing-box',
			]
		);
		
		
		
		
		
		
		

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>

		

		<section class="section section-ticket position-relative ">
			
			
	
						<div class="single-pricing-box first-item">
							<div class="pricing-box-header position-relative">
								<h2><?php echo   $settings['pricing_box_title'] ?></h2>
								<p><?php echo   $settings['pricing_box_title2'] ?> <br> <span><?php echo   $settings['pricing_box_title3'] ?></span></p>
							</div>
							<div class="pricing-box-body">
								<ul class="pricing-list">
									<li><i class="fa fa-caret-right"></i>   <?php echo  $settings['pricing_box_title4'] ?></li>
									<li><i class="fa fa-caret-right"></i> <?php echo   $settings['pricing_box_title5'] ?></li>
									<li><i class="fa fa-caret-right"></i> <?php echo   $settings['pricing_box_title6'] ?></li>
									<li><i class="fa fa-caret-right"></i> <?php echo   $settings['pricing_box_title7'] ?></li>
									<li><i class="fa fa-caret-right"></i> <?php  echo  $settings['pricing_box_title8'] ?></li>
								</ul>

								<a href="#" class="button wbg pricing-box-btn">buy ticket</a>
							</div>
						</div>
						<!-- End Single Pricing Box  -->
				
			
		</section>

		


	<?php	
		
	}

	protected function content_template() {
		

	}

}