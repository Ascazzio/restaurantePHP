<!-- llamamos a CSS -->
<style>
    <?php 
        include '../CSS/platosAdmin.css'    
    ?>
</style>

<table>
<?php

    require '../database/db_conect.php';
    $mysqli = conectar();
    $resultado = $mysqli->query("SELECT Plato_id, titulo FROM plato");

    require_once( '../functions/header.php');
    cabeceraAdmin();

    //Listado de platos

    while($reg=$resultado->fetch_assoc()){
        echo
            '
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

            <div class="centrar">
                <form class="mb-2 p-2" id="form-horizontal">
                    <tr class="plato">
                        <td class="col-form-label px-2"><h3 class="text-decoration-none">'.$reg['titulo'].'</h3></td>   
                        <td class="col-form-label px-2"><input class="btn btn-sm px-2 btn-outline-warning mt-4" type="button" name="editar" value="Editar" onClick=window.location.replace("editar.php?id='.$reg['Plato_id'].'")>
                        <td class="col-form-label px-2"><input class="btn btn-sm px-2 btn-outline-warning mt-4" type="button" name="eliminar" value="Eliminar" onClick=window.location.replace("eliminar.php?id='.$reg['Plato_id'].'&titulo='.$reg['titulo'].'")></td>
                    </tr>
            </div>';
    }        
?>

</table>

<?php

    //Botones inferiores

    echo 
        '<div id="form-horizontal centrar">
            <form action="nuevo.php" method="post">
                <p><input class="btn btn-lg btn-outline-warning mt-4" type="submit" value="Nuevo plato"/></p>
            <form action="register.php" method="post">
                <p><input class="btn btn-lg btn-outline-warning mt-4" type="submit" value="Registrar"/></p> 
        </div>

        <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">
                Copyright &copy; 2021 geekshubsacademyrestaurant
            </p>
            <a href="" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>   
        </div>
    </footer>';
?>