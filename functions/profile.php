<h1>
    Usuario
</h1>

<?php

require '../database/db_conect.php';
$mysqli = conectar();
$resultado = $mysqli->query("SELECT * FROM usuario WHERE Usuario_ID=".$_GET["id"]);

$reg=$resultado->fetch_assoc();

    echo
        '<table>
            <tr> 
                <td>'.$reg['Nombre'].'</td>   
                <td>'.$reg['Apellidos'].'</td>   
                <td>'.$reg['Correo'].'</td>   
                <td><input type="button" name="editar"value="Editar" onClick=window.location.replace("editarUser.php?id='.$reg['Usuario_ID'].'")></td> 
            </tr>
        </table>
        <form action="logout.php" method="get">
            <input type="submit" name="logout"value="Logout")>
        </form>';
?>
