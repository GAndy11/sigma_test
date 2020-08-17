<?php

require_once 'models/ciudadesModel.php';

class ciudadesController
{
    public function ObtenerCiudades($departamento)
    {
        $ciudades = new ciudadesModel();
        $ciudades->setNombreDepto($departamento);

        return $ciudades->getAllForDepto();
    }
}