<h3>
    Nuevo Plato
</h3>

<?php

require '../database/db_conect.php';
$mysqli = conectar();

$titulo = "";
$tipo = "";
$comensales = 0;
$precio = 0;
$descripcion = "";
$image = "";

if (isset($_POST['guardar'])) {
    $titulo = $_POST['titulo'];
    $tipo = $_POST['tipo'];
    $comensales = $_POST['comensales'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $image = $_POST['image'];

    $resultado = $mysqli->query("INSERT INTO plato (titulo, tipo, comensales, precio, descripcion, image) VALUES ('$titulo', '$tipo', '$comensales', '$precio', '$descripcion', '$image')"); 
    header('location: index.php');
}

echo 
    '<div class="col-3 bg-secondary bg-opacity-10">
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nombre de plato: </td>   
                    <td><textarea class="form-control" name="titulo"></textarea></td>
                </tr>
                <tr>
                    <td>Tipo de plato: </td>   
                    <td><input class="form-control" type="text" name="tipo"></td>
                </tr>
                <tr>
                    <td>Numero de comensales: </td>   
                    <td><input class="form-control" type="number" name="comensales"></td>
                </tr>
                <tr>
                    <td>Precio: </td>   
                    <td><input class="form-control" type="number" name="precio"></td>
                </tr>
                <tr>
                    <td>Descripcion: </td>   
                    <td><textarea class="form-control"  name="descripcion"></textarea></td>
                </tr>
                <tr>
                    <td>Link de imagen: </td>   
                    <td><input class="form-control" type="text" name="image"></td>
                </tr>
            </table>
            <p><input class="btn btn-primary" type="submit" name="guardar" value="Anadir"/></p>
        </form>
    </div>';

?>