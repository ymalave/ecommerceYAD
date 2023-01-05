<?php
class Logout extends Controller
{
    public function index()
    {
        unset($_SESSION['idusuario']);
        unset($_SESSION['cart']);
        unset($_SESSION['userName']);
        header("location: ".ROOT."login");//nombre de la pagina que vamos a visualizar
    }
}
?>