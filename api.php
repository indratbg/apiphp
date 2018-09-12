<?php

$method = $_SERVER['REQUEST_METHOD'];
$x = getallheaders();

$auth=$x['Authorization'];
var_dump(base64_decode(substr($auth,6)));



if($method=='POST')
{
    $data = json_decode(file_get_contents('php://input'), true);
}


var_dump($data);die();
?>
