<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Administrador | YAD - Productos de limpieza</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= ASSETS . THEME?>Admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= ASSETS . THEME?>Admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= ASSETS . THEME?>Admin/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?= ASSETS . THEME?>Admin/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?= ASSETS . THEME?>Admin/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?= ASSETS . THEME?>Admin/css/style.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME?>Admin/css/style-responsive.css" rel="stylesheet">

    <script src="<?= ASSETS . THEME?>Admin/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?= ROOT ?>Admin" class="logo"><b>Administrador</b></a>
            <!--logo end-->
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?= ASSETS . THEME?>Admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?= $_SESSION['userName'] ?></h5>
              	  	
                  <li class="mt">
                      <a class="" href="<?= ROOT ?>admin">
                        <i class="fa fa-credit-card"></i>
                        <span>Pagos Recibidos</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a class="" href="<?= ROOT ?>adminUser">
                          <i class="fa fa-user"></i>
                          <span>Usuarios</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a class="" href="<?= ROOT ?>adminProducts">
                          <i class="fa fa-shopping-cart"></i>
                          <span>Productos</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->