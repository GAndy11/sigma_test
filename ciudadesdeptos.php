<?php

include_once 'controllers/departamentosController.php';
//include_once 'controller/ciudadesController.php';


function Departamentos()
{
    $deptos = new departamentosController();
    $data = $deptos->ObtenerDeptos();
    
    return $data;
}

if(isset($_POST['departamento'])){

}else{
    $datos = Departamentos();
    $data = new stdClass();
    $data->departamentos = $datos;

    echo json_encode($data);
}
