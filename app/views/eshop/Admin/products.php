<?php 
    $this->view('admin/header');
?>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-9 main-chart">
                <?php
                    foreach($data['product'] as $row){
                        $id = $row['idproducto'];
                        $name = $row['nombreProducto'];
                        $price = $row['precio'];
                        $avail= $row['disponibilidad'];
                 ?>
                    <div class="col-xs-4 mb">
                        <div class="white-panel pn">
                            <div class="white-header">
                                <h5><?=$name?></h5>
                            </div>

                            <div class="centered">
                                <img src="<?= ASSETS . THEME?>images/shop/<?= $name ?>.jpg" width="180px">
                            </div>
                            
                            <div class="row">
                                <h2>$<?=$price?></h2>
                                <p>Disponibilidad: <?=$avail?></p>
                                <div class="btn-group">
                                    <button class="btn btn-success"><i class="fa fa-pencil"></i>Editar</button>
                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i>Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /col-md-4 -->
                <?php
                    } 
                ?>
                
            </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <div>
                        <button class="btn btn-primary col-md-12" style="padding: 10px; border-radius: 0; margin-bottom: 20px; text-align:center;">Agregar Producto</button>
                    </div>
                  
                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                  </div><!-- /col-lg-3 -->
            </div><! --/row -->
          </section>
      </section>

      <!--main content end-->

		
	

<?php
    $this->view("admin/footer");
?>