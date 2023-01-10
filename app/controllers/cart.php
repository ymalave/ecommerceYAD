<?php
    //Clase para abrir nuestra página en Home (Principal)
    class Cart extends Controller
    {
        public function index()
        {
            $data['page_title'] = "Carrito";
            $User = $this->load_model("User");
            $data['user_data'] = $User->check_login();
            $producto = $this->load_model("Products");
           
            if(isset($_SESSION['cart']))
            {
                $prod_id = array_column($_SESSION['cart'], 'id');
                $ids_str = "'". implode("','", $prod_id) ."'";
                $data['quantity'] = array_column($_SESSION['cart'], 'qty');
                $data['product'] = $producto->read("SELECT * FROM producto WHERE idproducto IN ($ids_str)");
            }
            
            $this->view("cart", $data);//nombre de la pagina que vamos a visualizar
        }

    }
?>