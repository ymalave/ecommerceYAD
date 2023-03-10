<?php 
	$this->view('header',$data);
?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->
			
			<div class="review-payment">
				<h2>Su Compra</h2>
			</div>
			<div class="row">
				<div class="container col-md-6">
					<img src="<?=ASSETS . THEME?>images/cart/PayMethods.png" alt="Metodos de pago" width="100%">
				</div>
				<div class="table-responsive cart_info col-md-6" style="padding: 0;">
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<td class="image">Producto</td>
								<td class="description"></td>
								<td class="price">Precio</td>
								<td class="quantity">Cantidad</td>
								<td class="total">Total</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<?php
							if(isset($data['product'])){
								$totalprice = 0;
								foreach($data['product'] as $key => $row){
									$id = $row['idproducto']; 
									$name = $row['nombreProducto'];
									$price = $row['precio'];
									$quantity = $row['qty'];

									$price2 = $price*$quantity;
									$totalprice += $price2;
							
								?>
							<tr>
								<td class="cart_product">
									<a href=""><img src="<?= ASSETS . THEME ?>images/shop/<?= $name?>.jpg" alt="" width="100px"></a>
								</td>
								<td class="cart_description" style="width: 180px;">
									<h4><a href=""><?=$name?></a></h4>
									<p>ID: <?=$id?></p>
								</td>
								<td class="cart_price">
									<p>$<?=$price?></p>
								</td>
								<td class="cart_quantity">
									<p><?=$quantity?></p>	
								</td>
								<td class="cart_total">
									<p class="cart_total_price">$<?= $price2; ?></p>
								</td>
							</tr>
							<?php
							} 
							}?>
						</tbody>
						
					</table>
				</div>
			</div>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Informaci??n del Comprador</p>
							<form>
								<label>Nombre de usuario</label>
								<input type="text" value="<?= isset($data['user_data'][0]['userName']) ? $data['user_data'][0]['userName']: 'Nombre de usuario'  ?>" readonly>
								<label>Id de la compra</label>
								<input type="text" value="<?= isset($data['shopping'][0]['idcompra']) ? $data['shopping'][0]['idcompra']: '000'  ?>" readonly>
							</form>
						</div>
					</div>
					<form method="post">
						<div class="clearfix">
							<div class="bill-to col-sm-5">
								<p>Informaci??n del pago</p>
								<div class="form-one">
										<label for="paydate">Fecha de pago</label>
										<input type="date" placeholder="Fecha de pago" id="paydate" name="payDate">
										<input type="text" placeholder="Numero de referencia" name="codeRefer">
										<input type="text" placeholder="Monto" name="TotalToPay">
										<select class="form-select" aria-label="Default select example" name="payMethod">
											<option selected>Seleccione el tipo de pago</option>
											<option value="Efectivo">Efectivo</option>
											<option value="Divisa">Divisa</option>
											<option value="Tansferencia">Transferencia</option>
											<option value="Pago movil">Pago M??vil</option>
											<option value="Paypal">PayPal</option>
										</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="order-message">
									<p>Observaciones</p>
									<textarea name="message"  placeholder="Notas sobre su pedido, en especial para su delivery" rows="16"></textarea>
								</div>	
							</div>

						</div>
						<button type="submit" class="btn btn-success pull-right" style="width: 250px; padding: 10px; border-radius: 0; margin-right: 20px; margin-bottom: 20px">Registrar pago</button>
					</form>					
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->

<?php
	$this->view('footer', $data);
?>