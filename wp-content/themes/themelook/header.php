<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
    <title> hello</title>
</head>
<body <?php body_class(); ?>>
<div class="page-wrapper">

		<!-- Start Header Area -->
		<header class="header fixed-top">
			<div class="container">
				<div class="row position-relative justify-content-between">
					<div class="col-md-4">
						<!-- Start Logo -->
						<div class="logo d-flex align-items-center">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="Image">
							</a>
						</div>
						<!-- End Logo -->
					</div>
					<div class="col-lg-8 col-md-4 col-sm-6 col-8 position-static">
						<div class="main-menu-area  justify-d-flexontent-end align-items-center">
							<!-- Start Main Menu -->
							
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'topmenu',
                            'menu_id' => 'topmenucontainer',
                            'menu_class' => 'list-inline text-center',
                            
                            
                        )
                    )

                    ?>
               
							<!-- End Main Menu -->

							<!-- Start Header Button -->
							<div class="header-btn text-right">
								<a href="" class="button wbg">buy ticket</a>
							</div>
							<!-- End Header Button -->
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->	
