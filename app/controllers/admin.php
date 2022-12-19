<?php
    //Clase para abrir nuestra página en Home (Principal)
    class Admin extends Controller
    {
        public function index()
        {
            $data['page_title'] = "Administrador";
            $this->view("Admin/index", $data);//nombre de la pagina que vamos a visualizar
        }
    }
?>