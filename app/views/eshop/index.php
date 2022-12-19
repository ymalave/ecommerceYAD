<?php 
	$this->view('header', $data);
?>

<section id="slider"><!--slider-->
		<div class="container">
			<div id="slider-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#slider-carousel" data-slide-to="1"></li>
					<li data-target="#slider-carousel" data-slide-to="2"></li>
					<li data-target="#slider-carousel" data-slide-to="3"></li>
					<li data-target="#slider-carousel" data-slide-to="4"></li>
				</ol>
				
				<div class="carousel-inner">
					<div class="item active" style="padding-left: 0px;">
						<img src="<?= ASSETS . THEME?>images/home/Agua.jpg" alt="" />
					</div>
					<div class="item" style="padding-left: 0px;">
						<img src="<?= ASSETS . THEME?>images/home/1Promo.jpg" alt="" />
					</div>
					<div class="item" style="padding-left: 0px;">
						<img src="<?= ASSETS . THEME?>images/home/2Promo.jpg" alt="" />
					</div>
					<div class="item" style="padding-left: 0px;">
						<img src="<?= ASSETS . THEME?>images/home/3Promo.jpg" alt="" />
					</div>
					<div class="item" style="padding-left: 0px;">
						<img src="<?= ASSETS . THEME?>images/home/4Promo.jpg" alt="" />
					</div>
					
				</div>
				<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
				<i class="fa fa-angle-left"></i>
				</a>
				<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</section><!--/slider-->
	
	<section id="productos">
		<div class="container">
			<div class="row">
				<div class=""><!--col-sm-9 padding-right-->
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Nuestros productos</h2>
						<?php
						foreach($data['product'] as $row){
							$id = $row['idproducto'];
							$name = $row['nombreProducto'];
							$price = $row['precio'];
							$avail= $row['disponibilidad'];
							?> 
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?= ASSETS . THEME?>images/shop/<?= $name ?>.jpg" alt="" />
												<h2>$<?= $price ?></h2>
												<p><?= $name ?></p>
												<a href="<?=ROOT?>add_to_cart/<?=$id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al Carrito</a>
											</div>
									</div>
									
								</div>
							</div>
						<?php
						}
						?>
					</div><!--features_items-->
					
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Promociones</h2>

						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-6">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?= ASSETS . THEME?>images/shop/1 Promo.jpg" alt="" />
													<h2>$<?= $data['promo'][0]['precio'] ?></h2>
													<p><?= $data['promo'][0]['nombreProducto'] ?></p>
													<a href="<?=ROOT?>add_to_cart/<?=$data['promo'][0]['idproducto'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al Carrito</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?= ASSETS . THEME?>images/shop/2 Promo.jpg" alt="" />
													<h2>$<?= $data['promo'][1]['precio'] ?></h2>
													<p><?= $data['promo'][1]['nombreProducto'] ?></p>
													<a href="<?=ROOT?>add_to_cart/<?=$data['promo'][1]['idproducto'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al Carrito</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-6">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?= ASSETS . THEME?>images/shop/3 Promo.jpg" alt="" />
													<h2>$<?= $data['promo'][2]['precio'] ?></h2>
													<p><?= $data['promo'][2]['nombreProducto'] ?></p>
													<a href="<?=ROOT?>add_to_cart/<?=$data['promo'][2]['idproducto'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al Carrito</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?= ASSETS . THEME?>images/shop/Promo Condominio.jpg" alt="" />
													<h2>$<?= $data['promo'][3]['precio'] ?></h2>
													<p><?= $data['promo'][3]['nombreProducto'] ?></p>
													<a href="<?=ROOT?>add_to_cart/<?=$data['promo'][3]['idproducto'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al Carrito</a>
												</div>
												
											</div>
										</div>
									</div>
									
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
<?php 
	$this->view('footer', $data);
?>