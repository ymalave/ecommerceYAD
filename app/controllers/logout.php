<?php
class Logout extends Controller
{
    public function index()
    {
        session_unset();
        header("location: ".ROOT."login");//nombre de la pagina que vamos a visualizar
    }
}
?>