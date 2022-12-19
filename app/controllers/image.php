<?php
class Image extends Controller
{
    public function index()
    {
        $data['page_title'] = "Carrito";
        $User = $this->load_model("User");
        $data['user_data'] = $User->check_login();
        $producto = $this->load_model("Products");
        $data['image'] = $producto->read("SELECT * FROM `image`");
        $this->view("prueba", $data);//nombre de la pagina que vamos a visualizar
    }

}