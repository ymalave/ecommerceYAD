<?php $this->view("header", $data); ?>
		
	<section>
		<div class="container">
			<div class="row">				
				<div><!--class="col-sm-9 padding-right"-->
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Nuestros Productos</h2>
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
												<a href="<?=ROOT?>cart/<?=$id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al Carrito</a>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>$<?= $price ?></h2>
													<p><?= $name ?></p>
													<a href="<?=ROOT?>cart/<?=$id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al Carrito</a>
												</div>
											</div>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
										</ul>
									</div>
								</div>
							</div>
						<?php
						}
						?>
						
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	
<?php $this->view("footer", $data); ?>