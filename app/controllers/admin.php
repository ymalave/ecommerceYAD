<?php
    //Clase para abrir nuestra página en Home (Principal)
    class Admin extends Controller
    {
        public function index()
        {
            $data['page_title'] = "Administrador";
            $payment = $this->load_model("administrator");
            $data['payments'] = $payment->readPayments();
            $this->view("Admin/index", $data);//nombre de la pagina que vamos a visualizar
        }
    }
?>