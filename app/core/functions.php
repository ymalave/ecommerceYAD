<?php 

    //funcion para mostrar algunos datos que necesitamos
    function show($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    function esc($data)
    {
        return addslashes($data);
    }
?>