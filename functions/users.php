


<table id="form-horizontal">

<?php

require '../database/db_conect.php';
$mysqli = conectar();
$resultado = $mysqli->query("SELECT Usuario_ID, Nombre, Apellidos, Correo FROM usuario");

require_once( '../functions/header.php');
cabecera();


while($reg=$resultado->fetch_assoc()){

    
    echo
        '<link rel="stylesheet" href="../CSS/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
                  
        <form class="mb-2 p-2" id="form-horizontal">
            <tr class=""> 
                <td class="col-form-label px-2">'.$reg['Usuario_ID'].'</td>   
                <td class="col-form-label px-2">'.$reg['Nombre'].'</td>   
                <td class="col-form-label px-2">'.$reg['Apellidos'].'</td>   
                <td class="col-form-label px-2">'.$reg['Correo'].'</td>   
                <td><input class="btn btn-sm p-2 btn-outline-warning mt-4" type="button" name="editar" value="Editar" onClick=window.location.replace("editarUser.php?id='.$reg['Usuario_ID'].'")>
                <td><input class="btn btn-sm p-2 btn-outline-warning mt-4" type="button" name="eliminar" value="Eliminar" onClick=window.location.replace("eliminarUser.php?id='.$reg['Usuario_ID'].'&nombre='.$reg['Nombre'].'")></td>
        </tr>';
}        
?>

</table>

<?php

echo 
    '<div id="form-horizontal"> 
        <form action="register.php" method="post">
            <input class="btn btn-lg btn-outline-warning mt-4" type="submit" value="Registrar"/>
        </form>
        <form action="login.php" method="post">
            <input class="btn btn-lg btn-outline-warning mt-4" type="submit" value="Login"/>
        </form>
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