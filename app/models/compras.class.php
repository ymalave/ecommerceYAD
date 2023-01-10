<?php
    class Compras extends Database
    {
        public function create($ROWS = [])
        {
            $this->connect();
            $iduser = $_SESSION['idusuario'];
            $idproducto = array();
            $Totalprice = 0;
            foreach($ROWS as $value)
            {
                $idproducto[] = $value['idproducto'];
                $qty[] = $value['qty'];
                $quantity = $value['qty'];
                $price = $value['precio']*$quantity;

                $Totalprice += $price;
            }

            $ids = json_encode($idproducto);
            $qtys = json_encode($qty);

            $postQuery = "INSERT INTO `compra`(`idcompra`, `idproducto`, `cantidad`, `precio`, `idusuario`) VALUES (NULL, '$ids', '$qtys', '$Totalprice', '$iduser')";
            $postStmt = $this->con->prepare($postQuery);
            $rc = $postStmt->execute();

            if ($rc) {
                header("location: ".ROOT);
            } else {
                $err = "Please Try Again Or Try Later";
                show($err);
            } 
        }
        
        public function Buy($Post, $data = [])
        {
            //Datos recibidos en el motodo Post
            $refer = $Post['codeRefer'];
            $date = $Post['payDate'];
            $total = $Post['TotalToPay'];
            $method = $Post['payMethod'];
            $message = $Post['message'];

            //Datos recibidos del arreglo Data 
            $idshop = $data['shopping'][0]['idcompra'];
            $iduser = $data['user_data'][0]['idusuario'];

            $this->connect();
            $postStmt = "INSERT INTO `Pago`(`Referencia`, `fechaPago`, `Monto`, `idCompra`, `idUsuario`, `Metodo`, `Observaciones`) VALUES ('$refer', '$date', '$total', '$idshop', '$iduser', '$method', '$message')";
            $result = $this->con->query($postStmt);

            if($result)
            {
                echo "<script>window.alert('Compra realizada')</script>";
                header("location: ".ROOT);
            }
        }
    }
?>

