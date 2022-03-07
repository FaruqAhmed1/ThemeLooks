<?php
namespace Elementor;
class Themelook_Speaker_Gallery extends  Widget_Base {
    public function get_name(){
        return 'theme-look-speaker-gallery';
    }
    public function get_title(){
        return 'Speaker Gallary';
    }
    public function get_icon(){
        return ' eicon-gallery-grid';
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
				'label' => esc_html__( 'Speaker-Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'List Title' , 'plugin-name' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'vimeo_link',
			[
				'label' => esc_html__( 'Vimeo-Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$this->add_control(
			'twitter_link',
			[
				'label' => esc_html__( 'Twitter-Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$this->add_control(
			'facebook_link',
			[
				'label' => esc_html__( 'Facebook-Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$this->add_control(
			'instagram_link',
			[
				'label' => esc_html__( 'Instagram-Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'list_content', [
				'label' => esc_html__( 'Speaker-Content', 'plugin-name' ),
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
        
        
      

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		if ( $settings['list'] ) {
		?>
			<div class="row">
				<?php 
					foreach (  $settings['list'] as $item ) {
						?>
							<div class="col-lg-4 col-md-6">
								<!-- Start Speaker Gallery -->
								<div class="speaker-section speaker-galleryspeaker-gallery1 rounded-circle position-relative">
									<div class=" speaker-section gallery-inner">
										<div class="speaker-section gallery-inner speaker">
											<img src="<?php $item['image']['url'] ?>" data-rjs="2" alt="">
										</div>
										<div class="speaker-section gallery-inner speaker-hover d-flex flex-wrap">
											<div class=" speaker-section gallery-inner  speaker-section gallery-inner speaker-social position-relative d-flex flex-wrap">
												<a href="<?php echo $settings['vimeo_link']['url'] ?>" target="_blank"><i class="fa fa-vimeo"></i></a>
												<a href="<?php echo $settings['twitter_link']['url'] ?>" target="_blank"><i class="fa fa-twitter"></i></a>
												<a href="<?php echo $settings['facebook_link']['url'] ?>" target="_blank"><i class="fa fa-facebook"></i></a>
												<a href="<?php echo $settings['instagram_link']['url'] ?>" target="_blank"><i class="fa fa-instagram"></i></a>
											</div>
											<div class="speaker-meta text-center">
												<h5><?php echo $item['list_title']; ?> <span>UI/UX Designer</span></h5>
											</div>
										</div>
									</div>
								</div>
								<!-- End Speaker Gallery -->
							</div>
						<?php
					}
				?>
			</div>

				<?php
		}

        
	}
		
			




	
	
	
		
	

	protected function content_template() {
		

	}
}
