<!-- start: FOOTER -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="newsletter">
							<h4>Newsletter</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.
							</p>
							<form method="POST" action="#" id="newsletterForm">
								<div class="input-group">
									<input type="text" id="email" name="email" placeholder="Email Address" class="form-control">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default">
											Go!
										</button> </span>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-3">
						<h4>Latest Tweet</h4>
						<div class="twitter" id="tweet">
							<i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.
							<a href="#" class="time">
								12 Dec
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-details">
							<h4>Contact Us</h4>
							<ul class="contact">
								<li>
									<p>
										<i class="fa fa-map-marker"></i><strong>Address:</strong> 1234 Street Name, City Name, United States
									</p>
								</li>
								<li>
									<p>
										<i class="fa fa-phone"></i><strong>Phone:</strong> (123) 456-7890
									</p>
								</li>
								<li>
									<p>
										<i class="fa fa-envelope"></i><strong>Email:</strong>
										<a href="mailto:mail@example.com">
											mail@example.com
										</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<h4>Follow Us</h4>
						<div class="social-icons">
							<ul>
								<li class="social-twitter tooltips" data-original-title="Twitter" data-placement="bottom">
									<a target="_blank" href="http://www.twitter.com">
										Twitter
									</a>
								</li>
								<li class="social-facebook tooltips" data-original-title="Facebook" data-placement="bottom">
									<a target="_blank" href="http://facebook.com" data-original-title="Facebook">
										Facebook
									</a>
								</li>
								<li class="social-linkedin tooltips" data-original-title="LinkedIn" data-placement="bottom">
									<a target="_blank" href="http://linkedin.com" data-original-title="LinkedIn">
										LinkedIn
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-1">
							<a class="logo" href="index.html">
								CLIP<i class="clip-clip"></i>ONE
							</a>
						</div>
						<div class="col-md-7">
							<p>
								&copy; Copyright 2014 by Clip-One. All Rights Reserved.
							</p>
						</div>
						<div class="col-md-4">
							<nav id="sub-menu">
								<ul>
									<li>
										<a href="#">
											FAQ's
										</a>
									</li>
									<li>
										<a href="#">
											Sitemap
										</a>
									</li>
									<li>
										<a href="#">
											Contact
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<a id="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
		<!-- end: FOOTER -->
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script src="assets/plugins/html5shiv.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="<?php echo base_url();?>assests/frontend/assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="<?php echo base_url();?>assests/frontend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assests/frontend/assets/plugins/jquery.transit/jquery.transit.js"></script>
		<script src="<?php echo base_url();?>assests/frontend/assets/plugins/hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
		<script src="<?php echo base_url();?>assests/frontend/assets/plugins/jquery.appear/jquery.appear.js"></script>
		<script src="<?php echo base_url();?>assests/frontend/assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="<?php echo base_url();?>assests/frontend/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="<?php echo base_url();?>assests/frontend/assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo base_url();?>assests/frontend/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
		<script src="<?php echo base_url();?>assests/frontend/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="<?php echo base_url();?>assests/frontend/assets/plugins/flex-slider/jquery.flexslider.js"></script>
		<script src="<?php echo base_url();?>assests/frontend/assets/plugins/stellar.js/jquery.stellar.min.js"></script>
		<script src="<?php echo base_url();?>assests/frontend/assets/plugins/colorbox/jquery.colorbox-min.js"></script>
		<script src="<?php echo base_url();?>assests/frontend/assets/js/index.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
				$.stellar();
			});
		</script>
	</body>
</html>
