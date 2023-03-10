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
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>Referencia</th>
                        <th>Fecha de Pago</th>
                        <th class="numeric">Monto</th>
                        <th class="numeric">Id de la Compra</th>
                        <th class="numeric">Id del usuario</th>
                        <th>Metodo de Pago</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($data['payments'] as $row){
                            $refer = $row['Referencia'];
                            $payDate = $row['fechaPago'];
                            $total = $row['Monto'];
                            $idC = $row['idCompra'];
                            $idU = $row['idUsuario'];
                            $Method = $row['Metodo'];
                        ?>
                            <tr>
                                <td><?= $refer?></td>
                                <td><?= $payDate?></td>
                                <td class="numeric"><?= $total?></td>
                                <td class="numeric"><?= $idC?></td>
                                <td class="numeric"><?= $idU?></td>
                                <td><?= $Method?></td>
                                <td>
                                    <div class="btn btn-group" style="margin:0; padding:0; text-align: center;">
                                        <button class="btn btn-success"><i class="fa fa-check"></i></button>
                                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                                    </div>
                                </td>
                            </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            
        </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
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