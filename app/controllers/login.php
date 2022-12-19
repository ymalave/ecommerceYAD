<?php
    //Clase para abrir nuestra página en Login (Iniciar sesión)
    class Login extends Controller
    {
        public function index()
        {
            $data['page_title'] = "Iniciar Sesión";

            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $User = $this->load_model("User");
                $User->login($_POST);
            }
            $this->view("login", $data);//nombre de la pagina que vamos a visualizar
        }
    }
?>