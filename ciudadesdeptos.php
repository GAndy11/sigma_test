<?php

include_once 'controllers/departamentosController.php';
include_once 'controllers/ciudadesController.php';


function Departamentos()
{
    $deptos = new departamentosController();
    $data = $deptos->ObtenerDeptos();
    
    return $data;
}

function Ciudades($departamento)
{
    $ciudades = new ciudadesController();
    $dataCiudades =$ciudades->ObtenerCiudades($departamento);
    $data = [];
    foreach ($dataCiudades[0] as $key => $value) {
        array_push($data, $value);
    }
    
    return $data;
}

if(isset($_POST['departamento'])){
    $datos = Ciudades($_POST['departamento']);
    $data = new stdClass();
    $data->ciudades = $datos;

    echo json_encode($data);
}else{
    $datos = Departamentos();
    $data = new stdClass();
    $data->departamentos = $datos;

    echo json_encode($data);
}
