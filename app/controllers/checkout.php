<?php
    //Clase para abrir nuestra página en Home (Principal)
    class Checkout extends Controller
    {
        public function index()
        {
            $User = $this->load_model("User");
            $data['page_title'] = "Caja";
            $data['user_data'] = $User->check_login();
            $producto = $this->load_model("Products");
            $buy = $this->load_model('compras');
            $iduser = isset($_SESSION['idusuario'])? $_SESSION['idusuario']: '';
           
            $data['shopping'] = $producto->read("SELECT * FROM compra WHERE idusuario = '$iduser'");

            if(is_array($data['shopping'])){
                foreach ($data['shopping'] as $row) 
                {
                    $compra = json_decode($row['idproducto']);
                    $qty = json_decode($row['cantidad']);
                }
                $ids_str = "'". implode("','", $compra) ."'";
                $data['product'] = $producto->read("SELECT * FROM producto WHERE idproducto IN ($ids_str)");  
            }
            
            if(isset($data['product']))
            {
                foreach($data['product'] as $key => $row)
                {
                    $search = array_search($compra[$key], $row);
                    if($search)
                    {
                        $data['product'][$key]['qty'] = $qty[$key];
                    }
                }
            }

            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $buy->Buy($_POST, $data);
            }

            $this->view('checkout',$data);
        }

    }
?>