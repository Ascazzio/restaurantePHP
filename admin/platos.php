<h3>
    Lista de Platos
</h3>

<?php

// require '../database/db_conect.php';
// $mysqli = conectar();

$resultado = $mysqli->query("SELECT * FROM plato");
$reg=$resultado->fetch_assoc();

while($reg=$resultado->fetch_assoc()){
    echo
        '<div class="col-3 bg-secondary bg-opacity-10 m-1">
            <form action="" method="post">
                <table m-2>
                    <tr>
                        <td>Nombre de plato: </td>   
                        <td><textarea class="form-control" name="titulo">'.$reg['titulo'].'</textarea></td>
                    </tr>
                    <tr>
                        <td>Tipo de plato: </td>   
                        <td><input class="form-control" type="text" name="tipo" value='.$reg['tipo'].'></td>
                    </tr>
                    <tr>
                        <td>Numero de comensales: </td>   
                        <td><input class="form-control" type="number" name="comensales" value='.$reg['comensales'].'></td>
                    </tr>
                    <tr>
                        <td>Precio: </td>   
                        <td><input class="form-control" type="number" name="precio" value='.$reg['precio'].'></td>
                    </tr>
                    <tr>
                        <td>Descripcion: </td>   
                        <td><textarea class="form-control"  name="descripcion">'.$reg['descripcion'].'</textarea></td>
                    </tr>
                    <tr>
                        <td>Link de imagen: </td>   
                        <td><input class="form-control" type="text" name="image" value='.$reg['image'].'></td>
                    </tr>
                </table>
                <input class="btn btn-primary" type="submit" name="editarPlato" value="Editar">
                <input class="btn btn-primary" type="submit" name="eliminarPlato" value="Eliminar"> 
            </form>
        </div>';




}        
?>