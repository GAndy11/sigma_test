<?php

class landingController
{
    public function index()
    {
        $mensaje = "";
        include_once './views/landing.php';
    }

    public function GuardarContacto()
    {
        $mensaje = "";

        $camposObligatorios = [
            "Departamento" => $_POST['departamento'],
            "Ciudad" => $_POST['ciudad'],
            "Nombre" => $_POST['nombre'],
            "Correo" => $_POST['correo']
        ];

        foreach ($camposObligatorios as $key => $value) {
            if ($value == "") 
            {
                $mensaje .= "El campo:  $key no puede quedar vacío <br>";
            }

            echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";

            include_once './views/landing.php';
            exit;
        }


        
    }
}