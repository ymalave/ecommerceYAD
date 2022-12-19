<?php
    //Clase para abrir nuestra página en SignUp (Registrarse)
    class Signup extends Controller
    {
        public function index()
        {
            $data['page_title'] = "Registrarse";
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $User = $this->load_model("User");
                $User->signup($_POST);
            }
            $this->view("signup", $data);//nombre de la pagina que vamos a visualizar
        }
    }
?>