<!DOCTYPE>
<lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $data['page_title']; ?> | YAD - Productos de limpieza</title>
    <link href="<?= ASSETS . THEME?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME?>css/price-range.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME?>css/animate.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME?>css/main.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME?>css/responsive.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME?>css/owl.carousel.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php //echo ASSETS . THEME?>js5shiv.js"></script>
    <script src="<?php //echo ASSETS . THEME?>js/respond.min.js"></script>
    <![endif]-->       
    <link rel="icon" href="<?= ASSETS . THEME?>images/home/YAD.ico">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +58 414 8978977</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> yjmalave06@gmail.com</a></li>
								<li><a href="#"><i class="fa fa-user"></i> <?=  isset($_SESSION['userName']) ? $_SESSION['userName'] : '' ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="<?= ASSETS . THEME?>images/home/YAD1.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Cuenta</a></li>
								<li><a href="<?=ROOT?>checkout"><i class="fa fa-crosshairs"></i> Caja</a></li>
								<li><a href="<?= ROOT?>cart"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
								<?php
								if(isset($_SESSION['idusuario'])){
									?>
										<li><a href="<?= ROOT?>logout"><i class="fa fa-lock"></i> Cerrar Sesión	</a></li>
									<?php
								}else{
									?>
                                        <li><a href="<?= ROOT?>login"><i class="fa fa-lock"></i> Iniciar Sesión	</a></li>
                                    <?php
								}
								?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?= ROOT?>" class="active">Inicio</a></li>
								<li class="dropdown"><a href="#">Tienda<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?= ROOT?>#productos">Productos</a></li>
										<li><a href="<?= ROOT?>checkout">Caja</a></li> 
										<li><a href="<?= ROOT?>cart">Carrito</a></li> 
										<li><a href="<?= ROOT?>login">Iniciar Sesión</a></li> 
                                    </ul>
                                </li> 
								<li><a href="404">404</a></li>
								<li><a href="contact-us">Contacto</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Buscar producto"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	