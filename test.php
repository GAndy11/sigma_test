<?php

$nombreDepto = "Amazonas";

$data = json_decode(file_get_contents("https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json"), true);
        
$ciudades = [] ;

foreach ($data as $key => $value) 
{
    if($nombreDepto == $key)
    {
        array_push($ciudades, $value);
    }
}
print_r($ciudades);