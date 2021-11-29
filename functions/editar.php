<?php

    require '../database/db_conect.php';
    require './header.php';
    $mysqli = conectar();
    cabeceraAdmin();

    $resultado = $mysqli->query("SELECT * FROM plato WHERE Plato_id=".$_GET["id"]);
    $reg=$resultado->fetch_assoc();

    if (isset($_POST['editar'])) {
        $titulo = $_POST['titulo'];
        $tipo = $_POST['tipo'];
        $comensales = $_POST['comensales'];
        $image = $_POST['image'];

        $resultado = $mysqli->query("UPDATE plato SET titulo='$titulo', tipo='$tipo', comensales='$comensales', image='$image' WHERE Plato_id=".$_GET["id"]); 
        header('location: platos.php');
    }

    echo 
        '
        <link rel="stylesheet" href="../CSS/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        
        <form  class="mt-2 mb-4 p-5" id="form-horizontal" action="" method="post">
            <table>
                <tr>
                    <td class="col-sm-3 col-form-label">Nombre de plato: </td>   
                    <td><input class="form-control mb-2 mt-2 type="text" name="titulo" value='.$reg['titulo'].'></td>
                </tr>
                <tr>
                    <td class="col-sm-3 col-form-label">Numero de comensales: </td>   
                    <td><input class="form-control mb-2 mt-2 type="text" name="comensales" value='.$reg['comensales'].'></td>
                </tr>
                <tr>
                    <td class="col-sm-3 col-form-label">Tipo de plato: </td>   
                    <td><input class="form-control mb-2 mt-2 type="text" name="tipo" value='.$reg['tipo'].'></td>
                </tr>
                <tr>
                    <td class="col-sm-3 col-form-label">Link de imagen: </td>   
                    <td><input class="form-control mb-2 mt-2 type="text" name="image" value='.$reg['image'].'></td>
                </tr>
            </table>
        <p><input class="btn btn-lg btn-outline-warning mt-4" type="submit" name="editar" value="Editar"></p>
        </form>
        
        <footer class="p-5 bg-dark text-white text-center position-relative">
            <div class="container">
                <p class="lead">
                    Copyright &copy; 2021 geekshubsacademyrestaurant
                </p>

            </div>
        </footer>';
?>