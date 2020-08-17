<?php

include_once './models/baseModel.php';

class contactoModel extends baseModel
{
    private $depto;
    private $ciudad;
    private $nombre;
    private $correo;

    public function setDepto($depto)
    {
        $this->depto = $depto;
    }

    public function getDepto()
    {
        return $this->depto;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    public function getCiudad()
    {
        return $this->Ciudad;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function GuardarContacto() 
    {
        $result = true;

        $sql = "
            INSERT INTO
                contacts
            (
                name,
                email,
                state,
                city
            )VALUES(
                '{$this->nombre}',
                '{$this->correo}',
                '{$this->depto}',
                '{$this->ciudad}'

            )
        ";

        $save = $this->db->query($sql);

        if(!$save){
            $result = "No se pudo ingresar el registro en la BD";
        }

        return $result;
    }
}