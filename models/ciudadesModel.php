<?php

class ciudadesModel
{
    private $nombreCiudad;
    private $nombreDepto;

    public function setNombreCiudad($nombreCiudad)
    {
        $this->nombreCiudad = $nombreCiudad;
    }

    public function getNombreCiudad()
    {
        return $this->nombreCiudad;
    }

    public function setNombreDepto($nombreDepto)
    {
        $this->nombreDepto = $nombreDepto;
    }

    public function getNombreDepto()
    {
        return $this->nombreDepto;
    }

    public function getAllForDepto() //Aqui se devuelven todas las ciudades
    {
        $nombreDepto = $this->nombreDepto;
        
        $data = json_decode(file_get_contents("https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json"), true);
        
        $ciudades = [] ;

        foreach ($data as $key => $value) 
        {
            if($nombreDepto == $key)
            {
                array_push($ciudades, $value);
            }
        }
        return $ciudades;
    }
}