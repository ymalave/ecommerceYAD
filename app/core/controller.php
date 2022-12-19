<?php
    //Clase controlador
    class Controller
    {
        //función para conectar con las vistas de nuestro sitio web
        public function view($path, $data = [])
        {
            //verifica si existe un archivo con el nombre de la variable $path
            if(file_exists("../app/views/". CLIENT . $path . ".php"))
            {
                include "../app/views/". CLIENT . $path . ".php";
            }
            else{
                include "../app/views/". CLIENT ."404.php";
            }
        }


        public function load_model($model)
        {
            //verifica si existe un archivo con el nombre de la variable $model
            if(file_exists("../app/models/" . strtolower($model) . ".class.php"))
            {
                include "../app/models/" . strtolower($model) . ".class.php";
                return $a = new $model();
            }
            return false;
        }
    }
?>