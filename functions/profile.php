<?php

require '../database/db_conect.php';
require './header.php';
$mysqli = conectar();
$resultado = $mysqli->query("SELECT * FROM usuario WHERE Usuario_ID=".$_GET["id"]);

$reg=$resultado->fetch_assoc();

        require_once( '../functions/header.php');
        cabeceraAdmin();

    echo
        '<link rel="stylesheet" href="../CSS/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">  
        
        <form class="mt-2 mb-5 p-5" id="form-horizontal">
            <div class="text-muted" ><h3> Hola '.$reg['Nombre'].'! <br> You can update information below. <h3></div>
            <table class="mt-3 mb-4 p-5" id="horizontal-form">
                <tr class="col mb-2 mt-2"> 
                    <td class="col-form-label">'.$reg['Nombre'].'</td> 
                    </tr>  
                <tr class="col mb-2 mt-2"> 
                    <td class="col-form-label">'.$reg['Apellidos'].'</td> 
                </tr>
                <tr class="col mb-2 mt-2">   
                    <td class="col-form-label">'.$reg['Correo'].'</td>
                </tr>
                
            <td><input class="btn btn-sm btn-outline-warning mt-4" type="button" name="editar" value="Edit profile" onClick=window.location.replace("editarUser.php?id='.$reg['Usuario_ID'].'")></td> 
            <td><input class="btn btn-sm btn-outline-warning mt-4" type="button" name="todosusuarios" value="All users" onClick=window.location.replace("users.php?id='.$reg['Usuario_ID'].'")></td> 
            <td><input class="btn btn-sm btn-outline-warning mt-4" type="button" name="todosplatos" value="Todos platos" onClick=window.location.replace("platos.php?id='.$reg['Usuario_ID'].'")></td> 
        </table>
        <form action="logout.php" method="get">
            <input class="btn btn-lg btn-outline-warning mt-4" type="submit" name="logout"value="Logout")>
        </form>
        </form>
        <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">
                Copyright &copy; 2021 geekshubsacademyrestaurant
            </p>
           
        </div>
    </footer>';
?>
