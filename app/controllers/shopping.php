<?php
    //Clase para abrir registrar una compa
    class Shopping extends Controller
    {
        public function index()
        {
            $User = $this->load_model("User");
            $data['user_data'] = $User->check_login();
            $shopping = $this->load_model("Compras");
            $producto = $this->load_model("Products");
            $iduser = $_SESSION['idusuario'];
           
            if(isset($_SESSION['cart']))
            {
                $prod_id = array_column($_SESSION['cart'], 'id');
                $ids_str = "'". implode("','", $prod_id) ."'";
                $data['quantity'] = array_column($_SESSION['cart'], 'qty');
                $data['product'] = $producto->read("SELECT * FROM producto WHERE idproducto IN ($ids_str)");

                foreach($data['product'] as $row)
                {
                    foreach($_SESSION['cart'] as $value)
                    {
                        if($row['idproducto'] == $value['id'])
                        {
                            $row['qty'] = $value['qty'];
                            break;
                        }
                    }

                   $data['information'][] = $row;
                }

                $shopping->create($data['information']);

            }

        }

    }
?>