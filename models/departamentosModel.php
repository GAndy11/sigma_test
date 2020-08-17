<?php

class departamentosModel
{
    private $nombreDepto;

    public function setNombreDepto($nombreDepto)
    {
        $this->nombreDepto = $nombreDepto;
    }

    public function getNombreDepto()
    {
        return $this->nombreDepto;
    }

    public function getAll() //Aqui se devuelven todos los departamentos
    {
        $data = json_decode(file_get_contents("https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json"), true);
        
        $deptos = [] ;

        foreach ($data as $key => $value) {
            array_push($deptos, $key);
        }
        return $deptos;
    }
}