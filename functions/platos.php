<h1>
    Lista de Platos
</h1>

<table>

<?php

require '../database/db_conect.php';
$mysqli = conectar();
$resultado = $mysqli->query("SELECT Plato_id, titulo FROM plato");

while($reg=$resultado->fetch_assoc()){
    echo
        '<tr>
            <td><a href="http://localhost/devfsd/mysqli/detalle.php?id='.$reg['Plato_id'].'&titulo='.$reg['titulo'].'">'.$reg['titulo'].'</a></td>   
            <td><input type="button" name="editar" value="Editar" onClick=window.location.replace("editar.php?id='.$reg['Plato_id'].'")>
            <td><input type="button" name="eliminar" value="Eliminar" onClick=window.location.replace("eliminar.php?id='.$reg['Plato_id'].'&titulo='.$reg['titulo'].'")></td>
        </tr>';
}        
?>

</table>

<?php

echo 
    '<form action="nuevo.php" method="post">
        <p><input type="submit" value="Nuevo plato"/></p>
    </form>';
echo 
    '<form action="register.php" method="post">
        <p><input type="submit" value="Registrar"/></p>
    </form>';
echo 
    '<form action="users.php" method="post">
        <p><input type="submit" value="UserList"/></p>
    </form>';
?>