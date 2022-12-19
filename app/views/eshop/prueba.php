<?php 
    $this->view('header', $data);
?>
<section>
    <?php
        foreach($data['image'] as $row)
        {
            $img = $row['imagen'];
            ?> 
            <img src="<?=$img;?>" alt="algo">
            <?php
        }
     ?>
</section>
<?php 
    $this->view('footer', $data);
?>