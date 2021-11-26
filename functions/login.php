<?php

function login () {
    require '../database/db_conect.php';
    $mysqli = conectar();

    if(isset($_POST['login'])){

        // 3. Variables $_POST[]
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];

        if($correo == "" || $clave == ""){ // Validamos que ningún campo quede vacío
            echo "alert('Error: correo y/o clave vacios!!');"; // Se utiliza Javascript dentro de PHP
        }else{
            // 4. Cadena de SQL
            $sql = "SELECT * FROM usuario WHERE Correo ='$correo' AND Clave='$clave'";

            // 5. Ejecuto cadena query()
            if(!$consulta = $mysqli->query($sql)){
                echo "ERROR: no se pudo ejecutar la consulta!";
            }else{

                // 6. Cuento registros obtenidos del select. 
                // Como el nombre de usuario en la clave primaria no debería de haber mas de un registro con el mismo nombre.
                $filas = mysqli_num_rows($consulta);

                // 7. Comparo cantidad de registros encontrados
                if($filas == 0){
                    echo "alert('Error: usuario y/o clave incorrectos!!');";
                }else{
                    $reg=$consulta->fetch_assoc();
                    header('location: profile.php?id='.$reg['Usuario_ID']); // Si está todo correcto redirigimos a otra página
                    $_SESSION['logged_in'] = true;
                }

            }
        }
    }

    echo 
        '<form action="" method="post">
            <table>
                <tr>
                    <td>Correo: </td>   
                    <td><input type="email" name="correo" /></td>
                </tr>
                <tr>
                    <td>Clave: </td>   
                    <td><input type="password" name="clave" /></td>
                </tr>
            </table>
        <p><input type="submit" name="login" value="Login"/></p>
        </form>';
};
?>