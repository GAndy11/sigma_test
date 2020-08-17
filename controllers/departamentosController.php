<?php

require_once 'models/departamentosModel.php';

class departamentosController
{
    public function ObtenerDeptos()
    {
        $deptos = new departamentosModel();
        return $deptos->getAll();
    }
}