<?php

require_once './models/ContactoModel.php';

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
        }

        echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";

        if($mensaje != ""){
            include_once './views/landing.php';
            echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";
            die();
        }

        //Crear el contacto
        $contacto = new contactoModel();

        $contacto->setDepto(trim($_POST['departamento']));
        $contacto->setCiudad(trim($_POST['ciudad']));
        $contacto->setNombre(trim($_POST['nombre']));
        $contacto->setCorreo(trim($_POST['correo']));
        
        $respuesta = $contacto->GuardarContacto();

        if($respuesta === true){
            $mensaje = "Registro guardado con éxito";
        }else{
            $mensaje = $respuesta;
        }

        include_once './views/landing.php';
        echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";


    }
}