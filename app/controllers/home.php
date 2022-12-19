<?php
    //Clase para abrir nuestra página en Home (Principal)
    class Home extends Controller
    {
        public function index()
        {
            $data['page_title'] = "Inicio";
            $User = $this->load_model("User");
            $data['user_data'] = $User->check_login();
            $producto = $this->load_model("Products");
            $data['product'] = $producto->read("SELECT * FROM producto WHERE categoria = 'Normal'");
            $data['promo'] = $producto->read("SELECT * FROM producto WHERE categoria = 'Promocion'");
            $this->view("index", $data);//nombre de la pagina que vamos a visualizar
        }
    }
?>