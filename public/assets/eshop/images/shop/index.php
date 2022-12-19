<?php $this->view("header", $data)?>
<div class="banner">
    <div class="owl-four owl-carousel" itemprop="image">
    <?php 
        $img = array("Agua", "1Promo", "2Promo", "3Promo", "4Promo");
        $max = count($img);
        for($i = 0; $i < $max; $i++){ ?>
            <div class="item-slide">
                <img src="<?php echo ASSETS . THEME?>images/shop/<?= $img[$i]; ?>.jpg" alt="<?= $img[$i]; ?>">
            </div>
        <?php } ?>
    </div>
        <div id="owl-four-nav" class="owl-nav"></div>
</div>
<!-- Banner Close -->
<div class="page-heading">
    <div class="container">
        <h2>Nuestros Productos</h2>
    </div>
</div>
<!-- Popular courses End -->
<div class="learn-courses">
    <div class="container">
        <div class="courses">
            <div class="owl-one owl-carousel">
                <?php 
                   /* include('Controlador/ConectionProductos.php');
                    $row = new connectionProduct();
                    $alluser = $row->read();*/

                    foreach ($data['product'] as $row) {
                        $name = $row['nombreProducto'];
                        $price = $row['precio'];
                        $avail= $row['disponibilidad'];
                        ?> 
                    
                        <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
                        <div class="img-wrap" itemprop="image"><img src="<?= ASSETS . THEME?>images/shop/<?= $name; ?>.jpg" alt="courses picture"></div>
                            <a href="#" class="learn-desining-banner" itemprop="name"><?php echo $name; ?></a>
                            
                        <div class="box-body" itemprop="description">
                            <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                            <section itemprop="time">
                                <p><span>Precio:</span>$ <?php echo $price; ?> </p>
                                <p><span>Disponibilidad:</span> <?php echo $avail; ?></p>
                            </section>
                        </div>
                    </div>
                    <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php $this->view("footer")?>
