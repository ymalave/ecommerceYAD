<?php
    //Clase para abrir nuestra página en Home (Principal)
    class AdminUser extends Controller
    {
        public function index()
        {
            $data['page_title'] = "Administrador";
            $user = $this->load_model('administrator');
            $data['users'] = $user->readUsers();
            $this->view("Admin/users", $data);//nombre de la pagina que vamos a visualizar
        }
    }
?>