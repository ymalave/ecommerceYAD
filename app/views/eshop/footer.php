
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<img src="<?= ASSETS . THEME?>images/home/YAD1.jpg" alt="Logo">
						</div>
					</div>
					
					<div class="col-sm-3 pull-right">
						<div class="address">
							<img src="<?= ASSETS . THEME?>images/home/map.png" alt="" />
							<p>Puerto Ordaz, Estado Bolívar, Venezuela</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
								<?php if($data['user_data'][0]['rank'] == "Admin"):?>
									<li><a href="<?= ROOT?>admin"">Administrador</a></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
					
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1 pull-right">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2022 MY Systems Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Yoberth J. Malavé</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="<?= ASSETS . THEME?>js/jquery.js"></script>
	<script src="<?= ASSETS . THEME?>js/bootstrap.min.js"></script>
	<script src="<?= ASSETS . THEME?>js/jquery.scrollUp.min.js"></script>
	<script src="<?= ASSETS . THEME?>js/price-range.js"></script>
    <script src="<?= ASSETS . THEME?>js/jquery.prettyPhoto.js"></script>
    <script src="<?= ASSETS . THEME?>js/main.js"></script>
	<script src="<?= ASSETS . THEME?>js/owl.carousel.js"></script>
</body>
</html>