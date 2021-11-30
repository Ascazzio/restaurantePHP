<?php

require '../database/db_conect.php';
$mysqli = conectar();

//Se almacena el tipo de error para luego mostrarlo al usuario
$errorMsg = '.';

// session_start();

if(isset($_POST['login'])){

    // 3. Variables $_POST[]
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    if($correo == "" || $clave == ""){ // Validamos que ningún campo quede vacío
        $errorMsg = "Error: correo y/o clave vacios!"; // Se utiliza Javascript dentro de PHP
    }else{
        // 4. Cadena de SQL
        $sql = "SELECT * FROM usuario WHERE Correo ='$correo' AND Clave='$clave'";

        // 5. Ejecuto cadena query()
        if(!$consulta = $mysqli->query($sql)){
            $errorMsg = "ERROR: no se pudo ejecutar la consulta!";
        }else{

            // 6. Cuento registros obtenidos del select. 
            // Como el nombre de usuario en la clave primaria no debería de haber mas de un registro con el mismo nombre.
            $filas = mysqli_num_rows($consulta);

            // 7. Comparo cantidad de registros encontrados
            if($filas == 0){
                $errorMsg = 'Error: usuario y/o clave incorrectos!!';
            }else{
                $reg=$consulta->fetch_assoc();
                header('location: profile.php?id='.$reg['Usuario_ID']); // Si está todo correcto redirigimos a otra página
                $_SESSION['logged_in'] = true;
            }

        }
    }
}



require './header.php';
cabeceraAdmin();


echo 
    '<link rel="stylesheet" href="../CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    

    <form class="mt-3 mb-5 p-5" id="form-horizontal" action="" method="post">
           <table class="mt-5">
            <tr class="col mb-3">
                <td class="col-sm-3 col-form-label">Correo: </td>   
                <td><input class="form-control mt-2" type="email" name="correo" placeholder="nombre@ejemplo.com *" /></td>
            </tr>
            <tr class="col mb-3">
                <td class="col-sm-3 col-form-label" >Clave: </td>   
                <td><input class="form-control mt-2" type="password" name="clave" placeholder="clave *" /></td>
            </tr>
        </table>
    <p><input class="btn btn-lg btn-outline-warning mt-4" type="submit" name="login" value="Login"/></p>
    </form>

    <div class="errorStyle">' .
       $errorMsg 
 . '</div>
    
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">
                Copyright &copy; 2021 geekshubsacademyrestaurant
            </p>
           
        </div>
    </footer>';

?>