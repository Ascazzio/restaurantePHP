<h3>
    Lista de Usuarios
</h3>

<?php

// require '../database/db_conect.php';
// $mysqli = conectar();
$resultado = $mysqli->query("SELECT * FROM usuario");

while($reg=$resultado->fetch_assoc()){
    echo
    '<div class="col-3 bg-secondary bg-opacity-10 m-1">
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nombre: </td>   
                    <td><input type="text" name="nombre" value='.$reg['Nombre'].'></td>
                </tr>
                <tr>
                    <td>Apellido: </td>   
                    <td><input type="text" name="apellido" value='.$reg['Apellidos'].'></td>
                </tr>
                <tr>
                    <td>Correo: </td>   
                    <td><input type="text" name="correo" value='.$reg['Correo'].'></td>
                </tr>
            </table>
            <input class="btn btn-primary" type="submit" name="editarUser" value="Editar">
            <input class="btn btn-primary" type="submit" name="eliminarUser" value="Eliminar">
        </form>
    </div>';

}        
?>
