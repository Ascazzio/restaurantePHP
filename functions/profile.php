<h1>
    Usuario
</h1>

<?php

require '../database/db_conect.php';
$mysqli = conectar();
$resultado = $mysqli->query("SELECT * FROM usuario WHERE Usuario_ID=".$_GET["id"]);

$reg=$resultado->fetch_assoc();

        require_once( '../functions/header.php');
        cabecera();

    echo
        '<table id="horizontal-form">
            <tr> 
                <td>'.$reg['Nombre'].'</td>   
                <td>'.$reg['Apellidos'].'</td>   
                <td>'.$reg['Correo'].'</td>   
                <td><input class="btn btn-sm btn-outline-warning mt-4" type="button" name="editar"value="Editar" onClick=window.location.replace("editarUser.php?id='.$reg['Usuario_ID'].'")></td> 
            </tr>
        </table>
        <form action="logout.php" method="get">
            <input  class="btn btn-lg btn-outline-warning mt-4" type="submit" name="logout"value="Logout")>
        </form>
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
