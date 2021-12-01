<?php

function conectar(){
    $mysqli = new mysqli("eu-cdbr-west-01.cleardb.com:3306", "b134a31d9f72e5", "13ecfb15", "heroku_ea71772493b7604");
    if ($mysqli->connect_errno) {
        echo "Fallo la conexion con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connecr_errno;
    }
    return $mysqli;
}

?>