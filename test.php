<?php
$data = json_decode(file_get_contents("https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json"), true);
        
$deptos = [] ;

foreach ($data as $key => $value) {
    array_push($deptos, $key);
}
print_r($deptos);