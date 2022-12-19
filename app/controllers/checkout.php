<?php
    //Clase para abrir nuestra página en Home (Principal)
    class Checkout extends Controller
    {
        public function index()
        {
            $User = $this->load_model("User");
            $data['page_title'] = "Caja";
            $data['user_data'] = $User->check_login();
            $shopping = $this->load_model("Compras");
            $producto = $this->load_model("Products");
            $iduser = $_SESSION['idusuario'];
           
            $data['shopping'] = $producto->read("SELECT * FROM compra WHERE idusuario = '$iduser'");

            foreach ($data['shopping'] as $row) 
            {
                $compra[]= $row['idproducto'];
            }
            $ids_str = "'". implode("','", $compra) ."'";
            $data['product'] = $producto->read("SELECT * FROM producto WHERE idproducto IN ($ids_str)");
            
            $this->view('checkout',$data);
        }

    }
?>