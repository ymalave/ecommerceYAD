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
                        <th>Id del usuario</th>
                        <th>Nombre de usuario</th>
                        <th class="numeric">Telefono</th>
                        <th class="numeric">Correo electrónico</th>

                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($data['users'] as $row){
                            $idUser = $row['idusuario'];
                            $userName = $row['userName'];
                            $phone = $row['phoneNumber'];
                            $email = $row['email'];

                        ?>
                            <tr>
                                <td><?= $idUser?></td>
                                <td><?= $userName?></td>
                                <td class="numeric"><?= $phone?></td>
                                <td><?= $email?></td>
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