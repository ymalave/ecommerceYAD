<?php
    //Clase para abrir nuestra página en Home (Principal)
    class AdminProducts extends Controller
    {
        public function index()
        {
            $data['page_title'] = "Administrador";
            $user = $this->load_model('administrator');
            $producto = $this->load_model("Products");
            $data['product'] = $producto->read("SELECT * FROM producto WHERE categoria = 'Normal'");
            $data['promo'] = $producto->read("SELECT * FROM producto WHERE categoria = 'Promocion'");
            $this->view("Admin/products", $data);//nombre de la pagina que vamos a visualizar
        }
    }
?>