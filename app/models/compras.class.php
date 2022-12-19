<?php
    class Compras extends Database
    {
        public function create($ROWS = [])
        {
            $this->connect();
            show($ROWS);
            $iduser = $_SESSION['idusuario'];
            $idproducto = array();
            $Totalprice = 0;
            foreach($ROWS as $value)
            {
                $idproducto = $value['idproducto'];
                $quantity = $value['qty'];
                $price = $value['precio']*$quantity;

                $Totalprice += $price;

                $postQuery = "INSERT INTO `compra`(`idcompra`, `idproducto`, `cantidad`, `precio`, `idusuario`) VALUES (NULL, '$idproducto', $quantity, '$price', '$iduser')";
                $postStmt = $this->con->prepare($postQuery);
                $rc = $postStmt->execute();
            }

            /*$product_encode = json_encode($idproducto);

            //Insertar a la base de datos
            $postQuery = "INSERT INTO `compra`(`idcompra`, `idproducto`, `precio`, `idusuario`) VALUES (NULL, '$product_encode', '$Totalprice', '$iduser')";
            $postStmt = $this->con->prepare($postQuery);
            $rc = $postStmt->execute();*/

            if ($postStmt) {
                header("location: ".ROOT);
            } else {
                $err = "Please Try Again Or Try Later";
                show($err);
            } 
            
        
        }
    }
?>