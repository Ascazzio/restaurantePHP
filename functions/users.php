<h1>
    Lista de Usarios
</h1>

<table>

<?php

require '../database/db_conect.php';
$mysqli = conectar();
$resultado = $mysqli->query("SELECT Usuario_ID, Nombre, Apellidos, Correo FROM usuario");

while($reg=$resultado->fetch_assoc()){
    echo
        '<tr>
            <td>'.$reg['Usuario_ID'].'</td>   
            <td>'.$reg['Nombre'].'</td>   
            <td>'.$reg['Apellidos'].'</td>   
            <td>'.$reg['Correo'].'</td>   
            <td><input type="button" name="editar" value="Editar" onClick=window.location.replace("editar_user.php?id='.$reg['Usuario_ID'].'")>
            <td><input type="button" name="eliminar" value="Eliminar" onClick=window.location.replace("eliminar_user.php?id='.$reg['Usuario_ID'].'&nombre='.$reg['Nombre'].'")></td>
        </tr>';
}        
?>

</table>

<?php

echo 
    '<form action="register.php" method="post">
        <p><input type="submit" value="Registrar"/></p>
    </form>
    <form action="login.php" method="post">
        <p><input type="submit" value="Login"/></p>
    </form>';
?>