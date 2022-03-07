
<!-- Start Footer Section -->
<footer class="footer position-relative">
			<img src="assets/img/footer-icon.png" alt="" class="icon-bg">
			<img src="assets/img/svg/footer.svg" alt="Footer Shaped Image" class="svg footer-svg">
			<div class="container">
				<!-- Start Footer Top -->
				<div class="footer-top">
					<div class="row">
						<div class="col-12">

							<!-- Start Footer Logo -->
							<div class="footer-logo d-flex flex-wrap justify-content-center">
								<a href="index.html"><img src="assets/img/footer-logo.png" alt=""></a>
							</div>
							<!-- End Footer Logo -->

							<!-- Start Footer Social -->
							<div class="footer-social d-flex flex-wrap justify-content-center">
								<a href="#" target="_blank" class="d-block rounded-circle text-center"><i
										class="fa fa-facebook"></i></a>
								<a href="#" target="_blank" class="d-block rounded-circle text-center"><i
										class="fa fa-linkedin"></i></a>
								<a href="#" target="_blank" class="d-block rounded-circle text-center"><i
										class="fa fa-twitter"></i></a>
								<a href="#" target="_blank" class="d-block rounded-circle text-center"><i
										class="fa fa-instagram"></i></a>
							</div>
							<!-- End Footer Social -->

							<!-- Start Footer Menu -->
							<ul class="nav footer-menu flex-wrap justify-content-center">
							<?php
									wp_nav_menu(
											array(
												'theme_location' => 'footermenu',
												'menu_id' => 'footermenucontainer',
												'menu_class' => 'list-inline text-center',
										
                            
                        )
                    )

                    ?>
							</ul>
							<!-- End Footer Menu -->
						</div>
					</div>
				</div>
				<!-- End Footer Top -->

				<!-- Start Footer Bottom -->
				<div class="footer-bottom text-center position-relative">
					&copy; 2018 Your Company. All Rights Reserved. Designed By <a href="https://www.themelooks.com/"
						target="_blank">Theme Looks</a>
				</div>
				<!-- End Footer Bottom -->
			</div>
		</footer>
		<!-- End Footer Section -->

	</div>
	<!-- End Page Wrapper -->


<?php wp_footer()?>
</body>

</html>