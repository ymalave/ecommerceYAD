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

			<div class="shopper-informations" style="margin-top:0;">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Información del Comprador</p>
							<form>
								<label>Nombre de usuario</label>
								<input type="text" placeholder="<?= isset($data['user_data'][0]['userName']) ? $data['user_data'][0]['userName']: 'Nombre de usuario'  ?>">
								<label>Id del usuario</label>
								<input type="text" placeholder="<?= isset($data['user_data'][0]['idusuario']) ? $data['user_data'][0]['idusuario']: '000'  ?>">
							</form>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Información del pago</p>
							<div class="form-one">
								<form>
									<label for="paydate">Fecha de pago</label>
									<input type="date" placeholder="Fecha de pago" id="paydate">
									<input type="text" placeholder="Numero de referencia">
									<input type="text" placeholder="Monto">
									<select class="form-select" aria-label="Default select example">
										<option selected>Seleccione el tipo de pago</option>
										<option value="1">Transferencia</option>
										<option value="2">Pago Móvil</option>
										<option value="3">PayPal</option>
									</select>
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Observaciones</p>
							<textarea name="message"  placeholder="Notas sobre su pedido, en especial para su delivery" rows="16"></textarea>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Su Compra</h2>
			</div>

			<div class="table-responsive cart_info">
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
							foreach($data['product'] as $row){
								$id = $row['idproducto']; 
								$name = $row['nombreProducto'];
								$price = $row['precio'];
								foreach($data['shopping'] as $value)
								{
									if($id == $value['idproducto'])
									{
										$row['qty'] = $value['cantidad'];
										break;
									}
								}
								$quantity = $row['qty'];

								$price2 = $price*$quantity;
								$totalprice += $price2;
						
							?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="<?= ASSETS . THEME ?>images/shop/<?= $name?>.jpg" alt="" width="150px"></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$name?></a></h4>
								<p>ID: <?=$id?></p>
							</td>
							<td class="cart_price">
								<p>$<?=$price?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input oninput="edit_quantity(this.value, '<?=$id?>');" class="cart_quantity_input" type="text" name="quantity" value="<?=$quantity; ?>" size="2">
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?= $price2; ?></p>
							</td>
							<td class="cart_delete">
								<a delete_id="<?=$id?>" onclick="delete_item(this.getAttribute('delete_id'))" class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php
						} 
						}?>
					</tbody>
					
				</table>
			</div>
			
		</div>
	</section> <!--/#cart_items-->

<?php
	$this->view('footer', $data);
?>