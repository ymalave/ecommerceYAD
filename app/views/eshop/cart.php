<?php
	$this->view("header", $data);
 ?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
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
								foreach($_SESSION['cart'] as $value)
								{
									if($id == $value['id'])
									{
										$row['qty'] = $value['qty'];
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
									<a add_id="<?=$id?>" onclick="add_quantity(this.getAttribute('add_id'))" class="cart_quantity_up" href=""> + </a>
									<input oninput="edit_quantity(this.value, '<?=$id?>');" class="cart_quantity_input" type="text" name="quantity" value="<?=$quantity; ?>" autocomplete="off" size="2">
									<a subtract_id="<?=$id?>" onclick="subtract_quantity(this.getAttribute('subtract_id'))" class="cart_quantity_down" href=""> - </a>
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
			<a class="btn btn-default check_out pull-right" style="width: 250px; padding: 10px; border-radius: 0; margin-right: 20px; margin-bottom: 20px" href="<?=ROOT?>shopping">Comprar</a>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6 pull-right">
					<div class="total_area">
						<ul>
							<li>Sub Total <span>$<?=isset($totalprice) ? $totalprice: 0; ?> </span></li>
							<li>Descuento <span>$0</span></li>
							<li>Total <span>$<?=isset($totalprice) ? $totalprice: 0; ?></span></li>
						</ul>
							<a class="btn btn-default check_out" href="<?=ROOT?>checkout">Ir a Caja</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
<script type="text/javascript">
	function edit_quantity(quantity, id)
	{
		if(isNaN(quantity))
			return;
		
		send_data({
			quantity:quantity.trim(),
			id:id.trim()
		}, "edit_quantity");

	}

	function add_quantity(id)
	{
		send_data({
			id:id.trim()
		}, "add_quantity");

	}
	
	function subtract_quantity(id)
	{
		send_data({
			id:id.trim()
		}, "subtract_quantity");

	}
	

	function delete_item(id)
	{
		send_data({
			id:id.trim()
		}, "delete_item");

	}

	function send_data(data = {}, data_type)
	{
		var ajax = new XMLHttpRequest();

		ajax.addEventListener('readystatechange', function()
		{
			if(ajax.readyState == 4 && ajax.status == 200)
			{
				handle_result(ajax.responseText);
			}
		});

		ajax.open("POST", "<?=ROOT?>ajax_cart/"+data_type+"/"+JSON.stringify(data), true);
		ajax.send();
	}

	function handle_result(result)
	{
		console.log(result);
		if(result != "")
		{
			var obj = JSON.parse(result);
			if(typeof obj.data_type != "undefined")
			{
				if(obj.data_type == "delete_item")
				{
					window.location.href = window.location.href;
				}else
				if(obj.data_type == "edit_quantity")
				{
					window.location.href = window.location.href;
				}else 
				if(obj.data_type == "add_quantity")
				{
					window.location.href = window.location.href;
				}else
				if(obj.data_type == "subtract_quantity"){
					window.location.href = window.location.href;
				}
			}
		}
	}
</script>
<?php 
	$this->view("footer", $data);
?>