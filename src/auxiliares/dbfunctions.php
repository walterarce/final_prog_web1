<?php
function output($val, $headerStatus = 200){
    header(' ', true, $headerStatus);
    header('Content-Type: application/json');
    print json_encode($val);
    die;
}


function conectarBD()
{
    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBBASE);
    if ($link === false) {
        print "Falló la conexión: " . mysqli_connect_error();
        outputError(500);
    }
    return $link;
}