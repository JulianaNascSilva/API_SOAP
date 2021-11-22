<?php

include "Student.php";

$params = array(
    'uri' => 'localhost/webService.php'
);

$server = new SoapServer(null, $params);
$server->setClass('Student');
$server->handle();